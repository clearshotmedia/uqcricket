<?php
$heading = get_sub_field('heading');?>

<section class="sponsor_slider">
<div class="container">
	<div class="row aligncenter">
		<div class="col-12 pb-2">
		<h4><?php echo $heading; ?></h4>
		</div>
		<div class="col-12">

		<div class=" slider autoplay">
  <?php
	if( have_rows('sponsor') ):
 	// loop through the rows of data
	while ( have_rows('sponsor') ) : the_row();
	?>  <div class="slide"><a href="
	<?php echo the_sub_field('sponsor_link'); ?>"><img src="<?php echo the_sub_field('sponsor_image');?>"> </a></div><?php
    endwhile;
	endif; ?>
   </div>
		</div>
	</div>
</div>
</section>



