<?php
  include "./shared/header-top.php"
?>
<style>
    .modal-backdrop.show body{
        position: fixed !important;
        top: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        z-index: 1040 !important;
        background-color: #000 !important;
    }
    .modal-backdrop.show{
        opacity: 0 !important;
    }
    .modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0 !important;
    background-color: #000;
}
</style>
</head>

<?php
  include "./shared/navbar.php"
?> 
            
            <div class="inteco-blog-title-wrap  inteco-style-custom inteco-feature-image" 
                style="height: 65vh;background-image:url(https://img.freepik.com/free-photo/cloud-computing-network-connection-perforated-paper_53876-14267.jpg?t=st=1711629805~exp=1711633405~hmac=b537633db63c05c723dada2fd2e6e12299eb629e49c9fffc85f8195ffe587eb9&w=740)">
                <div class="inteco-header-transparent-substitute"></div>
                <div class="inteco-blog-title-overlay" style="opacity: 0.27 ;"></div>
                <div class="inteco-blog-title-bottom-overlay"></div>
                <div class="inteco-blog-title-container inteco-container">
                    <div class="inteco-blog-title-content inteco-item-pdlr" >
                        <div class="inteco-page-title-container-about-our">
                            <div class="about-our-h1 inteco-page-title-content inteco-item-pdlr">
                                <h1 class="inteco-page-title">Downloads</h1>
                            </div>
                        </div>
                    </div>
            </div>
                        
                    </div>
            <div class=" download-padding"  id="gdlr-core-wrapper-1">
                
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="col-lg-4 col-md-5 col-sm-12 gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 14px ;">
                                            <div class="gdlr-core-title-item-title-wrap ">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 39px ;letter-spacing: 0px ;text-transform: none ;color: #000000 ;">Downloads.</h3></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align" style="margin-bottom: 0px ;">
                                            <div class="gdlr-core-divider-container" style="max-width: 220px ;">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #d6c5c2 ;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-12 gdlr-core-pbf-column gdlr-core-column-40">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                            <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                <p>Iceil Systems was started with a vision to bring Printed interiors for your home and commercial spaces through Stretch Ceiling, Customized WallPaper, and 3D Epoxy Flooring. We are backed by 10 years of industrial experience in digital printing & signage solutions. We are the leading Stretch Ceiling Manufacturer in India and we offer a wide variety of Stretch Ceilings combined with innovative lighting solutions. Our operations started in Chennai, India and we are looking for an aggressive Pan-India growth offering high-quality interiors through Franchises. Let’s together STYLE YOUR SPACE.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-section-for-download">
                <h3 class="text-center">Iceil Brochure</h3><br>
                <div class="row">
                    <!--brochure one-->
                    <div class="col-lg-4 col-md-6 col-sm-6 stretch-ceiling">
                        <h5>Corporate Brochure</h5>
                        <a class="card" href="img/project-gallery/pics/01 (1).jpeg" download>
                            <img src="img/project-gallery/pics/01 (1).jpeg" alt="Corporate Brochure">
                        </a><br>
                        <div class="input-button">
                            <button class="btn-download text-center btn btn-primary" data-toggle="modal" data-target="#downloadModal">Download</button>
                        </div>
                    </div>
                    <!--brochure 2-->
                    <div class="col-lg-4 col-md-6 col-sm-6 stretch-ceiling">
                        <h5>Lighting Brochure</h5>
                        <a class="card" href="img/project-gallery/pics/02a.jpg" download>
                            <img src="img/project-gallery/pics/02a.jpg" alt="Lighting Brochure">
                        </a><br>
                        <div class="input-button">
                            <button class="btn-download text-center btn btn-primary" data-toggle="modal" data-target="#download2Modal" >Download</button>
                        </div>
                    </div>
                    <!--brochure 3-->
                    <div class="col-lg-4 col-md-6 col-sm-6 stretch-ceiling">
                        <h5>Technical Spec</h5>
                        <a class="card" href="img/project-gallery/pics/03.jpg" download>
                            <img src="img/project-gallery/pics/03.jpg" alt="Technical Spec">
                        </a><br>
                        <div class="input-button">
                            <button class="btn-download text-center btn btn-primary" data-toggle="modal" data-target="#download3Modal">Download</button>
                        </div>
                    </div>
                </div>
            </div>

<!-- Brochure section end-->

<div id="toast-container"></div>
<!-- Modal One-->
<div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="downloadModalLabel">Fill the form to get Brochure</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="brochureForm">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nameone">Enter Name*</label>
                        <input type="text" class="form-control" id="nameone" name="nameone" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="emailone">Enter Email*</label>
                        <input type="email" class="form-control" id="emailone" name="emailone" placeholder="Enter Your Email" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send Corporate Brochure</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal 2-->
<div class="modal fade" id="download2Modal" tabindex="-1" role="dialog" aria-labelledby="download2ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="download2ModalLabel">Fill the form to get Brochure</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="brochuretwoForm">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nametwo">Enter Name*</label>
                        <input type="text" class="form-control" id="nametwo" name="nametwo" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="emailtwo">Enter Email*</label>
                        <input type="email" class="form-control" id="emailtwo" name="emailtwo" placeholder="Enter Your Email" required>
                    </div>
                    <input type="hidden" id="pdfFiletwo" name="pdfFiletwo">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send Lighting Brochure's PDF</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal 3-->
<div class="modal fade" id="download3Modal" tabindex="-1" role="dialog" aria-labelledby="download3ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="download3ModalLabel">Fill the form to get Brochure</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="brochurethreeForm">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="namethree">Enter Name*</label>
                        <input type="text" class="form-control" id="namethree" name="namethree" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="emailthree">Enter Email*</label>
                        <input type="email" class="form-control" id="emailthree" name="emailthree" placeholder="Enter Your Email" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send Technical Spec</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal end-->

            
        <?php
            include "./shared/footer.php"
        ?>
        </div>
    </div>
        
    
    <!-- JavaScript to set download link -->
