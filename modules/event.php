<?php
    $args = array( 'numberposts' => '1' );
    $recent_posts = wp_get_recent_posts( $args );
    $background = get_sub_field('background_image');
?>

<section id="event-feed">


           <h4>Upcoming Events</h4>


				<div class="posts">
            <?php foreach( $recent_posts as $recent ){  ?>

           <div class="post-inner" style="background:url('<?php echo  get_the_post_thumbnail_url($recent["ID"],'large');?>');background-size:cover;">
		   <div class="overlay"></div>


		   <a id="<?php echo $recent["ID"];?>" href="<?php echo get_permalink($recent["ID"]); ?>"><h5 class="news-heading"><?php echo $recent["post_title"]; ?></h5></a>
		   <div class="py-2 excerpt">
		   <?php echo $recent["post_excerpt"]; ?>
		   </div>
				<div class="more py-4">
				<a id="<?php echo $recent["ID"];?>" href="<?php echo get_permalink($recent["ID"]); ?>">
		   <button> Read More </button>
		   </a></div>


               </div>

            <?php } ?> <!-- end foreach -->


            </div>

</section>
