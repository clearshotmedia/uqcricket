<?php
$heading = the_sub_field('section_heading');


?>
<section class="coaches">
<div class="container">
	<div class="row">
		<div class="col-12">
		<h3><?php echo $heading; ?></h3>
		</div>
	</div>

	<div class="row">
	<?php

			// check if the repeater field has rows of data
			if( have_rows('coach') ):

				// loop through the rows of data
				while ( have_rows('coach') ) : the_row();
					?>
					<div class="col-md-4">
						<div class="coach-inner">
							<img src="<?php echo the_sub_field('image'); ?>" alt="">
							<h5><?php echo the_sub_field('coach_name'); ?></h5>
								<ul>
									<li>
										<b>Nickname </b> - <?php echo the_sub_field('nickname'); ?>
									</li>
									<li>
										<b>Qualifications </b> - <?php echo the_sub_field('qualifications'); ?>
									</li>
									<li>
										<b>Specialisation </b> - <?php echo the_sub_field('specialisation'); ?>
									</li>
									<li>
										<b>Playing Experience </b> - <?php echo the_sub_field('experience'); ?>
									</li>
									<li>
										<b>Coahing Philosophy </b> - <?php echo the_sub_field('philosophy'); ?>
									</li>
								</ul>
						</div>
					</div>

				<?php endwhile;

			else :

				// no rows found

			endif;

			?>
	</div>
</div>
</section>
