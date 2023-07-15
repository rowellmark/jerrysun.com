			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>

	<footer class="footer relative">
		<div class="__globBg">
			<canvas width="1600" height="884" class="block w-100"></canvas>
			<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/accent-bg.jpg" alt="Jerry Sum" width="1600" height="884" class="block w-100 h-100 absolute object-fit-cover object-position-center top-0 left-0" loading="lazy">
		</div>
		<div class=" __max_container relative">
			<div class="footerContainer __top flex ">
				<div class="footerInfo __logos">
					<a href="<?= do_shortcode('[blogurl]')?>" class="site-name">
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo.png" alt="Jerry Sum" width="199" height="191" class="block w-100 h-auto" loading="lazy">
					</a>
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/remax-logo.png" alt="Remax" class="img-responsive brokerage-logo">
				</div><!--end of logo -->
				<div class="footerInfo __contact">
					<h2>contact</h2>
					
					<ul>
						<li>Jerry Sun Broker Associate</li>
						<li>DRE#01338788</li>
						<li>Cell: <?= do_shortcode('[ai_client_email]{default-email}[/ai_client_email]')?></li>
						<li>Fax: <?= do_shortcode('[ai_client_fax]{default-fax}[/ai_client_fax]')?></li>
						<li>Mail: <?= do_shortcode('[ai_client_email]{default-email}[/ai_client_email]')?></li>
						<li>Website: <a href="https://www.jerrysun.com/" target="_blank">www.jerrysun.com</a></li>
					</ul>
						
				</div><!-- end of contact -->
				<div class="footerInfo __office">
					<h2>office</h2>
					<ul>
						<li>RE/MAX Premier Properties</li>
						<li>Broker CalBRE#01379606</li>
						<li>224 N. Lake Ave, Pasadena, CA 91101</li>
						<li>133 E Huntington Dr Arcadia, CA 91006</li>
						<li>2375 Huntington Dr, San Marino, CA 91108</li>
						<li>842 E. Valley Blvd, Alhambra, CA 91801</li>
					</ul>
				</div><!-- end of of office -->
				<div class="footerInfo __contactForm">
					<h2>send us a message</h2>
					<?= do_shortcode('[contact-form-7 id="339" title="HP Contact Us" html_class="use-floating-validation-tip"]')?>
				</div><!-- end of contact form -->
			</div>
		</div>


		<div class="footerContainer __bottom relative">
			<div class="footerSocialMedia">
				<div class=" __max_container relative">
					<ul class="flex items-center justify-center">
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
			</div>
			<div class="footerNavigation">
				<div class=" __max_container relative">
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1, 'menu_class' => 'flex items-center justify-center') ); ?>
				</div>
			</div><!-- end of navigation -->
			<div class="footerDisclaimer">
				<div class=" __max_container relative">
					<p>Jerry Sun is committed to providing an accessible website. If you have difficulty accessing content, have difficulty viewing a file on the website, or notice any accessibility problems, please contact us at <?= do_shortcode('[ai_phone href="+1.123.456.7890"]123.456.7890[/ai_phone]')?> to specify the nature of the accessibility issue and any assistive technology you use. We strive to provide the content you need in the format you require.</p>
				</div>
			</div><!-- end of disclaimer -->
			<div class="footerCopyright">
				<div class=" __max_container relative">
					<p>&copy; <?php echo date('Y') ?> <strong>Jerry SUN</strong>. All rights reserved. <a href="/sitemap">Sitemap</a> <?= do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]')?></p>
					<div class="copyright-logos flex items-center justify-center">
						<i class="ai-font-eho"></i>
						<i class="ai-font-realtor-mls"></i>
					</div>
				</div>
			</div><!-- end of copyright -->
			
		</div>

	
	</footer>
	
	<?php do_action('aios_neighborhoods_footer')?>
	<?php do_action('aios_landing_page_footer')?>
		
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
</body>
</html>
