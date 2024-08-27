<?php
include "./shared/header-top.php"
?>
<style>
	@media(max-width:800px) {
		.mry-menu-button-frame .mry-menu-btn {
			margin-top: -9px;
		}

	}

	@media(min-width:700px) {
		.mry-slider-arrows {
			display: flex;
		}
	}

	@media(max-width:699px) {
		.mry-slider-arrows {
			display: none;
		}
	}

	@media (max-width: 500px) {}

	.modal-backdrop.show body {
		position: fixed !important;
		top: 0 !important;
		right: 0 !important;
		bottom: 0 !important;
		left: 0 !important;
		z-index: 1040 !important;
		background-color: #000 !important;
	}

	.modal-backdrop.show {
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

	#exampleModalLabel {
		color: black !important;
	}
</style>
</head>

<?php
include "./shared/navbar.php"
?>


<!-- <canvas class="mry-dots"></canvas> -->

<div class="">
	<div class="mry-button-prev1 mry-magnetic-link">
		<span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span>
	</div>
	<div class="mry-button-next1 mry-magnetic-link">
		<span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span>
	</div>
</div>

<div class="swiper-container-fluid mry-main-slider">
	<div class="swiper-wrapper">
		<!-- Geometric -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/14.jpg" alt="Architectural customised lighting" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Architectural customised lighting</div>
										<h1 class="">Geometric Shape <br><span class="mry-border-text">lighting</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal">Iceil Geometric Shape Custom Lighting involves designing personalized lighting solutions using shapes like squares, triangles, circles, and others. These designs aim to enhance both the aesthetic appeal and practical functionality of indoor spaces, offering versatile and modern lighting options.
										</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="architectural-completed.php">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->
		</div>
		<!-- Translucent -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover mry-position-right" src="images/landing/iceil-landing/1.jpg" alt="Translucent Stretch Ceiling	" data-swiper-parallax="500"
							data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Stretch Ceiling </div>
										<h1 class="">Translucent<br><span class="mry-border-text"></span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal">
											Iceil Translucent Stretch Ceilings allow light to be evenly distributed with the stretch membrane offering 75% Translucency. We can provide a vast seamless lighting solution with a span of 50 SQM without joints creating a great ambiance.
										</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="Translucent-Stretch-Ceilings">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- Printed -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover mry-position-right" src="images/landing/iceil-landing/2.jpg" alt="Printed Stretch Ceiling	" data-swiper-parallax="500"
							data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Stretch Ceiling </div>
										<h1 class="">Printed Stretch<br><span class="mry-border-text">Ceiling</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal">
											Iceil Printed Stretch Ceilings turn any room of your home or business into a work of designer art.The possibilities are endless, giving you the option of enhancing your ceiling with reproductions of famous artists masterwork, or your own art or photographs using modern digital printing techniques on a stretch fabric ceiling installation.
										</div>	
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="Printed-Stretch-Ceilings">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- RGB Dynamic -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/3.jpg" alt="RGB Dynamic Stretch Ceiling" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Stretch Ceiling</div>
										<h1 class="">RGB Dynamic<br><span class="mry-border-text"></span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal"> Iceil RGB Dynamic Stretch Ceiling combines innovative lighting technology with flexible design, allowing colorful lighting to be implemented through addressable, programmable LEDs and DMX controls.</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="3D-Forms-Stretch-Ceilings">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- 3D Forms -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/4.jpg" alt="3D Forms Stretch Ceiling" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Stretch Ceiling</div>
										<h1 class=""> 3D Forms <br><span class="mry-border-text"></span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal"> 
											Iceil 3D Form Stretch Ceiling are created by engineering multilevel framing structures using the latest fabrication technologies. Such a Structure can be made to the required size, shape, and then can be fitted with the desired stretch film or printed film.
										</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="3D-Forms-Stretch-Ceilings">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- Acoustic -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/5.jpg" alt="Acoustic" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Stretch Ceiling</div>
										<h1 class="">Acoustic Stretch<br><span class="mry-border-text">Ceiling</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal"> Iceil Acoustic Stretch Ceiling combines sound-absorbing materials with a stretchable perforated fabric, effectively reducing noise levels while maintain- ing an aesthetically pleasing appearance.</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="Acoustic">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- Lacquer -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/6.jpg" alt="Lacquer" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Stretch Ceiling</div>
										<h1 class="">Lacquer Stretch<br><span class="mry-border-text">Ceiling</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal"> Iceil Lacquer Stretch Ceiling is a sophisticated ceiling finish characterized by its glossy and reflective surface. Its reflective properties enhance the brightness of the room by bouncing light, while its smooth texture adds a touch of modern elegance.</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="Lacquer-Ceilings">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- Printed Lacquer -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/7.jpg" alt="Printed Lacquer" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Stretch Ceiling</div>
										<h1 class="">Printed Lacquer<br><span class="mry-border-text">Ceiling</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal">
											Iceil Printed Lacquer Ceiling allows printing virtually any design or pattern onto Lacquer Stretch Ceiling. This versatility enables the customization of ceilings to match specific aesthetic preferences or complement interior themes, offering endless possibilities for creating unique and personalized spaces.
										</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="Lacquer-Ceilings">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- Art -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/8.jpg" alt="Art Perforated Ceiling" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Stretch Ceiling</div>
										<h1 class=""> Art Perforated <br><span class="mry-border-text">Ceiling</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal"> Iceil Art Perforated Ceiling is an unique ambient ceiling solution, combining two stretch ceiling layer to create an eye-catching visual effect.</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="StretchCeiling">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- Mirror -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/9.jpg" alt="Mirror Stretch Ceiling" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Stretch Ceiling</div>
										<h1 class="">Mirror Stretch<br><span class="mry-border-text">Ceiling</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal"> 
											Iceil Mirror Stretch Ceiling enhances interior design with reflective surfaces, vi- sually enlarging spaces and creating a sleek, modern aesthetic controls.
										</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="StretchCeiling">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- Metal -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/10.jpg" alt="Metal Perforated illuminated ceiling" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Metal Perforated illuminated ceiling</div>
										<h1 class="">Metal <br><span class="mry-border-text">Ceiling</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal"> 
											Iceil Metal Perforated illuminated ceiling integrates perforated metal panels with embedded lighting elements, offering a unique blend of functionality and aesthetics.
										</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="architectural-completed.php">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- Signage Light -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/11.jpg" alt="Signage Light Box" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Signage Light Box</div>
										<h1 class="">Signage Light <br><span class="mry-border-text">Box</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal"> 
											Iceil fabric signage light box offers a lightweight, durable, and vibrant solution for advertising. It features high-quality fabric stretched over a frame, providing easy installation and portability.
										</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="Boxing">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- Wall Graphics -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/12.jpg" alt="Custom Wall Graphics" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Custom Wall Graphics</div>
										<h1 class="">Wall <br><span class="mry-border-text">Graphics</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal">Iceil Custom Wall Graphics provide a uniquely personalized touch to your space, showcasing an image of your choice printed on premium fabric seam- lessly pasted onto your wall.
										</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="3DWallGraphics">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- Architectural Lighting -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/13.jpg" alt="Architectural customised lighting" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Architectural customised lighting</div>
										<h1 class="">Architectural <br><span class="mry-border-text">lighting</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal">
											Iceil Architectural lights are constructed with lighting in combination with a suitable aluminium frame and a Polycarbonate diffusers / stretch fabric. We can customize this to any shape and size.
										</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="architectural-completed.php">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- ARC -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/15.jpg" alt="Profile Shape Lighting" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Profile Shape Lighting</div>
										<h1 class="">Iceil ARC<br><span class="mry-border-text">WAVE Linear</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal">Iceil Arc/Wave linear lighting features designs that bend on both sides, offering flexible and dynamic illumination options. .
										</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="architectural-completed.php">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- Surface -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/16.jpg" alt="Profile Shape Lighting" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Profile Shape Lighting</div> 
										<h1 class=""> Iceil Surface / <br><span class="mry-border-text">Suspended Linear</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal">
											Iceil surface / suspended linear lighting offers bendable solutions to create versatile linear configurations.
										</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="architectural-completed.php">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- Recessed -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/17.jpg" alt="Profile Shape Lighting" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Profile Shape Lighting</div>
										<h1 class=""> Iceil Curved Recessed <br><span class="mry-border-text">Linear</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal">
											Iceil curved recessed linear lighting seamlessly integrates into gypsum ceilings and offers the flexibility to be bent into various shapes.
										</div>
									</div>
									<div class="col-lg-2 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="architectural-completed.php">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div>
		<!-- Outward -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/18.jpg" alt="Profile Shape Lighting" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-4 col-sm-12 heading-land">
										<div class="mry-subtitle mry-mb-10">Profile Shape Lighting</div>
										<h1 class="">Iceil Outward / Inward / <br><span class="mry-border-text">Downward Linear</span><span class="mry-animation-el"></span></h1>
									</div>
									<div class="col-lg-5 col-sm-12 heading-land d-flex align-self-center">
										<div class="mry-text mry-mb-30 text-light font-weight-normal">
											Iceil outward / inward /downward linear lighting solutions are completely flexible, featuring bendable designs that allow for lighting in any direc- tion-upward, downward, inward, and outward.
										</div>
									</div>
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="architectural-completed.php">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div> 
		<!-- dimmer -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/DIMMER.jpg" alt="Profile Shape Lighting" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="architectural-completed.php">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div> 
		<!-- RGB W DMX -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/RGB W DMX.jpg" alt="Profile Shape Lighting" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="architectural-completed.php">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div> 
		<!-- RGB WW -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/RGB WW.jpg" alt="Profile Shape Lighting" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="architectural-completed.php">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div> 
		<!-- RGB -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/RGB.jpg" alt="Profile Shape Lighting" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="architectural-completed.php">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div> 
		<!-- TUNABLE -->
		<div class="swiper-slide">

			<!-- project -->
			<div class="mry-project-slider-item">
				<div class="mry-project-frame">
					<div class="mry-cover-frame">
						<img class="mry-project-cover" src="images/landing/iceil-landing/TUNABLE.jpg" alt="Profile Shape Lighting" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
						<div class="mry-cover-overlay mry-gradient-overlay"></div>
					</div>
					<div class="mry-main-title-frame">
						<div class="container-fluid">
							<div class="mry-main-title"  data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
								data-swiper-parallax-duration="1000">
								<div class="row">
									<div class="col-lg-3 col-sm-12 d-flex colbtn align-self-center align-items-center justify-content-center">
										<a class="mry-btn mry-default-link mry-anima-link mry-btn-fill-white" href="architectural-completed.php">Click here</a>
										<a class="mry-btn-text mry-default-link mry-anima-link mry-btn-text-white" href="Home">Visit Website</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- project end -->

		</div> 
		<!---end--->
	</div>
