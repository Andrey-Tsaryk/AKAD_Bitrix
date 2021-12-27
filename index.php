<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Akad");
?> 

<?php
	use \Bitrix\Main\Page\Asset;
	$APPLICATION->ShowHead();
	?>


	<!-- HERO SECTION  -->
	<div class="site-hero">
		<ul class="slides">
			<li>
				<div><span class="small-title uppercase montserrat-text">we're</span></div>
				<div class="big-title uppercase montserrat-text">digital agency</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			</li>
			<li>
				<div><span class="small-title uppercase montserrat-text">we do</span></div>
				<div class="big-title uppercase montserrat-text">creative stuff</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. </p>
			</li>
		</ul>
	</div>

	<!-- HISTORY OF AGENCY -->
	<div class="container">
		<div class="agency">
			<div class="col-md-5 col-sm-12">
				<div class="row">
					<img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/agency.jpg" alt="image">
				</div>
			</div>
			<div class="col-md-offset-1 col-md-6 col-sm-12">
				<div class="row">
					<div class="section-title">
						<span>history of agency</span>
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor nisi ut aliquip ex ea commodo
						consequat. in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. 
					</p>
					<a href="#" class="btn green" style="float:right;margin-top:30px"><span>read more</span></a>
				</div>
			</div>
		</div>
	</div>


	<!-- WHY CHOOSE US -->
	<section class="services">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<span>why choose us</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>

			<div class="col-md-7 col-sm-12 services-left wow fadeInUp">
				<div class="row" style="margin-bottom:50px">
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<i class="icon ion-ios-infinite-outline"></i>
							<span class="montserrat-text uppercase service-title">unlimited options</span>
							<ul>
								<li>branding</li>
								<li>design &amp; copywriting</li>
								<li>concept development</li>
								<li>user experience</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<i class="icon ion-ios-shuffle"></i>
							<span class="montserrat-text uppercase service-title">design &amp; development</span>
							<ul>
								<li>branding</li>
								<li>design &amp; copywriting</li>
								<li>concept development</li>
								<li>user experience</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<i class="icon ion-ios-cart-outline"></i>
							<span class="montserrat-text uppercase service-title">e-commerce</span>
							<ul>
								<li>branding</li>
								<li>design &amp; copywriting</li>
								<li>concept development</li>
								<li>user experience</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="row">
							<i class="icon ion-ios-settings"></i>
							<span class="montserrat-text uppercase service-title">customizable design</span>
							<ul>
								<li>branding</li>
								<li>design &amp; copywriting</li>
								<li>concept development</li>
								<li>user experience</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-5 col-sm-12 services-right wow fadeInUp" data-wow-delay=".1s">
				<div class="row">
					<img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/serv.jpg" alt="image">
				</div>
			</div>

		</div>
	</section>


	<!-- PORTFOLIO -->
	<section class="portfolio">
		<div class="container">
			<div class="row">
				<div class="section-title">
					<span>our portfolio</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
				

			<!-- categories  -->
			<div class="col-md-3">
				<div class="row categories-grid wow fadeInLeft">
					<span class="montserrat-text uppercase">choose category</span>

					<nav class="categories">
						<ul class="portfolio_filter">
							<li><a href="" class="active" data-filter="*">all</a></li>
							<li><a href="" data-filter=".photography">photography</a></li>
							<li><a href="" data-filter=".web">webdesign</a></li>
							<li><a href="" data-filter=".logo">logo</a></li>
							<li><a href="" data-filter=".graphics">graphics</a></li>
							<li><a href="" data-filter=".ads">advertising</a></li>
							<li><a href="" data-filter=".fashion">fashion</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<!-- all works -->
			<div class="col-md-9">
				<div class="row portfolio_container">
					<!-- single work -->
					<div class="col-md-4 photography">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp">
							<img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>Brave man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".2s">
							<img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>super man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 ads graphics">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".3s">
							<img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>bat man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion ads">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".4s">
							<img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>spider man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 graphics ads">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".5s">
							<img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 logo web photography">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".6s">
							<img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 ads graphics">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".7s">
							<img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/work-2.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 web fashion photography">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".8s">
							<img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/work-3.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item work-grid wow fadeInUp" data-wow-delay=".9s">
							<img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/work-1.jpg" alt="image">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span>iron man</span>
									<em>photography</em>
								</div>
							</div>
						</a>
					</div>
					<!-- end single work -->
				</div>
				<!-- end row -->
			</div>
			<!-- all works end -->
		</div>
		<!-- end container -->
	</section>
	<!-- portfolio -->

	<!-- newsletter -->
	<section class="green-section wow fadeInUp" style="padding:50px 0">
		<div class="container">
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<span class="white-text montserrat-text uppercase" style="font-size:30px;display:block;">
						you think we're cool? let's work together
					</span>
					<a href="#" class="btn white" style="margin-top:30px"><span>get in touch</span></a>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<div class="row">
					<div class="white-section" style="padding:20px">
						<span class="montserrat-text uppercase" style="font-size:24px">stay informed with our newsletter</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<form action="#" method="post">
							<div class="input_1">
								<input type="text" name="email">
								<span>your email</span>
							</div>
							<button type="submit" class="btn green" style="margin-top:20px"><span>send</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>