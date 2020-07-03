<?php
$image = get_sub_field('background_image');
$content = get_sub_field('inner_content');
?>

<section class="hero_image" style="background:url('<?php echo $image; ?>'); background-size:cover; background-position:center center;">

	<div class="container align-middle">
		<div class="row">
			<div class="col-12 content-inner">
				<?php echo $content; ?>
			</div>
		</div>
	</div>

</section>
