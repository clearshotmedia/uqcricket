<?php
$heading = get_sub_field('section_heading');


?>
<section class="coaches" id="coaches">
<div class="container">
	<div class="row aligncenter">
		<div class="col-12">
		<h4><?php echo $heading; ?></h4>
		</div>
	</div>

	<div class="row">
	<?php

			// check if the repeater field has rows of data
			if( have_rows('coach') ):

				// loop through the rows of data
				while ( have_rows('coach') ) : the_row();
					?>
					<div class="col-md-4 py-4 aligncenter">
						<div class="coach-inner">
							<img src="<?php echo the_sub_field('image'); ?>" alt="">
							<h5><?php echo the_sub_field('coach_name'); ?></h5>
								<ul>
									<li>
										<span class="coachinfo">Nickname </span> - <?php echo the_sub_field('nickname'); ?>
									</li>
									<li>
									<span class="coachinfo">Qualifications </span> - <?php echo the_sub_field('qualifications'); ?>
									</li>
									<li>
									<span class="coachinfo">Specialisation </span> - <?php echo the_sub_field('specialisation'); ?>
									</li>
									<li>
									<span class="coachinfo">Playing Experience </span> - <?php echo the_sub_field('experience'); ?>
									</li>
									<li>
									<span class="coachinfo">Coaching Philosophy </span> - <?php echo the_sub_field('philosophy'); ?>
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
