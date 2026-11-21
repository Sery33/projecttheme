
  </div><!-- #content -->

  <footer id="colophon" class="site-footer">
    <div class="footer-content container-lg">
      <div class="footer-brand">
        <p class="footer-title"><?php esc_html_e( 'Art Nouveau', 'textdomaintomodify' ); ?></p>
        <div class="footer-social" aria-label="<?php esc_attr_e( 'Social media', 'textdomaintomodify' ); ?>">
          <span class="footer-social-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/x-logo.svg' ); ?>" alt="" width="24" height="24"></span>
          <span class="footer-social-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/instagram-logo.svg' ); ?>" alt="" width="24" height="24"></span>
          <span class="footer-social-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/youtube-logo.svg' ); ?>" alt="" width="24" height="24"></span>
          <span class="footer-social-icon"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/linkedin-logo.svg' ); ?>" alt="" width="24" height="24"></span>
        </div>
      </div>

      <div class="footer-navigation">
        <?php
        $locations = get_nav_menu_locations();
        $footer_menu_id = isset( $locations['menu-footer'] ) ? $locations['menu-footer'] : 0;
        $footer_items = $footer_menu_id ? wp_get_nav_menu_items( $footer_menu_id ) : array();

        if ( $footer_items ) :
          $explore_items = array_slice( $footer_items, 0, 3 );
          $discover_items = array_slice( $footer_items, 3 );
          ?>
          <div class="footer-menu-column">
            <p class="footer-menu-title"><?php esc_html_e( 'Explore', 'textdomaintomodify' ); ?></p>
            <ul id="menu-footer-explore" class="footer-menu">
              <?php foreach ( $explore_items as $item ) : ?>
                <li><a href="<?php echo esc_url( $item->url ); ?>"><?php echo esc_html( $item->title ); ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php if ( $discover_items ) : ?>
            <div class="footer-menu-column">
              <p class="footer-menu-title"><?php esc_html_e( 'Discover More', 'textdomaintomodify' ); ?></p>
              <ul id="menu-footer-discover" class="footer-menu">
                <?php foreach ( $discover_items as $item ) : ?>
                  <li><a href="<?php echo esc_url( $item->url ); ?>"><?php echo esc_html( $item->title ); ?></a></li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif;
        else :
          wp_nav_menu(
            array(
              'theme_location' => 'menu-footer',
              'menu_id'        => 'menu-footer',
              'container'      => 'nav',
              'container_class'=> 'footer-navigation',
            )
          );
        endif;
        ?>
      </div>
    </div>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
