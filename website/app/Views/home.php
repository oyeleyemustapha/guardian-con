
    <section class="jumbotron">
        <div class="jumbotron-content">
            <h1>Easily Announce Your Change-Of-Name</h1>
            <p>Officially announce your name change in The Guardian, Publish your change of name and confirmation of name on a national newspaper in three steps.</p>
        </div>
    </section>
    <section class="jumbotron-img"></section>
    <div class="container">
        <section class="homepage-section-two">
            <h1>Why Announce with Us?</h1>
            <div class="row">
                <div class="col-lg-8">
                    <div class="cta-1">
                        <div class="content">
                            <h2>Official Publication</h2>
                            <p>As a major national paper, Guardian Newspaper creates an official public record, making your name change non-negotiable and easily accepted by government agencies and banks.</p>
                        </div>
                    </div>
                    <div class="cta-2">
                        <div class="content">
                            <h2>Legally Compliant</h2>
                            <p>The Guardian ensures your announcement is Legally Compliant, providing the verifiable evidence required by institutions to formalize your new identity without hassle.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cta-3">
                        <div class="content">
                            <h2>Fast & Easy</h2>
                            <p>The process is too Fast & Easy—simply submit documents online, pay, and your notice is reliably scheduled for publication, usually on Wednesdays or Saturdays.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container" id="how-it-works">
        <section class="steps">
            <div class="row">
                <div class="col-lg-6">
                    <h2>How it Works In <span>Four Easy Steps</span></h2>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <?php 
                            if($steps){
                                foreach($steps as $step){
                                    echo'
                                        <div class="col-lg-6">
                                            <div class="step">
                                                <p class="number">'.$step->step.'</p>
                                                <h3>'.$step->title.'</h3>
                                               '.$step->description.'
                                            </div>
                                        </div>
                                    ';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <section class="pricing-section">
            <header>
                <h2>Pricing</h2>
                <p class="blurb">Secure your legal identity today! Publish your Change/Confirmation of Name notice in the authoritative Guardian Newspaper for just NGN 7,000. Get official publication on our set days (Wednesdays/Saturdays). Fast submission, certain compliance.</p>
            </header>
            <div class="plans">
                <div class="plan">
                    <div class="plan-teaser"><span>Our Most Popular option</span></div>
                    <h3>Digital Rate</h3>
                    <h2>₦7000.00</h2>
                    <a href="information.html">Start announcement</a>
                    <ul>
                        <li>Official publication on The Guardian’s Newspaper</li>
                        <li>Guaranteed legal compliance</li>
                        <li>Proof review before publication</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <div class="container" id="faqs">
        <section class="faqs-section">
            <h2>Questions and Answers</h2>
            <div class="faqs">
                <div class="accordion" id="accordionExample">
                    <?php 
                        if($faqs){
                            $counter=1;
                            foreach($faqs as $faq){
                                if($counter==1){
                                    echo'
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading'.$counter.'">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$counter.'" aria-expanded="true" aria-controls="collapse'.$counter.'">
                                                   '.$faq->question.'
                                                </button>
                                            </h2>
                                            <div id="collapse'.$counter.'" class="accordion-collapse collapse show" aria-labelledby="heading'.$counter.'" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    '.$faq->answers.'
                                                </div>
                                            </div>
                                        </div>

                                    ';
                                }
                                else{
                                    echo'
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading'.$counter.'">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$counter.'" aria-expanded="false" aria-controls="collapse'.$counter.'">
                                                   '.$faq->question.'
                                                </button>
                                            </h2>
                                            <div id="collapse'.$counter.'" class="accordion-collapse collapse" aria-labelledby="heading'.$counter.'" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                     '.$faq->answers.'
                                                </div>
                                            </div>
                                        </div>
                                    ';
                                }
                                $counter++;
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
    </div>
    