<!-- get chosen post type from block with FALSE to just get value -->
<?php $chosenPostType = block_field( 'chosen-post-type', false ); ?>


<div class="gridContainer">

<?php 
	// Actual code starts here
    // Get the post type from block
    
    // $args = array('post_type' => 'resources_categories',);
    $args = array('post_type' => $chosenPostType,);
	$loop = new WP_Query($args);
	wp_reset_query();
    ?>

    <?php if ( $loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post(); 
            // converting title into spaceless slug
            $slug       = strtolower( get_the_title()); 
            $slug       = str_replace(" ", "-", $slug);
            $slug       = preg_replace("/[-]+/i", "-", $slug); 
        ?>
            <a href="<?php block_field( 'link-to-page' ); ?>#<?php echo $slug ?>" class="gridItem">
        <div>
        <h5><?php echo the_title() ?></h5>
        </div>
        </a>
        

    <?php endwhile; ?>
<?php endif ?>

</div>