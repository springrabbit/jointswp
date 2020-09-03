<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

				<footer class="footer" role="contentinfo">

					<div class="inner-footer">

            <div class="content-starts">

  						<div class="small-12 medium-12 large-12 cell">
  							<nav role="navigation">
  	    						<?php joints_footer_links(); ?>
  	    					</nav>
  	    				</div>

  						<div class="small-12 medium-12 large-12 cell">
  							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
  						</div>

            </div>

					</div> <!-- end #inner-footer -->

				</footer> <!-- end .footer -->

			</div>  <!-- end .off-canvas-content -->

		</div> <!-- end .off-canvas-wrapper -->

    <script type="text/javascript">
    window.addEventListener('scroll', () => {
      document.body.style.setProperty('--scroll',window.pageYOffset / (document.body.offsetHeight - window.innerHeight));
      console.log(window.pageYOffset / (document.body.offsetHeight - window.innerHeight));
    }, false);
    </script>     

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->
