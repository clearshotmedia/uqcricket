<?php

$heading = get_sub_field('section_heading');
$shortc = get_sub_field('subscribe_shortcode');
$image = get_sub_field('background_image');
$col = get_sub_field('text_colour');
?>

<section class="thin_subscribe" style="background:url('<?php echo $image; ?>'); background-position:center center;background-size:cover;">
		<div class="container">
			<div class="row aligncenter">
				<div class="col-12">
					<h5 style="color:<?php echo $col;?>"><?php echo $heading; ?></h5>
				</div>
				<div class="col-12">
					<?php echo $shortc; ?>
				</div>
			</div>
		</div>
</section>
