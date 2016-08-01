<?php
global $language;
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
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
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<header>
	<div class="container">
		<div class="header">
			<div class="header-logo">
				<h1>Jimmy Havenith</h1>
				<a href="#">
					<img src="<?php global $base_url; echo $base_url; ?>/sites/all/themes/portfolio/img/logo.png" alt="Logo de Jimmy Havenith" />
				</a>
			</div>
			<?php if ($main_menu): ?>
				<div class="header-menu">
					<?php print theme('links__system_main_menu', array(
						'links' => $main_menu,
						'attributes' => array(
							'id' => 'main-menu-links',
							'class' => array('links', 'clearfix'),
						),
						'heading' => array(
							'text' => t('Main menu'),
							'level' => 'h2',
							'class' => array('element-invisible'),
						),
					)); ?>
				</div>
			<?php endif; ?>
			<?php if(drupal_is_front_page()): ?>
				<div class="header-button">
					<a class="header-button-filter" href="#">filter</a>
					<!-- <a class="header-button-menu" href="#">menu</a> -->
				</div>
			<?php endif; ?>
		</div>
	</div>
</header>
<?php if(drupal_is_front_page()): ?>
<section class="isotope-filter">
	<div class="container">
		<div class="projets-isotope item-list">
			<ul class="isotope-options clearfix" data-filter-group="Categorie">
				<li class="first">
					<a class="filterbutton selected" data-filter="" href="#filter">Tout</a>
				</li>
				<li>
					<a class="filterbutton" data-filter=".web" href="#filter"> </a>
					<div class="views-field views-field-field-project-tags">
					<a class="filterbutton" data-filter=".web" href="#filter">Web</a>
					<div class="field-content">
					</div>
				</li>
				<li>
					<a class="filterbutton" data-filter=".print" href="#filter"> </a>
					<div class="views-field views-field-field-project-tags">
					<a class="filterbutton" data-filter=".print" href="#filter">Print</a>
					<div class="field-content">
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<?php endif; ?>
<section class="content filter-not-display">
	<div class="container">
		<div>
				<?php echo render($page['header']); ?>
		</div>
		<div>
				<?php echo render($page['highlighted']); ?>
		</div>
		<div class="portfolio-container">
				<?php echo render($page['content']); ?>
		</div>
	</div>
</section>
<footer>
	<div class="container">
		<div class="social">
			<ul>
				<li class="facebook"><a href="https://www.facebook.com/jim.have.127" title="La page facebook de Jimmy Havenith">La page facebook de Jimmy Havenith</a></li>
        <li class="twitter"><a href="https://twitter.com/JimmyHavenith" title="La page twitter de Jimmy Havenith">La page twitter de Jimmy Havenith</a></li>
        <li class="github"><a href="https://github.com/JimmyHavenith" title="La page github de Jimmy Havenith">La page github de Jimmy Havenith</a></li>
				<li class="linkedin"><a href="https://www.linkedin.com/profile/view?id=AAIAABr7Wx4BuBmr8nmX78TCQeUM63F10ggedFk&trk=nav_responsive_tab_profile_pic" title="La page linkedin de Jimmy Havenith">La page linkedin de Jimmy Havenith</a></li>
			</ul>
		</div>
		<div class="right">
			<p>
				Tous droits réservés, créé et développé par <span>Jimmy Havenith</span>
			</p>
			<p>
				Intégration via <a href="#">Drupal</a>
			</p>
		</div>
	</div>
</footer>
