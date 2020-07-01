
<section class="upcoming_programs">
	<div class="container">
		<div class="row">
			<div class="col-12 aligncenter">
				<h4><?php echo the_sub_field('main_heading'); ?></h4>

			</div>

			<?php

			// check if the repeater field has rows of data
			if( have_rows('program') ):

				// loop through the rows of data
				while ( have_rows('program') ) : the_row();
					?>
					<div class="col-12 py-2">
						<div class="program-inner">
							<h3><?php the_sub_field('heading'); ?></h3>
							<div class="program-content">
								<?php echo the_sub_field('information'); ?>
							</div>
						</div>
					</div>

					<?php
				endwhile;

			else :

				// no rows found

			endif;

			?>

		</div>
	</div>
</section>
