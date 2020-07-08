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

<?php if($heading){ ?>
		<div class="gold-heading aligncenter">
		<div class="container">
			<div class="row">
				<div class="col-12"><h3><?php echo $heading; ?></h3></div>
			</div>
		</div>

		</div>
<?php } ?>
<section class="gold sponsor-section" style="background:<?php echo $background;?>">
	<div class="container">
		<div class="row">


			<div class="col-lg-10 offset-lg-1">

			<div id="gold">
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
