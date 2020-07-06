<?php

$heading = get_sub_field('section_heading');
$shortc = get_sub_field('subscribe_shortcode');



?>

<section class="thin_subscribe">
		<div class="container">
			<div class="row aligncenter">
				<div class="col-12">
					<h4><?php echo $heading; ?></h4>
				</div>
				<div class="col-12">
					<?php echo $shortc; ?>
				</div>
			</div>
		</div>
</section>
