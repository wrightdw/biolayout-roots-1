<div id="footer_outer">
	<div id="footer_inner">
		<footer id="content-info" class="container" role="contentinfo">
			<div class="row">
				<div class="span4">
					<p>&copy;2006–<?php echo date('Y'); ?> The BioLayout <em>Express</em><sup>3D</sup> Team
						<br/>
						<a href="<?php get_site_url(); ?>/privacy-cookies/">Privacy &amp; Cookies</a>
						<br/>
							<a href="mailto:support@biolayout.org">support@biolayout.org</a>
							&nbsp;
							<a href="https://plus.google.com/+BiolayoutOrg" target="_blank"
							   rel="publisher" target="_top" style="text-decoration:none;">
							<img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="border:0;width:16px;height:16px;"/>
							</a>
							<!--
							<a href="https://twitter.com/biolayout" class="twitter-follow-button" data-show-count="false" data-align="left">Follow @biolayout</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>	
							-->
					</p>
				</div>

				  	<?php dynamic_sidebar('sidebar-footer'); //display logos from widget ?>
			</div>
		</footer>
	</div>
</div>


<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_setDomainName','biolayout.org']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>

<?php wp_footer(); ?>