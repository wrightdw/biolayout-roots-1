<header id="banner" class="navbar navbar-fixed-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
      </a>
      <nav id="nav-main" class="nav-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>

<div id="network"></div>

<div class="clearfix"></div>

<div class="alert alert-error container" style="
    margin-top: 100px;
">
  <p><strong>Important message to all our users</strong></p>
 
<p>We have been developing our software for the last 10 years and have made it freely available to everyone. At the end of 2014 our academic funding for BioLayout ran out and we are therefore no longer able to support it. In order to maintain and further develop our unique network analysis approach, we have now set up a limited company, <a href="http://kajeka.com">Kajeka</a>.</p>
 
<p>For the last year we have continued to develop the tool under the name <a href="http://kajeka.com/miru/miru-about/"><em>Miru</em></a>. Miru offers all the power and benefits of BioLayout plus some new features. Going forward, it is this that we will be supporting and in order to do so we are charging a modest license fee. A trial version is available to <a href="http://kajeka.com/miru/miru-about/">download free of charge</a>, and for a limited time we are offering a 50% discount to existing BioLayout users. Please contact <a href="mailto:support@kajeka.com">support@kajeka.com</a> for a discount code.</p><p>We hope you understand our situation and are happy to make the switch to Miru for all your network analysis needs.</p></div>

<div class="image_carousel container">
<?php 
if(is_front_page()) {
?>
  <ul id="image_gallery">
     <li class="fancyZoom"><a href="#pic1"><img alt="New in Version 2.2 cell compartment view for mEPN pathways" title="New in Version 2.2 cell compartment view for mEPN pathways" src="<?php get_site_url(); ?>/wp-content/gallery/carousel/thumbnails/tca-oxphos_cell.jpg"/></a></li>
     <li class="fancyZoom"><a href="#pic2"><img alt="TCA cycle showing new implementation of the mEPN-3D notation" title="TCA cycle showing new implementation of the mEPN-3D notation" src="<?php get_site_url(); ?>/wp-content/gallery/carousel/thumbnails/tca2.jpg"/></a></li>
     <li class="fancyZoom"><a href="#pic3"><img alt="Nature Protocols Vol. 4 No. 10 Cover Image" title="Nature Protocols Vol. 4 No. 10 Cover Image" src="<?php get_site_url(); ?>/wp-content/gallery/carousel/thumbnails/nature-protocols-cover-image.jpg"/></a></li>
     <li class="fancyZoom"><a href="#pic4"><img alt="Assembly of NGS data" title="Assembly of NGS data" src="<?php get_site_url(); ?>/wp-content/gallery/carousel/thumbnails/assembly-of-hgs-data.jpg"/></a></li>
     <li class="fancyZoom"><a href="#pic5"><img alt="Import 3D models, new in version 2.2" title="Import 3D models, new in version 2.2" src="<?php get_site_url(); ?>/wp-content/gallery/carousel/thumbnails/cow_lattice-golden.jpg"/></a></li>
     <li class="fancyZoom"><a href="#pic6"><img alt="Graph of genes expressed specifically in the mouse gastrointestinal tract" title="Graph of genes expressed specifically in the mouse gastrointestinal tract" src="<?php get_site_url(); ?>/wp-content/gallery/carousel/thumbnails/Gut-3D-network.jpg"/></a></li>
     <li class="fancyZoom"><a href="#pic7"><img alt="HCMV infection of human primary macrophages. Data courtesy of of Dr Christian Sinzger, U. of Tübingen" title="HCMV infection of human primary macrophages. Data courtesy of of Dr Christian Sinzger, U. of Tübingen" src="<?php get_site_url(); ?>/wp-content/gallery/carousel/thumbnails/Sinzger-Interesting-genes-17MCLv2.jpg"/></a></li>
     <li class="fancyZoom"><a href="#pic8"><img alt="HCMV infection of human primary macrophages (collapsed clusters)" title="HCMV infection of human primary macrophages (collapsed clusters)" src="<?php get_site_url(); ?>/wp-content/gallery/carousel/thumbnails/Interesting-genes-17MCL-v2-3D-collapsed.jpg"/></a></li>
     <li class="fancyZoom"><a href="#pic9"><img alt="Feastive network Christmas 2008!" title="Feastive network Christmas 2008!" src="<?php get_site_url(); ?>/wp-content/gallery/carousel/thumbnails/Feastive-network-Christmas-2008.jpg"/></a></li>
     <li class="fancyZoom"><a href="#pic10"><img alt="Clusters from human PBML profiling" title="Clusters from human PBML profiling" src="<?php get_site_url(); ?>/wp-content/gallery/carousel/thumbnails/Clusters-from-human-PBML-profiling.jpg"/></a></li>
 </ul>

  <div class="clearfix"></div>
<?php
} //end is_front_page
?>
</div>

<?php 
if(is_front_page()) {
?>
  <div id="pic1"><img src="<?php get_site_url(); ?>/wp-content/gallery/carousel/tca-oxphos_cell.jpg" alt="" /><p id="pic6_caption">New in Version 2.2 cell compartment view for mEPN pathways</p></div>
  <div id="pic2"><img src="<?php get_site_url(); ?>/wp-content/gallery/carousel/tca2.jpg" alt="" /><p id="pic7_caption">TCA cycle showing new implementation of the mEPN-3D notation</p></div>
  <div id="pic3"><img src="<?php get_site_url(); ?>/wp-content/gallery/carousel/nature-protocols-cover-image.jpg" alt="" /><p id="pic8_caption">Nature Protocols Vol. 4 No. 10 Cover Image</p></div>
  <div id="pic4"><img src="<?php get_site_url(); ?>/wp-content/gallery/carousel/assembly-of-hgs-data.jpg" alt="" /><p id="pic9_caption">Assembly of NGS data</p></div>
  <div id="pic5"><img src="<?php get_site_url(); ?>/wp-content/gallery/carousel/cow_lattice-golden.jpg" alt="" /><p id="pic10_caption">Import 3D models, new in version 2.2</p></div>
  <div id="pic6"><img src="<?php get_site_url(); ?>/wp-content/gallery/carousel/Gut-3D-network.jpg" alt="" /><p id="pic1_caption">Graph of genes expressed specifically in the mouse gastrointestinal tract</p></div>
  <div id="pic7"><img src="<?php get_site_url(); ?>/wp-content/gallery/carousel/Sinzger-Interesting-genes-17MCLv2.jpg" alt="" /><p id="pic2_caption">HCMV infection of human primary macrophages. Data courtesy of of Dr Christian Sinzger, U. of Tübingen</p></div>
  <div id="pic8"><img src="<?php get_site_url(); ?>/wp-content/gallery/carousel/Interesting-genes-17MCL-v2-3D-collapsed.jpg" alt="" /><p id="pic3_caption">HCMV infection of human primary macrophages (collapsed clusters)</p></div>
  <div id="pic9"><img src="<?php get_site_url(); ?>/wp-content/gallery/carousel/Feastive-network-Christmas-2008.jpg" alt="" /><p id="pic4_caption">Feastive network Christmas 2008!</p></div>
  <div id="pic10"><img src="<?php get_site_url(); ?>/wp-content/gallery/carousel/Clusters-from-human-PBML-profiling.jpg" alt="" /><p id="pic5_caption">Clusters from human PBML profiling</p></div>
<?php
} //end is_front_page
?>


           