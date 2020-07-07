<?php
$heading = get_sub_field('heading');
?>

<section class="accord-section">
	<div class="container">
		<div class="row">
			<div class="col-12">

				<h3 class="heading"><?php echo $heading; ?></h3>
				<div class="accordian" id="accordianEXAMPLE">
				<?php
				if( have_rows('collapsible_tab') ):
					$i = 1; // Set the increment variable
					// Loop through rows.
					while( have_rows('collapsible_tab') ) : the_row(); ?>
					<div class="card">
						<div class="card-header" id="heading-<?php echo $i;?>">
						<h4 class="accordian-head">
						<?php if ($i == 1){
							$aria = '';
							$show = 'show';
						} else { $aria = 'collapsed'; $show = '';  }

						?>
							<button class="btn btn-link <?php echo $aria;?>" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse-<?php echo $i;?>">
							<?php the_sub_field('tab_heading'); ?>
							</button>
						</h4>
						</div>

						<div id="collapse-<?php echo $i;?>" class="collapse <?php echo $show;?>" aria-labelledby="heading-<?php echo $i;?>" data-parent="#accordianEXAMPLE">
						<div class="card-body">
							<?php the_sub_field('tab_content');?>
						</div>
						</div>
					</div>
					<?php $i++; // Increment the increment variable
					 endwhile;

				endif;
				?>

				</div>
			</div>
		</div>
	</div>
</section>
