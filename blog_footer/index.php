<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Blog");
?>


<!-- HERO SECTION  -->
<div class="site-hero_2">
		<div class="page-title">
			<div class="big-title montserrat-text uppercase">blog posts</div>
			<div class="small-title montserrat-text uppercase">home / blog</div>
		</div>
	</div>


	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-12">
					<!-- blog post -->
					<div class="blog_post">
						<div class="post_media">
							<img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/post_1.jpg" alt="post image">
						</div>
						<div class="post_info">
							<div class="post_date montserrat-text uppercase">january 13, 2016</div>
							<i class="icon ion-chatbox-working"></i>
							<span>8</span>
							<i class="icon ion-ios-heart"></i>
							<span>15</span>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
						<a href="single-post.html" class="link montserrat-text uppercase">continue reading <i class="icon ion-arrow-right-c"></i></a>
					</div>
					<!-- blog post -->
					<div class="blog_post wow fadeInUp">
						<div class="post_media">
							<iframe height="500" src="<?=SITE_TEMPLATE_PATH; ?>/https://www.youtube.com/embed/1mO_QMYV-QE?list=PLXWu0OP8--WQZcdnx1OuIwQ2MEMT2ee8O" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="post_info">
							<div class="post_date montserrat-text uppercase">january 13, 2016</div>
							<i class="icon ion-chatbox-working"></i>
							<span>8</span>
							<i class="icon ion-ios-heart"></i>
							<span>15</span>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
						<a href="single-post.html" class="link montserrat-text uppercase">continue reading <i class="icon ion-arrow-right-c"></i></a>
					</div>
					<!-- blog post -->
					<div class="blog_post wow fadeInUp">
						<div class="post_media">
							<iframe src="<?=SITE_TEMPLATE_PATH; ?>/https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/51057943&amp;amp;color=ff5500&amp;amp;auto_play=false&amp;amp;hide_related=false&amp;amp;show_comments=true&amp;amp;show_user=true&amp;amp;show_reposts=false" frameborder="0"></iframe>
						</div>
						<div class="post_info">
							<div class="post_date montserrat-text uppercase">january 13, 2016</div>
							<i class="icon ion-chatbox-working"></i>
							<span>8</span>
							<i class="icon ion-ios-heart"></i>
							<span>15</span>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
						<a href="single-post.html" class="link montserrat-text uppercase">continue reading <i class="icon ion-arrow-right-c"></i></a>
					</div>

					<!-- pagination -->
					<div class="blog_pagination wow fadeInUp">
						<a href="" class="page">
							<i class="icon ion-arrow-left-c prev"></i>
							<span>previous</span>
						</a>
						<span class="divisor">/</span>
						<a href="" class="page">
							<span>next</span>
							<i class="icon ion-arrow-right-c next"></i>
						</a>
					</div>
				</div><!-- end col -->

				<div class="col-md-3">
					<div class="sidebar">
						<div class="widget">
							<div class="input_2">
								<input type="text" placeholder="search...">
								<button type="submit"><i class="icon ion-search"></i></button>
							</div>
						</div>
						<div class="widget">
							<div class="widget_title">posts</div>
							<div class="tab">
								<nav>
									<a href="">popular</a>
									<a href="">latest</a>
									<div class="bottom-line"></div>
								</nav>
								<div class="tab_single shown">
									<div class="related_post">
										<div class="thumb"><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/thumb.jpg" alt="image"></div>
										<a href="" class="post_title montserrat-text uppercase">Magna mollis ultricies</a>
										<div class="post_date">3th october 2015</div>
									</div>
									<div class="related_post">
										<div class="thumb"><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/thumb.jpg" alt="image"></div>
										<a href=""  class="post_title montserrat-text uppercase">Magna mollis ultricies</a>
										<div class="post_date">3th october 2015</div>
									</div>
									<div class="related_post">
										<div class="thumb"><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/thumb.jpg" alt="image"></div>
										<a href=""  class="post_title montserrat-text uppercase">Magna mollis ultricies</a>
										<div class="post_date">3th october 2015</div>
									</div>
								</div>
								<div class="tab_single">
									<div class="related_post">
										<div class="thumb"><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/thumb.jpg" alt="image"></div>
										<a href=""  class="post_title montserrat-text uppercase">Magna mollis ultricies</a>
										<div class="post_date">3th october 2015</div>
									</div>
									<div class="related_post">
										<div class="thumb"><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/thumb.jpg" alt="image"></div>
										<a href=""  class="post_title montserrat-text uppercase">Magna mollis ultricies</a>
										<div class="post_date">3th october 2015</div>
									</div>
									<div class="related_post">
										<div class="thumb"><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/thumb.jpg" alt="image"></div>
										<a href=""  class="post_title montserrat-text uppercase">Magna mollis ultricies</a>
										<div class="post_date">3th october 2015</div>
									</div>
								</div>
							</div>
						</div>

						<div class="widget wow fadeInUp">
							<div class="widget_title">categories</div>
							<ul class="list_2">
								<li><a href="">Business	<span>15</span></a></li>
								<li><a href="">Photography	<span>22</span></a></li>
								<li><a href="">Journal	<span>27</span></a></li>
								<li><a href="">Web development	<span>30</span></a></li>
							</ul>
						</div>

						<div class="widget wow fadeInUp">
							<div class="widget_title">tags cloud</div>
							<ul class="tags">
								<li><a href="">css</a></li>
								<li><a href="">html</a></li>
								<li><a href="">javascript</a></li>
								<li><a href="">jquery</a></li>
								<li><a href="">bootstrap</a></li>
								<li><a href="">web development</a></li>
								<li><a href="">ui &amp; ux</a></li>
							</ul>
						</div>

						<div class="widget wow fadeInUp">
							<div class="widget_title">instagram</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
							<div class="thumb" style="margin-bottom:15px">
								<a href=""><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/thumb.jpg" alt="thumb"></a>
							</div>
						</div>

						<div class="widget wow fadeInUp">
							<div class="widget_title">archives</div>
							<ul class="list_2">
								<li><a href="">Jan-Feb 2015	<span>15</span></a></li>
								<li><a href="">Feb-Mar 2015	<span>22</span></a></li>
								<li><a href="">Mar-Apr 2015	<span>27</span></a></li>
								<li><a href="">Apr-May 2015	<span>30</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</section>


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