<?php
  include "./shared/header-top.php"
?>
</head>

<?php
  include "./shared/navbar.php"
?>


            <div class="inteco-page-wrapper" id="inteco-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    
                    <!--banner start-->
                    <div class="inteco-blog-title-wrap  inteco-style-custom inteco-feature-image" 
                        style="height:75vh;background-image:url(https://img.freepik.com/free-photo/businessman-using-laptop-mobile-phone_1421-526.jpg?t=st=1712043643~exp=1712047243~hmac=f0a0c55862fd0dc57ba245fa7dc01e7cbb5d5752da25b4c85873f24b378e1c46&w=740)">
                        <div class="inteco-header-transparent-substitute"></div>
                        <div class="inteco-blog-title-overlay" style="opacity: 0.27 ;"></div>
                        <div class="inteco-blog-title-bottom-overlay"></div>
                            <div class="inteco-blog-title-container inteco-container">
                                <div class="inteco-blog-title-content inteco-item-pdlr" >
                                    <div class="inteco-page-title-container-about-our">
                                        <div class="about-our-h1 inteco-page-title-content inteco-item-pdlr">
                                            <h1 class="inteco-page-title">Contact Us</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                include "./shared/popup.php"
                            ?>
                    </div>
                    <!--banner end-->

                    <div class="gdlr-core-pbf-wrapper " style="padding: 40px 0px 40px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first" data-skin="White form">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 32px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Leave us your info </h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;">
                                                        <p>We value your feedback and inquiries. Please use the form below to get in touch with us. Fill in your details and message, and we'll get back to you as soon as possible</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                    <div role="form" class="wpcf7" id="wpcf7-f1979-p1977-o1" lang="en-US" dir="ltr">
                                                        <div class="screen-reader-response"></div>
                                                        <form id="contactForm" class="contact-form">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                                                        <span class="alert-error"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email"  required>
                                                                        <span class="alert-error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" required>
                                                                        <span class="alert-error"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" id="state" name="state" placeholder="state*" type="text"  required>
                                                                        <span class="alert-error"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" id="city" name="city" placeholder="city" type="text" required>
                                                                        <span class="alert-error"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="form-group comments">
                                                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About your Project / Ideas / Thoughts *"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <button type="submit" name="submit" id="contactFormSubmitBtn">
                                                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!-- Alert Message -->
                                                            <div class="col-lg-12 alert-notification">
                                                                <div id="message" class="alert-msg"></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Location</h3></div>
                                                </div>
                                            </div>

                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                        <p>290A, 80 Feet TNHB Road, Sholinganallur,
                                                            <br />Chennai – 600 119.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="gdlr-core-text-box-item  gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 25px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                        <div class=" inteco-item-pdlr">
                                                            <a href="https://www.facebook.com/ICEIL/" target="_blank">
                                                                <i class="fab fa-facebook"
                                                                    style="font-size: 17px ;color: black;margin-right: 12px ;"></i>
                                                            </a>
                                                            <a href="https://twitter.com/iceilsys" target="_blank">
                                                                <i class="fa-brands fa-x-twitter"
                                                                    style="font-size: 17px ;color: black ;margin-right: 12px ;"></i>
                                                            </a>
                                                            <a href="https://www.linkedin.com/company/iceil-systems/" target="_blank">
                                                                <i class="fab fa-linkedin"
                                                                    style="font-size: 17px ;color: black ;margin-right: 12px ;"></i>
                                                            </a>
                                                            <a href="https://www.instagram.com/iceilstretchceiling/" target="_blank">
                                                                <i class="fab fa-instagram"
                                                                    style="font-size: 17px ;color: black ;margin-right: 12px ;"></i>
                                                            </a>
                                                            <a href="https://www.youtube.com/@ICeilSystems" target="_blank">
                                                                <i class="fab fa-youtube"
                                                                    style="font-size: 17px ;color: #2676bc ;margin-right: 12px ;"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix ">
                                                    <ul>
                                                        <li class=" gdlr-core-skin-divider gdlr-core-with-hover">
                                                            <span class="gdlr-core-icon-list-icon-wrap">
                                                                <i class="gdlr-core-icon-list-icon-hover fa fa-envelope" style="font-size: 16px ;"  >
                                                                    </i><i class="gdlr-core-icon-list-icon fa fa-envelope" style="font-size: 16px ;width: 16px ;" >
                                                                </i>
                                                            </span>
                                                            <div class="gdlr-core-icon-list-content-wrap">
                                                                <span class="gdlr-core-icon-list-content" style="font-size: 16px ;">
                                                                    info@iceilsystems.com</span>
                                                            </div>
                                                        </li>
                                                        <li class=" gdlr-core-skin-divider gdlr-core-with-hover"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover fa fa-phone" style="font-size: 16px ;"  ></i><i class="gdlr-core-icon-list-icon fa fa-phone" style="font-size: 16px ;width: 16px ;" ></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 16px ;">+91 89255 17107 / 17108 / 17109/ 17105 / 17106</span></div>
                                                        </li>
                                                    </ul>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                    <div class="gdlr-core-title-item-title-wrap ">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">Map</h3></div>
                                                </div>
                                            </div>
                                            
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-wp-google-map-plugin-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                                                    <div style="overflow:hidden;width: 100%;position: relative;height:45vh">
                                                        <!-- <iframe style="width:100%; height:480px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d130635.62542950493!2d80.21372673931594!3d12.916098277520902!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525bcca7f090d7%3A0xdfe557111116b049!2sIceil%20Stretch%20Ceilings!5e0!3m2!1sen!2sin!4v1714123778983!5m2!1sen!2sin" width="600" height="450" style="border:0;" frameborder="0" allowfullscreen ></iframe> -->

                                                        <div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">

                                                        </div>
                                                        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="gdlr-core-pbf-wrapper " style="padding: 75px 0px 75px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                        <a href="https://www.facebook.com/ICEIL" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 20px ;color: #232323 ;margin-left: 37px ;"><i class="fab fa-facebook" ></i></a>
                                        <a href="https://www.linkedin.com/company/iceil-systems/" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="font-size: 20px ;color: #232323 ;margin-left: 37px ;"><i class="fab fa-linkedin" ></i></a>
                                        <a href="https://www.instagram.com/iceilstretchceiling/" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="font-size: 20px ;color: #232323 ;margin-left: 37px ;"><i class="fab fa-instagram" ></i></a>
                                        <a href="https://twitter.com/iceilsys" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 20px ;color: #232323 ;margin-left: 37px ;"><i class="fa-brands fa-x-twitter" ></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <?php
                   include "./shared/footer.php"
                ?>
        </div>
    </div>
    
    <?php
        include "./shared/script.php"
    ?>