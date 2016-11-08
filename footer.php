<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="field half first">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="field half">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
									<div class="field">
										<textarea name="message" id="message" placeholder="Message"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="special" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="<?php the_field('link-twitter', 'option'); ?>" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="<?php the_field('link-facebook', 'option'); ?>" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="<?php the_field('link-instagram', 'option'); ?>" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="<?php the_field('link-dribbble', 'option'); ?>" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="<?php the_field('link-github', 'option'); ?>" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="<?php the_field('link-500px', 'option'); ?>" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="tel:<?php the_field('link-phone', 'option'); ?>" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="mailto:<?php the_field('link-email', 'option'); ?>" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/js/skel.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

	</body>
</html>