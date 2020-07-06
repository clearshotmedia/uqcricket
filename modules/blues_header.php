<?php
$background = get_sub_field('background_image');
$subheading = get_sub_field('subheading');
$heading = get_sub_field('heading');
?>

<section class="hero_stats blues-header" style="background:url('<?php echo $background; ?>'); background-position:center center;background-size:cover;">
<div class="overlay-red"></div>
	<div class="container">

		<div class="row aligncenter">
			<div class="col-md-12">
				<h6 class="subheading">
				<?php echo $subheading; ?>
				</h6>
			</div>
			<div class="col-md-12">
				<h2 class="blues-heading">
				<?php echo $heading; ?>
				</h2>
			</div>
		</div>
	</div>
</section>
