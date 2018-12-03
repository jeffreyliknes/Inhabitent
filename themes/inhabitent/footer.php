<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
				
		    <div class="footer-container">
			  <div class="contact">
				  <h3>CONTACT INFO</h3>
				  <p>
				    <i class="fas fa-envelope-square"></i>
				    <a class="underline" href="#">info@inhabitent.com</a>				  
				  </p>
				  <p>
				    <i class="fas fa-phone"></i>
				    <a class="underline phone-number" href="#">778-456-7891</a>
				  </p>
				  <div class="i-container">
				  	<span>
					  <i class="fab fa-facebook"></i>
					</span>
					<span>
					  <i class="fab fa-twitter-square"></i>
					</span>
					<span>
					  <i class="fab fa-google-plus-square"></i>
					</span>
				  </div>
              </div>
				
			  <div class="hours">
				  <h3>BUSINESS HOURS</h3>
				  <p><strong>Monday-Friday:</strong> 9AM-5PM</p>
				  <p><strong>Saturday:</strong> 10AM-2PM</p>
				  <p><strong>Sunday:</strong> Closed</p>
			  </div>

			  <div class="logo-footer">
					<a href="<?php echo get_bloginfo('url');?>">

					  <img src="<?php echo get_template_directory_uri();?>/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo">
					</a>
			  </div>
		    </div>
			<div class="copyright">
				  <p>COPYRIGHT &copy; 2019 Inhabitent</p>
			</div>		
				</div>		
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
