
    <footer class="footer">
      <div class="footer-inner">
        <div class="container">
          <div class="row">

            <div class="col-sm-4">
              <?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
              	<div id="footer-widget-1" class="footer-widget widget-area" role="complementary">
              		<?php dynamic_sidebar( 'footer-widget-1' ); ?>
              	</div> <!-- #primary-sidebar -->
              <?php endif; ?>
            </div>

            <div class="col-sm-4">
              <?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
              	<div id="footer-widget-2" class="footer-widget widget-area" role="complementary">
              		<?php dynamic_sidebar( 'footer-widget-2' ); ?>
              	</div> <!-- #primary-sidebar -->
              <?php endif; ?>
            </div>

            <div class="col-sm-4">
              <?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
              	<div id="footer-widget-3" class="footer-widget widget-area" role="complementary">
              		<?php dynamic_sidebar( 'footer-widget-3' ); ?>
              	</div> <!-- #primary-sidebar -->
              <?php endif; ?>
            </div>

            <div class="col-xs-12">
              <div class="copyright">
                <p>&copy; <?php echo date("Y"); ?> Majestic Awning, All Rights Reserved. <span class="dash"></span> <a href="/disclaimer/">Disclaimer</a> <span class="dash"></span> Custom WordPress theme by <a href="http://rooneydev.com" target="_blank">Josiah Rooney</a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </footer>

  </div> <!-- .main -->
  <?php wp_footer(); ?>
</body>
</html>
