<?php get_header(); ?>

<section class="hero relative">
	<div class="slideshow relative">
		<?php echo do_shortcode('
			[aios_slider id="Main Slideshow"]
		'); ?>
	</div><!-- end of slideshow -->
	<div class="quickSearch absolute w-100" data-aos="fade-up" data-aos-once="true" data-aos-duration="400">
		<div class="container">
			<div class="quickSearch--wrap relative">

				<div class="quickSearch--title">
					<h2 class="flex">
						<i class="ai-font-magnifying-glass-a"></i>
						quick search
					</h2>
				</div><!-- end of quick search title -->

				<div class="quicksearch--form absolute top-0 left-0 flex flex-col justify-center items-center">
					<form action="#" method="get" class="flex items-end">
						<div class="qcTitle">
							<h2>quick search</h2>
						</div><!-- end of qc title -->
						<div class="qcForm flex items-end flex-wrap-wrap">
							<div class="qcFormRow">
								<label for="city-zip"></label>
								<select name="city-zip" id="city-zip">
									<option value="city or zip">city or zip</option>
								</select>
							</div>
							<div class="qcFormRow">
								<label for="qcbeds"></label>
								<select name="qcbeds" id="qcbeds">
									<option value="beds">beds</option>
								</select>
							</div>
							<div class="qcFormRow">
								<label for="qcbaths"></label>
								<select name="qcbaths" id="qcbaths">
									<option value="baths">baths</option>
								</select>
							</div>
							<div class="qcFormRow qcFormButton">
								<button>search</button>
								<a href="#">advanced search</a>
							</div>
							
						</div><!-- end of qc form -->
						
					</form>
					<p>Real Estate IDX Powered by iHomefinder</p>
				</div>

			</div>
		</div>
	</div><!-- end of quick search -->
	<div class="floatingSocialMedia flex items-center justify-center absolute top-0" data-aos="fade-left" data-aos-once="true" data-aos-duration="400" data-aos-delay="200">
		<ul class="flex flex-col items-center">
			<li><?= do_shortcode('[ai_client_phone]<i class="ai-font-phone"></i>[/ai_client_phone]')?></li>
			<li><?= do_shortcode('[ai_client_email]<i class="ai-font-envelope"></i>[/ai_client_email]')?></li>
			<li><div class="fsm-divider"></div></li>
			<li>
				<a href="<?= do_shortcode('[ai_client_instagram]')?>" target="_blank">
					<i class="ai-font-instagram"></i>
					instagram
				</a>
			</li>
			<li>
				<a href="<?= do_shortcode('[ai_client_facebook]')?>" target="_blank">
					<i class="ai-font-facebook"></i>
					facebook
				</a>
			</li>
			<li>
				<a href="<?= do_shortcode('[ai_client_twitter]')?>" target="_blank">
					<i class="ai-font-twitter"></i>
					twitter
				</a>
			</li>
			<li>
				<a href="<?= do_shortcode('[ai_client_youtube]')?>" target="_blank">
					<i class="ai-font-youtube"></i>
					youtube
				</a>
			</li>
			<li>
				<a href="<?= do_shortcode('[ai_client_google]')?>" target="_blank">
					<i class="ai-font-google"></i>
					google
				</a>
			</li>
			<li>
				<a href="https://www.vimeo.com/jerrytjsun" target="_blank">
					<i class="ai-font-vimeo"></i>
					vimeo
				</a>
			</li>
		</ul>
	</div>
</section><!-- end of hero -->

<section class="hpCta relative">

	<div class="__max_container">
		<div class="cta--lists flex justify-center">

			<div class="cta--list" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="100">
				<a href="#">
					<div class="__globBg">
						<canvas width="401" height="257" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/accent-bg.jpg" alt="Jerry Sum" width="199" height="191" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
					</div>
					<h3>
						<em>i want to</em>
						<span>buy</span>
					</h3>
				</a>
			</div><!-- end of list -->
			<div class="cta--list" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="200">
				<a href="#">
					<div class="__globBg">
						<canvas width="401" height="257" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/accent-bg.jpg" alt="Jerry Sum" width="199" height="191" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
					</div>
					<h3>
						<em>i need to</em>
						<span>sell</span>
					</h3>
				</a>
			</div><!-- end of list -->
			<div class="cta--list" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="300">
				<a href="#">
					<div class="__globBg">
						<canvas width="401" height="257" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/accent-bg.jpg" alt="Jerry Sum" width="199" height="191" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
					</div>
					<h3>
						<em>value my</em>
						<span>home</span>
					</h3>
				</a>
			</div><!-- end of list -->


		</div><!-- end of lists -->
	</div>
	
</section><!-- end of cta -->

<section class="hpWelcome relative">
	<div class="__globBg">
		<canvas width="401" height="257" class="block w-100"></canvas>
		<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/accent-bg.jpg" alt="Jerry Sum" width="199" height="191" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
	</div>

	<div class="__max_container">
		<div class="hpWelcome__wrap flex items-end">
			<div class="hpWelcome__content" data-aos="fade-right" data-aos-once="true" data-aos-duration="400">

				<div class="default-title  __large">
					<h2>
						<span>meet</span>
						Jerry <br> Sun
					</h2>
				</div>

				<p>I have been in the real estate business for over 21 years, experiencing various cycles of the market. I consider myself fortunate to be able to contribute to people’s lives through what I do best. As a Broker Associate, I have handled a diverse range of transactions, from the purchase and sale of residences to commercial real estate sales, including income units, 1031 exchanges, probate and trust sales, bank-owned properties, and short sales.</p>
				<p>I understand that the real estate market can be dynamic and challenging, which is why I am dedicated to providing expert assistance to buyers and sellers alike. My technical knowledge and business experience enable me to better serve all your real estate needs. I am fully committed to making your home buying or selling experience as smooth and successful as possible, and I take this responsibility seriously.</p>
				<p>It is an honor for me to assist people with one of the most significant transactions of their lives, and I strive to prove my exceptional skills and expertise through diligent hard work. The majority of my business comes from referrals from past clients, and I am grateful for their trust and confidence in me. If you have any questions of buying or selling, please feel free to contact me anytime by phone, email, or text.</p>

				<div class="default-button">
					<a href="#" class="inline-block">
						<span>Learn More</span>
					</a>
				</div>
			</div><!-- end of content -->
			<div class="hpWelcome__image" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="200">
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/jerrysun.png" alt="Jerry Sum" width="426" height="899" class="block w-100 h-auto" loading="lazy">
			</div><!-- end of image -->
		</div><!-- end of wrap -->
	</div>
</section><!-- end of welcome -->

<section class="hp__listings relative">

	<div class="__globBg">
		<canvas width="401" height="257" class="block w-100"></canvas>
		<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/accent-bg.jpg" alt="Jerry Sum" width="199" height="191" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
	</div>
	<div class="__max_container">

		<div class="default-title text-center __reverse" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="200">
			<h2>
				<span>featured</span>
				Listings
			</h2>
		</div>

		<div class="hpListings featuredListings splide" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="200">
			<div class="splide__track">
				<div class="splide__list">

					<div class="splide__slide hplistings__list">
						<a href="#" class="block relative">
							<div class="hplistings__img">
								<canvas width="448" height="334" class="block w-100 h-auto"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fl-1.jpg" alt="289 OLD MANSION" width="448" height="334" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
								<i class="accentLogo"></i>
							</div>
							<div class="hplistings__content">
								<div class="__wrapList relative">
									<h2>289 OLD MANSION</h2>
									<p>1700 East Walnut Avenue, Suite 400</p>
									<span><strong>3</strong> bd  /  <strong>3</strong> ba  /  <strong>2,590</strong> sq.ft</span>
								</div>
							</div>
						</a>
					</div><!-- end of list -->
					<div class="splide__slide hplistings__list">
						<a href="#" class="block relative">
							<div class="hplistings__img">
								<canvas width="448" height="334" class="block w-100 h-auto"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fl-2.jpg" alt="289 OLD MANSION" width="448" height="334" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
								<i class="accentLogo"></i>
							</div>
							<div class="hplistings__content">
								<div class="__wrapList relative">
									<h2>289 OLD MANSION</h2>
									<p>1700 East Walnut Avenue, Suite 400</p>
									<span><strong>3</strong> bd  /  <strong>3</strong> ba  /  <strong>2,590</strong> sq.ft</span>
								</div>
							</div>
						</a>
					</div><!-- end of list -->
					<div class="splide__slide hplistings__list">
						<a href="#" class="block relative">
							<div class="hplistings__img">
								<canvas width="448" height="334" class="block w-100 h-auto"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fl-3.jpg" alt="289 OLD MANSION" width="448" height="334" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
								<i class="accentLogo"></i>
							</div>
							<div class="hplistings__content">
								<div class="__wrapList relative">
									<h2>289 OLD MANSION</h2>
									<p>1700 East Walnut Avenue, Suite 400</p>
									<span><strong>3</strong> bd  /  <strong>3</strong> ba  /  <strong>2,590</strong> sq.ft</span>
								</div>
							</div>
						</a>
					</div><!-- end of list -->
					<div class="splide__slide hplistings__list">
						<a href="#" class="block relative">
							<div class="hplistings__img">
								<canvas width="448" height="334" class="block w-100 h-auto"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fl-3.jpg" alt="289 OLD MANSION" width="448" height="334" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
								<i class="accentLogo"></i>
							</div>
							<div class="hplistings__content">
								<div class="__wrapList relative">
									<h2>289 OLD MANSION</h2>
									<p>1700 East Walnut Avenue, Suite 400</p>
									<span><strong>3</strong> bd  /  <strong>3</strong> ba  /  <strong>2,590</strong> sq.ft</span>
								</div>
							</div>
						</a>
					</div><!-- end of list -->
				</div>
			</div>
		</div><!-- end of hp listings -->

		<div class="default_pagination featuredListings__pagination flex justify-center items-center" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="200">
			<button class="pagination--prev" data-arrow="prev"><i class="ai-font-arrow-g"></i><span>PREV</span></button>
			<div class="default-button">
				<a href="#" class="inline-block">
					<span>Learn More</span>
				</a>
			</div>
			<button class="pagination--next" data-arrow="next"><span>Next</span><i class="ai-font-arrow-g"></i></button>
		</div>

	</div>
</section>

<section class="hp__listings relative">

	<div class="__max_container">

		<div class="default-title text-center __reverse" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="200">
			<h2>
				<span>featured</span>
				Listings
			</h2>
		</div>

		<div class="hpListings LuxuryListings splide" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="200">
			<div class="splide__track">
				<div class="splide__list">

					<div class="splide__slide hplistings__list">
						<a href="#" class="block relative">
							<div class="hplistings__img">
								<canvas width="448" height="334" class="block w-100 h-auto"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fl-1.jpg" alt="289 OLD MANSION" width="448" height="334" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
								<i class="accentLogo"></i>
							</div>
							<div class="hplistings__content">
								<div class="__wrapList relative">
									<h2>289 OLD MANSION</h2>
									<p>1700 East Walnut Avenue, Suite 400</p>
									<span><strong>3</strong> bd  /  <strong>3</strong> ba  /  <strong>2,590</strong> sq.ft</span>
								</div>
							</div>
						</a>
					</div><!-- end of list -->
					<div class="splide__slide hplistings__list">
						<a href="#" class="block relative">
							<div class="hplistings__img">
								<canvas width="448" height="334" class="block w-100 h-auto"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fl-2.jpg" alt="289 OLD MANSION" width="448" height="334" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
								<i class="accentLogo"></i>
							</div>
							<div class="hplistings__content">
								<div class="__wrapList relative">
									<h2>289 OLD MANSION</h2>
									<p>1700 East Walnut Avenue, Suite 400</p>
									<span><strong>3</strong> bd  /  <strong>3</strong> ba  /  <strong>2,590</strong> sq.ft</span>
								</div>
							</div>
						</a>
					</div><!-- end of list -->
					<div class="splide__slide hplistings__list">
						<a href="#" class="block relative">
							<div class="hplistings__img">
								<canvas width="448" height="334" class="block w-100 h-auto"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fl-3.jpg" alt="289 OLD MANSION" width="448" height="334" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
								<i class="accentLogo"></i>
							</div>
							<div class="hplistings__content">
								<div class="__wrapList relative">
									<h2>289 OLD MANSION</h2>
									<p>1700 East Walnut Avenue, Suite 400</p>
									<span><strong>3</strong> bd  /  <strong>3</strong> ba  /  <strong>2,590</strong> sq.ft</span>
								</div>
							</div>
						</a>
					</div><!-- end of list -->
					<div class="splide__slide hplistings__list">
						<a href="#" class="block relative">
							<div class="hplistings__img">
								<canvas width="448" height="334" class="block w-100 h-auto"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fl-3.jpg" alt="289 OLD MANSION" width="448" height="334" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
								<i class="accentLogo"></i>
							</div>
							<div class="hplistings__content">
								<div class="__wrapList relative">
									<h2>289 OLD MANSION</h2>
									<p>1700 East Walnut Avenue, Suite 400</p>
									<span><strong>3</strong> bd  /  <strong>3</strong> ba  /  <strong>2,590</strong> sq.ft</span>
								</div>
							</div>
						</a>
					</div><!-- end of list -->
				</div>
			</div>
		</div><!-- end of hp listings -->

		<div class="default_pagination LuxuryListings__pagination flex justify-center items-center" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="200">
			<button class="pagination--prev" data-arrow="prev"><i class="ai-font-arrow-g"></i><span>PREV</span></button>
			<div class="default-button __reverse">
				<a href="#" class="inline-block">
					<span>Learn More</span>
				</a>
			</div>
			<button class="pagination--next" data-arrow="next"><span>Next</span><i class="ai-font-arrow-g"></i></button>
		</div>

	</div>
</section>


<section class="hpOurMarketingPlan relative">
	<div class="__globBg __hasOverlay">
		<canvas width="1600" height="770" class="block w-100 h-100"></canvas>
		<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/our_marketing_plan.jpg" alt="Jerry Sum" width="199" height="191" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
	</div>

	<div class="__max_container">
		<div class="hpOurMarketingPlan__wrap flex">
			<div class="hpOurMarketingPlan__content" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="100">

				<div class="default-title">
					<h2>
						<span>our</span>
						marketing <br> plan
					</h2>
				</div>
				<p>
					We may not have control over the market, but we can control our selling strategy and presentation, and that's huge! In today's fast-changing market, a smart marketing plan is crucial. We use a systematic approach to showcase your home to the masses and make sure it stays in the forefront of everyone's mind. Our exposure is both domestic and international, using cutting-edge technology tools and resources through print, media, web, and intra-network international presentations.
				</p>
				<div class="default-button">
					<a href="#" class="inline-block">
						<span>Learn More</span>
					</a>
				</div>
			</div><!-- end of  content -->
			<div class="hpOurMarketingPlan__image" data-aos="fade-left" data-aos-once="true" data-aos-duration="400" data-aos-delay="200">
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/marketing-plan-image.png" alt="Marketing Plan" width="566" height="465" class="block w-100 h-auto" loading="lazy">
			</div><!-- end of image -->
		</div>
	</div>
</section><!-- end of markting plan -->
<section class="hpProvenPerformance relative">

	<div class="__globBg __hasOverlay">
		<canvas width="1600" height="770" class="block w-100 h-100"></canvas>
		<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/our-performance-bg.jpg" alt="Jerry Sum" width="199" height="191" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
	</div>

	<div class="__max_container">
		<div class="hpProvenPerformance__wrap">

			<div class="default-title text-center" data-aos="fade-down" data-aos-once="true" data-aos-duration="400" data-aos-delay="100">
				<h2>
					Proven Performance
				</h2>
			</div>


			<ul class="hpProvenPerformance__lists flex flex-wrap-wrap justify-center">
				<li>
					<span><em data-number="21">0</em> Years+</span>
					<p>of Experience</p>
				</li>
				<li>
					<span>Top <em data-number="1">0</em>.<em data-number="5">0</em>%</span>
					<p>Agents in the <br>US 2023</p>
				</li>
				<li>
					<span>Top <em data-number="1">0</em>%</span>
					<p>Re/Max Diamond <br>Club</p>
				</li>
				<li>
					<span>Top <em data-number="100">0</em></span>
					<p>Re/Max Agents</p>
				</li>
				<li>
					<span>Re/Max Best</span>
					<p>TEAM in California <br>2017-2018</p>
				</li>
				<li>
					<span><em data-number="3">0</em> Best-Rated</span>
					<p>TEAM in California <br>2017-2018</p>
				</li>
				<li>
					<span>America’s Best</span>
					<p>Real Estate <br>Professional</p>
				</li>
				<li>
					<span>LA Five Star</span>
					<p>Real Estate <br>Agent</p>
				</li>
			</ul>
		</div><!-- end of proven performance -->
	</div><!-- end of container -->
</section><!-- end of proven performance -->

<section class="hpFeaturedCommunities relative">
	<div class="__max_container">
		
		<div class="hpFeaturedCommunities__wrap">

			<div class="default-title text-center __reverse" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="100">
				<h2>
					<span>FEATURED</span>
					COMMUNITIES
				</h2>
			</div>

			<div class="hpFeaturedCommunities__lists flex">

				<div class="hpFeaturedCommunities__list" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="100">
					<a href="#" class="block relative">
						<div class="hpFeaturedCommunities__image relative">
							<canvas width="235" height="311" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-1.jpg" alt="ARCADIA" width="235" height="311" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
						</div><!-- end of image -->
						<div class="hpFeaturedCommunities__content">
							<h4>ARCADIA</h4>
							<p>Arcadia, California is a vibrant city located in Los Angeles County.</p>
						</div>
					</a>
				</div><!-- end of list -->
				<div class="hpFeaturedCommunities__list" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="200">
					<a href="#" class="block relative">
						<div class="hpFeaturedCommunities__image relative">
							<canvas width="235" height="311" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-2.jpg" alt="alhambra" width="235" height="311" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
						</div><!-- end of image -->
						<div class="hpFeaturedCommunities__content">
							<h4>alhambra</h4>
							<p>Welcome to Alhambra, California, a vibrant city situated in Los Angeles.</p>
						</div>
					</a>
				</div><!-- end of list -->
				<div class="hpFeaturedCommunities__list" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="300">
					<a href="#" class="block relative">
						<div class="hpFeaturedCommunities__image relative">
							<canvas width="235" height="311" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-3.jpg" alt="ALTADENA" width="235" height="311" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
						</div><!-- end of image -->
						<div class="hpFeaturedCommunities__content">
							<h4>ALTADENA</h4>
							<p>Altadena is a picturesque unincorporated community located in Los Angeles County</p>
						</div>
					</a>
				</div><!-- end of list -->
				<div class="hpFeaturedCommunities__list" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="400">
					<a href="#" class="block relative">
						<div class="hpFeaturedCommunities__image relative">
							<canvas width="235" height="311" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-4.jpg" alt="PASADENA" width="235" height="311" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
						</div><!-- end of image -->
						<div class="hpFeaturedCommunities__content">
							<h4>PASADENA</h4>
							<p>Pasadena, California is a captivating city located in Los Angeles County.</p>
						</div>
					</a>
				</div><!-- end of list -->
				<div class="hpFeaturedCommunities__list" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="500">
					<a href="#" class="block relative">
						<div class="hpFeaturedCommunities__image relative">
							<canvas width="235" height="311" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-5.jpg" alt="South pasadena" width="235" height="311" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
						</div><!-- end of image -->
						<div class="hpFeaturedCommunities__content">
							<h4>South pasadena</h4>
							<p>South Pasadena is a charming city located in Los Angeles County.</p>
						</div>
					</a>
				</div><!-- end of list -->
				<div class="hpFeaturedCommunities__list" data-aos="fade-up" data-aos-once="true" data-aos-duration="400" data-aos-delay="600">
					<a href="#" class="block relative">
						<div class="hpFeaturedCommunities__image relative">
							<canvas width="235" height="311" class="block w-100"></canvas>
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-6.jpg" alt="SAN GABRIEL" width="235" height="311" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
						</div><!-- end of image -->
						<div class="hpFeaturedCommunities__content">
							<h4>SAN GABRIEL</h4>
							<p>San Gabriel is a vibrant city located in Los Angeles County.</p>
						</div>
					</a>
				</div><!-- end of list -->


			</div>

		</div><!-- end of wrap -->
	</div>
</section>

<?php get_footer(); ?>
