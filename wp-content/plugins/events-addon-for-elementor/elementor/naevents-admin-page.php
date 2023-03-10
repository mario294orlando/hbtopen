<?php
if ( ! function_exists( 'naevents_admin_page' ) ) {
  function naevents_admin_page(){ ?>
  <div class="wrap">
    <h1 class="display-block">Welcome to the <strong>Events Addon for Elementor</strong></h1>

    <div class="card naevents-normal-card card-primary">
    	<h2 class="title">Description</h2>
	    <p>Events Addon for Elementor covers all the must-needed elements for creating a perfect websites using Elementor Page Builder. 20+ Common Elementor widget covers all of the Primary elements.</p>
	    <a href="https://wordpress.org/plugins/events-addon-for-elementor/" class="docs button button-primary" target="_blank">Plugin Page</a>
	    <a href="https://nicheaddons.com/demos/restaurant/" class="docs button button-primary" target="_blank">Live Demo</a>
    </div>

    <div class="card naevents-normal-card card-secondary">
    	<h2 class="title">Useful Links</h2>
	    <ul>
	    	<li><a href="https://nicheaddons.com/docs" target="_blank">Documentation</a></li>
	      <li><a href="https://wordpress.org/themes/nichebase/" target="_blank">NicheBase (Theme) - Download</a></li>
	      <li><a href="https://wordpress.org/themes/elasta/" target="_blank">Elasta (Theme) - Download</a></li>
	    </ul>
    </div>

    <div class="card naevents-normal-card card-primary">
    	<h2 class="title">Enable & Disable - Widgets</h2>
	    <p>You can now enable and disable the unused widgets from Primary Add-On. These settings will allow you to control the clutter-free Elementor editor experience.</p>
	    <a href="admin.php?page=naevents_admin_sub_page" class="docs button button-primary">Check Out</a>
    </div>

  </div>
  <?php
  }
}