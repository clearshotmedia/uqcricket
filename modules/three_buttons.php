<?php
	$colour = the_sub_field('background_colour');
	$button1 = get_sub_field('box_1');
	$button2 = get_sub_field('box_2');
	$button3 = get_sub_field('box_3');

?>
<section class="three_buttons">
	<div class="container">
		<div class="row align-center">
		<div class="col-md-4">
		<a href="<?php echo $button1['button_link']; ?>">
		<div class="card big-button">
				<img class="card-img-top" src="<?php echo $button1['image'];?>" alt=" image">
				<div class="card-body">
					<h6 class="card-title"><?php echo $button1['heading']; ?></h6>
					<p class="card-text"><?php echo $button1['text_content']; ?></p>

				</div>
				</div>
				</a>
           		</div>
				   <div class="col-md-4">
		<a href="<?php echo $button2['button_link']; ?>">
		<div class="card big-button">
				<img class="card-img-top" src="<?php echo $button2['image'];?>" alt=" image">
				<div class="card-body">
					<h6 class="card-title"><?php echo $button2['heading']; ?></h6>
					<p class="card-text"><?php echo $button2['text_content']; ?></p>

				</div>
				</div>
				</a>
           		</div>
				   <div class="col-md-4">
		<a href="<?php echo $button3['button_link']; ?>">
		<div class="card big-button">
				<img class="card-img-top" src="<?php echo $button3['image'];?>" alt=" image">
				<div class="card-body">
					<h6 class="card-title"><?php echo $button3['heading']; ?></h6>
					<p class="card-text"><?php echo $button3['text_content']; ?></p>

				</div>
				</div>
				</a>
           		</div>
		</div>
	</div>

</section>
