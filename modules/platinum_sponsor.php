<?php
$heading = get_sub_field('heading');
$bgcolour = get_sub_field('background_colour');
$image = get_sub_field('sponsor_image');
$name = get_sub_field('sponsor_name');
$btext = get_sub_field('expanding_button_text');
$basic = get_sub_field('sponsor_basic_info');
$details = get_sub_field('sponsor_detailed_info');
$link = get_sub_field('sponsor_link');
?>
<section class="platinum sponsor-section">
	<div class="container">
		<div class="row">
		<?php if($heading){ ?>
		<div class="col-12 aligncenter">
		<h3><?php echo $heading; ?></h3>
		</div>
<?php } ?>

			<div class="col-12">

			<div id="platinum">
  <div class="card">
  <img class="card-img-top" src="<?php echo $image; ?>" alt="Card image cap">

  <div class="card-body">
  <h5 class="card-title"><?php echo $name; ?></h5>
  <div class="card-text"><?php echo $basic; ?> </div>
	<?php echo $details; ?>
  </div>



  </div>


</div>
			</div>
		</div>
	</div>

</section>
