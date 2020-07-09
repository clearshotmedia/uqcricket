<?php
$background = get_sub_field('background_image');
$subheading = get_sub_field('subheading');
$heading = get_sub_field('heading');
$b1 = get_sub_field('button_1');
$b2 = get_sub_field('button_2');
$b3 = get_sub_field('button_3');
?>

<section class="hero_stats blues-header" style="background:url('<?php echo $background; ?>'); background-position:center center;background-size:cover;">
<div class="overlay-red"></div>
	<div class="container">

		<div class="row aligncenter">
			<div class="col-md-12">
				<h6 class="subheading">
				<?php echo $subheading; ?>
				</h6>
			</div>
			<div class="col-md-12">
				<h2 class="blues-heading">
				<?php echo $heading; ?>
				</h2>
			</div>
		</div>
		<div class="row b-buttons justify-content-center">
		<?php if($b1){ ?>
		<div class="col-md-2">
		<a href="<?php echo $b1['url'];?>"><button><?php echo $b1['title']; ?></button></a>
		</div>

		<?php } if($b2){?>
		<div class="col-md-2"><a href="<?php echo $b2['url'];?>"><button><?php echo $b2['title']; ?></button></a></div>
		<?php } if($b3){?>
		<div class="col-md-2"><a href="<?php echo $b3['url'];?>"><button><?php echo $b3['title']; ?></button></a></div>
		<?php }?>
		</div>
	</div>
</section>
