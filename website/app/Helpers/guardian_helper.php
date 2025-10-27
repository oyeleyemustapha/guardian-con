<?php 
	
	require ROOTPATH.'vendor/autoload.php';

	use Aws\Ses\SesClient;
	use Aws\Exception\AwsException;

    function mailer($payload){
		$credentials = [
		    'version' => 'latest',
		    'region' => 'eu-west-1',
		    'credentials' => [
		        'key' => env('SMTP_USER'),
		        'secret' => env('SMTP_PASSWORD'),
		    ],
		];
		$sesClient = new SesClient($credentials);
		$senderEmail = env('SMTP_FROM_EMAIL');
		$recipientEmail = $payload['email']; 
		$subject = $payload['subject'];
		$bodyText = "";
		$bodyHtml = $payload['message'];
		$charset = 'UTF-8';
		try {
		    $result = $sesClient->sendEmail([
		    	"FromEmailAddress"=>"\"Guardian Newspapers - Change Of Name\" <".$senderEmail.">",
		        'Destination' => [
		            'ToAddresses' => [$recipientEmail],
		        ],
		        'Message' => [
		            'Body' => [
		                'Html' => [
		                    'Charset' => $charset,
		                    'Data' => $bodyHtml,
		                ],
		                'Text' => [
		                    'Charset' => $charset,
		                    'Data' => $bodyText,
		                ],
		            ],
		            'Subject' => [
		                'Charset' => $charset,
		                'Data' => $subject,
		            ],
		        ],
		        'Source' => "\"Guardian Newspapers - Change Of Name\" <".$senderEmail.">",
		    ]);
		    return true;
		    //return "Email sent! Message ID: " . $result['MessageId'] . "\n";
		} 
		catch (AwsException $e) {
		    return "Error sending email: " . $e->getMessage() . "\n";
		}
	}


	function validateTurnstile($token, $secret, $remoteip = null) {
	    $url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

	    $data = [
	        'secret' => $secret,
	        'response' => $token
	    ];

	    if ($remoteip) {
	        $data['remoteip'] = $remoteip;
	    }

	    $options = [
	        'http' => [
	            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
	            'method' => 'POST',
	            'content' => http_build_query($data)
	        ]
	    ];

	    $context = stream_context_create($options);
	    $response = file_get_contents($url, false, $context);

	    if ($response === FALSE) {
	        return ['success' => false, 'error-codes' => ['internal-error']];
	    }

	    return json_decode($response, true);
    }


?>