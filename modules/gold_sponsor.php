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
<section class="gold sponsor-section" style="background:<?php echo $background;?>">
	<div class="container">
		<div class="row">
		<?php if($heading){ ?>
		<div class="col-12 aligncenter ">
		<h3><?php echo $heading; ?></h3>
		</div>
<?php } ?>

			<div class="col-lg-10 offset-lg-1">

			<div id="gold">
  <div class="card">
  <img class="card-img-top" src="<?php echo $image; ?>" alt="Card image cap">

  <div class="card-body">
  <h5 class="card-title"><?php echo $name; ?></h5>
  <p class="card-text"><?php echo $basic; ?> </p>
  </div>
    <div class="card-header" id="heading-g">
      <h6 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-g" aria-expanded="true" aria-controls="collapse-g">
          <?php echo $btext; ?>
        </button>
      </h6>
    </div>

    <div id="collapse-g" class="collapse " aria-labelledby="heading-g" data-parent="#gold">
      <div class="card-body">
			<?php echo $details; ?>
      </div>
    </div>
  </div>


</div>
			</div>
		</div>
	</div>

</section>