</div>


<div class="mry-slider-nav-panel d-flex">
	<!--fixed icons start-->
	<div class="d-flex justify-content-end">
		<div class="static-section-logo ">
			<div class="social-links link1">
				<a target="_blank" href="https://wa.me/918925848069">
					<i class="fab fa-whatsapp"></i>
				</a>
			</div>
			<div class="social-links">
				<a data-toggle="modal" data-target="#exampleModal">
					<i class="far fa-comment-alt"></i> </a>
			</div>
		</div>
		<!-- Modal -->
		<div id="toast-container"></div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Reach Us Out!</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<form id="popupForm">
						<div class="modal-body">
							<div class="form-group">
								<label for="name">Enter Name*</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
							</div>
							<div class="row">
								<div class="col-lg-6 col-sm-12 form-group">
									<label for="email">Enter Email*</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
								</div>
								<div class="col-lg-6 col-sm-12 form-group">
									<label for="tel">Enter Phone NUmber*</label>
									<input type="tel" class="form-control" id="tel" name="tel" placeholder="Enter Your Number" required>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-sm-12 form-group">
									<label for="state">Enter State*</label>
									<input type="text" class="form-control" id="state" name="state" placeholder="Enter Your State" required>
								</div>
								<div class="col-lg-6 col-sm-12 form-group">
									<label for="city">Enter City*</label>
									<input type="text" class="form-control" id="city" name="city" placeholder="Enter Your City" required>
								</div>
							</div>
							<div class="form-group">
								<label for="city">Message*</label>
								<textarea class="form-control" name="message" id="message" rows="" cols="" placeholder="Your Message...*" required></textarea>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Send Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Modal end-->
	</div>
	<!-- Button trigger modal -->




