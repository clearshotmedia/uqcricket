<?php
$heading = get_sub_field('heading');
$bgcolour = get_sub_field('background_colour');
?>
<section class="supporter">
	<div class="container">
		<div class="row">

<?php if($heading){ ?>
		<div class="col-12">
		<h5><?php echo $heading; ?></h5>
		</div>
<?php } ?>


<!--- start col --->





				<?php
				if( have_rows('sponsor') ):
					$i = 1; // Set the increment variable
					// Loop through rows.
					while( have_rows('sponsor') ) : the_row(); ?>

<div class="col-md-4">
<div class="accordian" id="accordion-b-<?php echo $i;?>">
					<div class="card">
					<img class="card-img-top" src="<?php the_sub_field('logo');?>" alt="Card image cap">

					<div class="card-body">
  <h5 class="card-title"><?php the_sub_field('name');?></h5>
  <p class="card-text"><?php the_sub_field('details');?> </p>
  </div>
	<div class="card-header" id="heading-b-<?php echo $i;?>">
      <h6 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-b-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse-b-<?php echo $i;?>">
          Details
        </button>
      </h6>
    </div>

		<div id="collapse-b-<?php echo $i;?>" class="collapse " aria-labelledby="heading-b-<?php echo $i;?>" data-parent="#accordion-b-<?php echo $i;?>">
      <div class="card-body">
			<?php the_sub_field('more_details');?>
      </div>
    </div>
					</div>
					</div>
					</div>
					<?php $i++; // Increment the increment variable
					 endwhile;

				endif;
				?>




<!-- end col --->



		</div>
	</div>
</section>
