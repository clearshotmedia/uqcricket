<?php
$colour = the_sub_field('background_colour');
$image1 = get_sub_field('image_1');
$image2 = get_sub_field('image_2');
$image3 = get_sub_field('image_3');
$image4 = get_sub_field('image_4');
?>

<section class="four_image" style="background-color:<?php echo $colour; ?>;">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			<div class="image-inner">
			<img src="<?php echo $image1; ?>" alt="image1">
			</div>
			</div>
			<div class="col-md-3">
			<div class="image-inner">
			<img src="<?php echo $image2; ?>" alt="image1">
			</div>
			</div>
			<div class="col-md-3">
			<div class="image-inner">
			<img src="<?php echo $image3; ?>" alt="image1">
			</div>
			</div>
			<div class="col-md-3">
			<div class="image-inner">
			<img src="<?php echo $image4; ?>" alt="image1">
			</div>
			</div>
		</div>
	</div>
</section>
