<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <link rel="icon" href="/BioLayoutExpress3DIcon.png" type="image/x-icon">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>

  <?php wp_head(); ?>

  <?php if (wp_count_posts()->publish > 0) : ?>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  <?php endif; ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.corner.js"></script>

  <?php 
  if(is_front_page()) {
  ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.carouFredSel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/fancyzoom.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        //carousel - using custom configuration
        $("#image_gallery").carouFredSel({
          items: {
            height: "65%",
            width: 275,
            visible   : {
              min     : 3,
              max     : 5
            }
          },
          direction     : "left",
          circular: true,
          responsive: true,
          align: "center",
          width: "100%",
          scroll : {
            items     : 1,
            easing      : "quadratic",
            duration    : 1000,             
            pauseOnHover  : true
          }         
        });   
        
        //fancyzoom
        $('#image_gallery .fancyZoom a').fancyZoom({scaleImg: true, closeOnClick: true, directory: '/wp-content/themes/biolayout-roots/assets/fancyzoom'});
        $('a.fancyzoom').fancyZoom({scaleImg: true, closeOnClick: true, directory: '/wp-content/themes/biolayout-roots/assets/fancyzoom'});
      });
    </script>
  <?php 
  } //end is_front_page
  ?>

  <script>
    $(document).ready(function(){
		//fix bug in jQuery Lightbox For Native Galleries plugin/ColorBox that messes up menu links
		//remove cboxElement class for all links which do not contain an image
		$('a:not(:has(img))').each(function() {
			$(this).removeClass('cboxElement');
		});
 
		//Create Google Analytics events for custom menu items
		//NB don't need timeout as opening new window/tab
		$('.analytics-manual').delegate('a', 'click', function(e) {
		   _gaq.push(['_trackEvent', 'Documentation', 'View', 'Manual']);
		});        

		$('.analytics-protocol').delegate('a', 'click', function(e) {
		   _gaq.push(['_trackEvent', 'Documentation', 'View', 'Protocol']);
		});
		
		$('.analytics-manual-previous').delegate('a', 'click', function(e) {
		   _gaq.push(['_trackEvent', 'Documentation', 'View', 'Manual Previous']);
		});        

		
	<?php 				//Google Analytics page tracking
		if(empty($s)){ 	//no search term entered, track page normally
	?>
		    _gaq.push(["_trackPageview"]);

	<?php		
		}else{ //search term entered, create a virtual pageview for tracking in Site Search
	?>	
			_gaq.push(["_trackPageview", location.pathname.replace("/search/","/search?q=")]); 
	<?	
		}
	?>
	});
        
  </script>
  
  <script>
      !function ($) {
        $(function(){
          // Fix for dropdowns on mobile devices
          $('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { 
              e.stopPropagation(); 
          });
          $(document).on('click','.dropdown-menu a',function(){
              document.location = $(this).attr('href');
          });
        })
      }(window.jQuery)
    </script>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

	<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
</head>
