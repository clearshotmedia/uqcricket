<?php
$background = get_sub_field('background_image');
$stat1 = get_sub_field('stat_1');
$stat2 = get_sub_field('stat_2');
$stat3 = get_sub_field('stat_3');
$stat4 = get_sub_field('stat_4');
$stat5 = get_sub_field('stat_5');
?>

<section class="hero_stats" style="background:url('<?php echo $background; ?>'); background-position:center center;background-size:cover;">
<div class="overlay-red"></div>
	<div class="container">

		<div class="row ">
			<div class="col-sm-2 offset-sm-1">
				<div class="row aligncenter">
					<div class="col-12"><h1><?php echo $stat1['number']; ?></h1></div>
					<div class="col-12 subtext"><?php echo $stat1['text']; ?></div>
				</div>
			</div>
			<div class="col-sm-2">
			<div class="row aligncenter">
					<div class="col-12"><h1><?php echo $stat2['number']; ?></h1></div>
					<div class="col-12 subtext"><?php echo $stat2['text']; ?></div>
				</div></div>
			<div class="col-sm-2">
			<div class="row aligncenter">
					<div class="col-12"><h1><?php echo $stat3['number']; ?></h1></div>
					<div class="col-12 subtext"><?php echo $stat3['text']; ?></div>
				</div></div>
			<div class="col-sm-2">
			<div class="row aligncenter">
					<div class="col-12"><h1><?php echo $stat4['number']; ?></h1></div>
					<div class="col-12 subtext"><?php echo $stat4['text']; ?></div>
				</div></div>
			<div class="col-sm-2"><div class="row aligncenter">
					<div class="col-12"><h1><?php echo $stat5['number']; ?></h1></div>
					<div class="col-12 subtext"><?php echo $stat5['text']; ?></div>
				</div></div>
		</div>
	</div>
</section>