</div>
<!-- <div class="mry-slider-arrows">
	<div class="mry-button-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
	<div class="mry-label">View Other Projects</div>
	<div class="mry-button-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
</div> -->
</div>


<!-- jquery js -->
<script src="js/plugins/jquery.min.js"></script>
<!-- tween max js -->
<!-- <script src="js/plugins/tween-max.min.js"></script> -->
<!-- scroll magic js -->
<script src="js/plugins/scroll-magic.js"></script>
<!-- scroll magic gsap plugin js -->
<script src="js/plugins/scroll-magic-gsap-plugin.js"></script>
<!-- swiper js -->
<script src="js/plugins/swiper.min.js"></script>
<!-- isotope js -->
<script src="js/plugins/isotope.min.js"></script>
<!-- fancybox js -->
<script src="js/plugins/fancybox.min.js"></script>
<!-- mapbox js -->
<script src="js/plugins/mapbox.min.js"></script>
<!-- smooth scrollbar js -->
<script src="js/plugins/smooth-scrollbar.min.js"></script>
<!-- overscroll js -->
<script src="js/plugins/overscroll.min.js"></script>
<!-- canvas js -->
<script src="js/plugins/canvas.js"></script>
<!-- parsley js -->
<script src="js/plugins/parsley.min.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
<script src="js/mailer.js"></script>
<script src="js/mailHelper.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</script>
<?php
include "./shared/script.php"
?>
</body>

</html>