<?php
get_header();
?>
<div id="about" class="new2015">
	<div class="content-header full-bg">
		<div class="container">
			<div class="row text-center">
				<h1>About</h1>
				<h2>Focused on building best in class audiences and the first on-demand<br>consumers insights platform for researchers and marketers</h2>
			</div>
		</div>
	</div>
	<div id="" class="sticky-wrapper">
		<div class="sub_nav" style="">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 menu">
						<div class="col-lg-9 col-xs-12" id="xtra-menu">
						<ul>
							<li class="icon"><img alt="" src="/wp-content/themes/usamp-theme/images/about_icon.png"></li>
							<li data-target="our-story"><a href="#">Our Story</a></li>
							<li data-target="team"><a href="#">Instantly Team</a></li>
							<li data-target="clients"><a href="#">Our Clients</a></li>
							<li data-target="investors"><a href="#">Investors</a></li>
							<li data-target="organizations"><a href="#">Organizations</a></li>
						</ul>
						</div>
						<div class="col-lg-3 col-xs-12 mobile-text-center">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_template_part( 'content', 'page' ); ?>
	
<?php get_footer(); ?>

<script>
$(document).ready(function() {
	App.fullBackgroundImg();
});
</script>