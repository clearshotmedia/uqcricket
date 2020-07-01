<section class="partners">
	<div class="container">
		<div class="row">
			<?php

			// Check rows exists.
			if( have_rows('sponsor') ):

				// Loop through rows.
				while( have_rows('sponsor') ) : the_row();
						?>
						<div class="col-md-3">
						<a href="<?php echo the_sub_field('sponsor_link'); ?>">
							<img src="<?php echo the_sub_field('image'); ?>" alt="">
						</a>
						</div>
						 <?php


				// End loop.
				endwhile;

			// No value.
			else :
				// Do something...
			endif;
			?>
		</div>
		<div class="row align-center">
			<div class="col-12">
			<?php echo the_sub_field('below_sponsors'); ?>
			</div>
		</div>
	</div>

</section>
