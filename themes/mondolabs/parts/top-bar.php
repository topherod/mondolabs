<?php
/**
 * Template part for top bar menu
 */

?>



<div class="menu-and-logo">
  <a href="<?php echo home_url(); ?>" class="logo-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mondolabs-logo-white-1.png" class="main-logo" alt="Mondo Labs">
    <?php 
      if (is_front_page()) {
        echo "<h1>" . get_the_title() . "</h1>";
      }
    ?>
  </a>
  <div class="hamburger" id="hamburgerToggle"><div class="burger-icon"></div></div>
  <div id="menuModal" class="menuModal">
    <a href="<?php echo home_url(); ?>" class="logo-container">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mondolabs-logo-1.png" class="main-logo" alt="Mondo Labs">
    </a>
    <div class="inner-menuModal">
      <?php foundationpress_top_bar(); ?>

      <!-- Custom Search Form for Modal -->
<!--       <div class="search-wrap">
        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
          <input type="text" value="" name="s" id="menuSearch" placeholder="Search">
          <input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'foundationpress' ); ?>" class="prefix button">
        </form>
      </div> -->

    </div>
  </div>
</div>