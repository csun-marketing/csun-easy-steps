<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>


<?php
  echo "
  <div class='layout-csun--footer'>
    <div class='panel-pane pane-footer'>
      <address>
        <div class='column'>
          <div id='footer-logo'>
          </div>
        </div>
        <div class='column'>
          <p class='vcard'>
            <span class='fn org'>
              &copy; California State University, Northridge  
            </span>
            <br>
            <span class='street-address'>
              18111 Nordhoff Street, Northridge, CA 91330
            </span>
            <br>
            <span class='tel'>
              Phone: <span class='value'>(818) 677-1200</span>
            </span> / 
            <span class='contact-us'>
              <a href='http://www.csun.edu/contact'>Contact Us</a>
            </span>
            <br>
          </p>
        </div>
        <div class='column'>
          <p>
            <span>
              <a href='http://www-admn.csun.edu/publicsafety/emergency/'>
                Emergency Information
              </a>
            </span>
            <br>
            <span>
              <a href='http://www-admn.csun.edu/vp/policies/'>
                University Policies &amp; Procedures
              </a>
            </span>
          </p>
        </div>
        <div class='column'>
          <p>
            <span>
              <a href='http://www-admn.csun.edu/vp/policies/900_oversight/900-12.pdf'>
                Terms and Conditions for Use
              </a>
            </span>
            <br>
            <span>
              <a href='http://www-admn.csun.edu/vp/policies/500_itr/500-8025.pdf'>
                Privacy Policy
              </a>
            </span>
            <br>
            <span>
              <a href='http://www.csun.edu/it/document-viewers'>
                Document Reader
              </a>
            </span>
          </p>
        </div>
        <div class='column'>
          <p>
            <span>
              <a href='http://www.calstate.edu/'>
                California State University
              </a>
            </span>
            <br>
          </p>
        </div>
      </address>
    </div>
  </div>";
?>



	</div><!-- #main .wrapper -->
	<!--<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>-->
</div><!-- .site-info -->
	<!--</footer> #colophon 
</div> #page -->

<?php wp_footer(); ?>
<script src="/wp-content/themes/twentytwelve/js/jquery.min.js"></script>
<script src="/wp-content/themes/twentytwelve/js/script.js"></script>
</body>
</html>