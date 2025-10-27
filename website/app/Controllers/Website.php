<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Faqs;
use App\Models\Steps;
use App\Models\Contact;
use CodeIgniter\API\ResponseTrait;

class Website extends BaseController
{
     use ResponseTrait;
    public function index()
    {
        $faqModel=new Faqs(); 
        $stepModel=new Steps(); 
        $contactModel=new Contact(); 
        $data['pageTitle']="Guardian Newspaper - Change of Name";
        $data['faqs']=$faqModel->find();
        $data['steps']=$stepModel->orderBy('step', 'ASC')->find();
        $data['contact']=$contactModel->first();
        echo view('partials/header', $data);
        echo view('home');
        echo view('partials/footer');
    }



    public function submit_contact(){
        $this->validation->setRules([
         'fullname'=>['label'=>'Full name', 'rules'=>'required'],
         'phone'=>['label'=>'Phone', 'rules'=>'required'],
         'email'=>['label'=>'Email', 'rules'=>'required|valid_email'],
         'message'=>['label'=>'Message', 'rules'=>'required'],
         'cf-turnstile-response'=>['label'=>'Cloudflare Verification', 'rules'=>'required']
        ]);
        $this->validation->withRequest($this->request)->run();
        if($this->validation->getErrors()){
            $form_error=$this->validation->getErrors();
            $error="";
            foreach ($form_error as $key => $value) {
                $error.="<p>$value</p>"; 
            }
            $data=[
                'title'=>'Error',
                'heading'=>'Form validation error',
                'data'=>$error
            ];
            return $this->respond($data, 400);
        }
     else{

            $remoteip = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
            $validation = validateTurnstile($this->request->getPost('cf-turnstile-response'), env('CLOUDFLARE_TURNStILE_SECRET_KEY'), $remoteip);

            if($validation['success']) {


                $mailer=mailer([
                    'email'=>env('CONTACT_EMAIL'),
                    'subject'=>"Contact Message from Guardian Change of Name",
                    'message'=>view('contactmail', [
                        'fullname'=>$this->request->getPost('fullname'), 
                        'phone'=>$this->request->getPost('phone'), 
                        'email'=>$this->request->getPost('email'), 
                        'message'=>$this->request->getPost('message')
                    ])
                ]);


                if($mailer){
                    $data=[
                        'title'=>'Success',
                        'heading'=>'Message Sent',
                        'data'=>"Your message has been sent. We would get back to you."
                    ];
                    return $this->respond($data, 200);
                }
                else{
                    $data=[
                        'title'=>'Error',
                        'heading'=>'Message Error',
                        'data'=>$mailer
                    ];
                    return $this->respond($data, 400);
                }
            }
            else{
                $data=[
                    'title'=>'Error',
                    'heading'=>'Request is not validated. Try again',
                    'data'=>"This is request is not validated by Cloudflare"
                ];
                return $this->respond($data, 400);
            }
      }
    }


}
