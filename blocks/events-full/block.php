
<?php 
	// Actual code starts here
	// Get the 'event' post type
	$args = array('post_type' => 'event',);
	$loop = new WP_Query($args);
	wp_reset_query();
?>

<?php 
// making a new searchable list option - this will add 1 after each loop is through
$incrementor = 1;

?>

<?php if ( $loop->have_posts()): ?>
    <?php while($loop->have_posts()): $loop->the_post(); 
        // converting title into spaceless slug
        $slug       = strtolower( get_the_title()); 
        $slug       = str_replace(" ", "-", $slug);
        $slug       = preg_replace("/[-]+/i", "-", $slug); 
        ?>
            <div class="eventContainer">
                <div class="eventImage">
                <!-- using thumbnail url in img -->
                <img class="" src="<?php the_post_thumbnail_url('medium'); ?>" alt=""></div>
                    
                <div class="eventDetails">
                    <h3><?php the_title(); ?></h3>
                    <!-- Getting description. get post meta, get the ID of current post, field name, true for string vs array -->
                    <h4>
                    <?php 
                    $description = get_post_meta(get_the_ID(), 'event_tagline', TRUE); 
                    echo $description;
                    ?>
                    </h4>
                    <?php the_content(); ?>
                    <div class="sideBySide lastItem">
                        <span class="dashicons dashicons-clock"></span>
                        <h5>
                        <?php 
                        $description = get_post_meta(get_the_ID(), 'event_timings', TRUE); 
                        echo $description;
                        ?>
                        </h5>
                    </div>
                    <div class="sideBySide ">
                        <span class="dashicons dashicons-location-alt"></span>
                        <h5 class="killChildrensMargins">
                        <?php 
                        $description = get_post_meta(get_the_ID(), 'event_location', TRUE); 
                        echo $description;
                        ?>
                        </h5>
                    </div>
                </div>


            </div>
    <?php endwhile; ?>
<?php endif ?>