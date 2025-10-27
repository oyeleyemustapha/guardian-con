<footer>
    	<div class="container">
    		<div class="footer-top" id="contact">
    			<div class="contact-info">
    				<h2>Contact Us</h2>
    				<p>Please feel free to contact us and we will get back to you as soon as we can.</p>
    				<ul>
    					<li><a><i class="fa-solid fa-phone"></i><strong>Phone :</strong> <?php echo $contact->phone; ?></a></li>
    					<li><a><i class="fa-solid fa-envelope"></i><strong>Email :</strong> <?php echo $contact->email; ?></a></li>
    				</ul>
    			</div>
    			<form method="post" id="contactForm">
    				<div class="form-group">
    					<label>Full Name</label>
    					<input type="text" class="form-control" name="fullname" required>
    				</div>
    				<div class="form-group">
    					<label>Phone</label>
    					<input type="tel" class="form-control" name="phone" required>
    				</div>
    				<div class="form-group">
    					<label>Email Address</label>
    					<input type="email" class="form-control" name="email" required>
    				</div>
    				<div class="form-group">
    					<label>Message</label>
    					<textarea class="form-control" name="message" required></textarea>
    				</div>
    				<button class="contactBtn">SEND MESSAGE</button>

                    <div class="cf-turnstile mt-3" data-sitekey="<?php echo env('CLOUDFLARE_TURNSTILE_SITE_KEY'); ?>" data-theme="auto" data-size="normal" data-callback="onTurnstileVerify"></div>
    			</form>
                <script>
                    function onTurnstileVerify(token){
                        $('.contactBtn').attr('disabled', false)
                    }
                </script>
                <div class="pattern"></div>
    		</div>
    		<div class="footer-bottom">
    			<div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="footer-brand">
                        <img src="assets/build/img/logo.png" class="logo-footer">
                        <p class="footer-address">Rutam House 103-109, Apapa-Oshodi Express Way, Mushin, Lagos</p>
                        <div class="social-media">
                            <ul>
                                <li>
                                    <a href="https://web.facebook.com/guardianng" title="Follow Our Page on Facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="30px" height="30px" fill-rule="nonzero">
                                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                <g transform="scale(8.53333,8.53333)">
                                                    <path d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.016 4.432,10.984 10.206,11.852v-8.672h-2.969v-3.154h2.969v-2.099c0,-3.475 1.693,-5 4.581,-5c1.383,0 2.115,0.103 2.461,0.149v2.753h-1.97c-1.226,0 -1.654,1.163 -1.654,2.473v1.724h3.593l-0.487,3.154h-3.106v8.697c5.857,-0.794 10.376,-5.802 10.376,-11.877c0,-6.627 -5.373,-12 -12,-12z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://x.com/GuardianNigeria" title="Follow Us on Twitter">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="30px" height="30px" fill-rule="nonzero">
                                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                <g transform="scale(8.53333,8.53333)">
                                                    <path d="M28,6.937c-0.957,0.425 -1.985,0.711 -3.064,0.84c1.102,-0.66 1.947,-1.705 2.345,-2.951c-1.03,0.611 -2.172,1.055 -3.388,1.295c-0.973,-1.037 -2.359,-1.685 -3.893,-1.685c-2.946,0 -5.334,2.389 -5.334,5.334c0,0.418 0.048,0.826 0.138,1.215c-4.433,-0.222 -8.363,-2.346 -10.995,-5.574c-0.458,0.788 -0.721,1.704 -0.721,2.683c0,1.85 0.941,3.483 2.372,4.439c-0.874,-0.028 -1.697,-0.268 -2.416,-0.667c0,0.023 0,0.044 0,0.067c0,2.585 1.838,4.741 4.279,5.23c-0.447,0.122 -0.919,0.187 -1.406,0.187c-0.343,0 -0.678,-0.034 -1.003,-0.095c0.679,2.119 2.649,3.662 4.983,3.705c-1.825,1.431 -4.125,2.284 -6.625,2.284c-0.43,0 -0.855,-0.025 -1.273,-0.075c2.361,1.513 5.164,2.396 8.177,2.396c9.812,0 15.176,-8.128 15.176,-15.177c0,-0.231 -0.005,-0.461 -0.015,-0.69c1.043,-0.753 1.948,-1.692 2.663,-2.761z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/guardiannigeria" title="Follow Us on Instagram"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="50px" height="50px" fill-rule="nonzero">
                                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                <g transform="scale(5.12,5.12)">
                                                    <path d="M16,3c-7.16752,0 -13,5.83248 -13,13v18c0,7.16752 5.83248,13 13,13h18c7.16752,0 13,-5.83248 13,-13v-18c0,-7.16752 -5.83248,-13 -13,-13zM16,5h18c6.08648,0 11,4.91352 11,11v18c0,6.08648 -4.91352,11 -11,11h-18c-6.08648,0 -11,-4.91352 -11,-11v-18c0,-6.08648 4.91352,-11 11,-11zM37,11c-1.10457,0 -2,0.89543 -2,2c0,1.10457 0.89543,2 2,2c1.10457,0 2,-0.89543 2,-2c0,-1.10457 -0.89543,-2 -2,-2zM25,14c-6.06329,0 -11,4.93671 -11,11c0,6.06329 4.93671,11 11,11c6.06329,0 11,-4.93671 11,-11c0,-6.06329 -4.93671,-11 -11,-11zM25,16c4.98241,0 9,4.01759 9,9c0,4.98241 -4.01759,9 -9,9c-4.98241,0 -9,-4.01759 -9,-9c0,-4.98241 4.01759,-9 9,-9z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/guardian-newspapers-limited/" title="Follow Us on Linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="30px" height="30px" fill-rule="nonzero">
                                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                <g transform="scale(8.53333,8.53333)">
                                                    <path d="M24,4h-18c-1.105,0 -2,0.895 -2,2v18c0,1.105 0.895,2 2,2h18c1.105,0 2,-0.895 2,-2v-18c0,-1.105 -0.895,-2 -2,-2zM10.954,22h-2.95v-9.492h2.95zM9.449,11.151c-0.951,0 -1.72,-0.771 -1.72,-1.72c0,-0.949 0.77,-1.719 1.72,-1.719c0.948,0 1.719,0.771 1.719,1.719c0,0.949 -0.771,1.72 -1.719,1.72zM22.004,22h-2.948v-4.616c0,-1.101 -0.02,-2.517 -1.533,-2.517c-1.535,0 -1.771,1.199 -1.771,2.437v4.696h-2.948v-9.492h2.83v1.297h0.04c0.394,-0.746 1.356,-1.533 2.791,-1.533c2.987,0 3.539,1.966 3.539,4.522z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-link-container">
                        <div class="footer-link-upper">
                            <div class="row">
                                <div class="col-xl-10 col-md-12">
                                    <div class="footer-link-items">
                                        <div class="links">
                                            <p></p>
                                            <ul>
                                                <li><a href="https://guardian.ng/contributors/">Contributors</a></li>
                                                <li><a href="https://guardian.ng/category/business-services/capital-market/">Capital Market</a></li>
                                                <li><a href="https://guardian.ng/category/energy/">Energy</a></li>
                                                <li><a href="https://guardian.ng/category/guardian-angels/advocacy/">Advocacy</a></li>
                                                <li><a href="https://guardian.ng/category/news/world/africa/">Africa</a></li>
                                                <li><a href="https://guardian.ng/category/news/world/asia/">Asia</a></li>
                                            </ul>
                                        </div>
                                        <div class="links">
                                            <p></p>
                                            <ul>
                                                <li><a href="https://guardian.ng/category/opinion/">Opinion</a></li>
                                                <li><a href="https://guardian.ng/category/news/world/europe/">Europe</a></li>
                                                <li><a href="https://guardian.ng/category/art/c74-arts/">Arts</a></li>
                                                <li><a href="https://guardian.ng/category/life/beauty/">Beauty</a></li>
                                                <li><a href="https://guardian.ng/category/features/education/">Cartoons</a></li>
                                                <li><a href="https://guardian.ng/category/opinion/columnists/">Columnists</a></li>
                                            </ul>
                                        </div>
                                        <div class="links">
                                            <p></p>
                                            <ul>
                                                <li><a href="https://guardian.ng/category/features/">Features</a></li>
                                                <li><a href="https://guardian.ng/category/saturday-magazine/fashion/">Fashion</a></li>
                                                <li><a href="https://guardian.ng/category/sport/football/">Football</a></li>
                                                <li><a href="https://guardian.ng/category/business-services/industry/">Industry</a></li>
                                                <li><a href="https://guardian.ng/category/business-services/insurance/">Insurance</a></li>
                                                <li><a href="https://guardian.ng/category/news/world/">World</a></li>
                                            </ul>
                                        </div>

                                        <div class="links">
                                            <p></p>
                                            <ul>
                                                <li><a href="https://guardian.ng/category/saturday-magazine/travel-a-tourism/">Travel &amp; Tourism</a></li>
                                                <li><a href="https://guardian.ng/category/features/weekend/">Weekend</a></li>
                                                <li><a href="https://guardian.ng/category/interview/">Interview</a></li>
                                                <li><a href="https://guardian.ng/category/saturday-magazine/fashion/">Fashion</a></li>
                                                <li><a href="https://guardian.ng/category/technology/technology-technology/">Gadgets</a></li>
                                                <li><a href="https://guardian.ng/category/features/law/">Law</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                </div>
                            </div>
                        </div>
                        <div class="footer-link-lower">
                            <div class="row">
                                <div class="col-xl-8 col-md-12">
                                    <ul class="footer-quick-links">
                                        <li><a href="https://guardian.ng/privacy-policy">Privacy Policy</a></li>
                                        <li><a href="https://guardian-help.freshdesk.com/support/tickets/new">Contact Support</a></li>
                                        <li><a href="https://media.guardian.ng/">Advertise With Us</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <p class="copyright">© <?php echo date('Y') ?> GUARDIAN Newspapers. ALL RIGHTS RESERVED</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    		</div>
    	</div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
    <script src="node_modules/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <script src="assets/build/js/script.min.js"></script>
</body>
</html>