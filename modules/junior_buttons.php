<?php
$button1 = get_sub_field('box_1');
$button2 = get_sub_field('box_2');
$button3 = get_sub_field('box_3');

?>
<section class="junior_buttons">
	<div class="container">
		<div class="row">

			<div class="col-md-4 aligncenter">
				<div class="image-inner">
				<img src="<?php echo $button1['image'];?>" alt=" image">
				</div>
				<div class="content-inner">
				<h5><?php echo $button1['heading']; ?></h5>
				<?php echo $button1['text_content']; ?>
				</div>
				<div class="button-wrap pt-3">
				<a href="<?php echo $button1['button_link']['url']; ?>">
				<button><?php echo $button1['button_link']['title']; ?></button>
				</a>
				</div>
			</div>

			<div class="col-md-4 aligncenter">
				<div class="image-inner">
				<img src="<?php echo $button2['image'];?>" alt=" image">
				</div>
				<div class="content-inner">
				<h5><?php echo $button2['heading']; ?></h5>
				<?php echo $button2['text_content']; ?>
				</div>
				<div class="button-wrap pt-3">
				<a href="<?php echo $button2['button_link']['url']; ?>">
				<button><?php echo $button2['button_link']['title']; ?></button>
				</a>
				</div>
			</div>

			<div class="col-md-4 aligncenter">
				<div class="image-inner">
				<img src="<?php echo $button3['image'];?>" alt=" image">
				</div>
				<div class="content-inner">
				<h5><?php echo $button3['heading']; ?></h5>
				<?php echo $button3['text_content']; ?>
				</div>
				<div class="button-wrap pt-3">
				<a href="<?php echo $button3['button_link']['url']; ?>">
				<button><?php echo $button3['button_link']['title']; ?></button>
				</a>
				</div>
			</div>
		</div>
	</div>
</section>
