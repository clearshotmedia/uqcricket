<?php
$background = get_sub_field('background_image');
$missionheading = get_sub_field('mission_statement_heading');
$mission = get_sub_field('mission_statement');
?>
<section class="mission" style="background:url('<?php echo $background; ?>'); background-position:center center;background-size:cover;">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="mission-inner">
						<h5 class="mission-header"><?php echo $missionheading; ?></h5>
						<p><?php echo $mission; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
