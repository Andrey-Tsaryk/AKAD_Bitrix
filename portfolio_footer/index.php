<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Portfolio");
?>


<!-- HERO SECTION  -->
<div class="site-hero_2">
		<div class="page-title">
			<div class="big-title montserrat-text uppercase">our work</div>
			<div class="small-title montserrat-text uppercase">home / portfolio</div>
		</div>
	</div>


	<!-- PORTFOLIO -->
	<section class="portfolio">
		<div class="container">
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
						<a href="single-project.html" class="portfolio_item wow fadeInUp">
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
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".1s">
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
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".2s">
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
					<div class="col-md-4  fashion ads">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".3s">
							<img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/work-3.jpg" alt="image">
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
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".4s">
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

					<!-- single work -->
					<div class="col-md-4 logo web photography">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".5s">
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
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".6s">
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
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".7s">
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

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".8s">
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

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay=".9s">
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
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay="1s">
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
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay="1.1s">
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

					<!-- single work -->
					<div class="col-md-4 fashion logo">
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay="1.2s">
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
						<a href="single-project.html" class="portfolio_item wow fadeInUp" data-wow-delay="1.3s">
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


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>