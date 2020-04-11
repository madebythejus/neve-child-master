
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

<div class="eventsGridContainer">

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
                    <div>
                        <h4><?php the_title(); ?></h4>
                        <!-- Getting description. get post meta, get the ID of current post, field name, true for string vs array -->
                        <h5>
                        <?php 
                        $description = get_post_meta(get_the_ID(), 'event_tagline', TRUE); 
                        echo $description;
                        ?>
                        </h5>
                    </div>
                    <!-- <?php the_content(); ?> -->
                    <div>
                        <div class="sideBySide lastItem">
                        <svg width="1.4rem" height="1.4rem" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" class="svg-inline--fa fa-clock fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"></path></svg>
                            <h6>
                            <?php 
                            $description = get_post_meta(get_the_ID(), 'event_timings', TRUE); 
                            echo $description;
                            ?>
                            </h6>
                        </div>
                        <div class="sideBySide ">
                        <svg width="1.4rem" height="1.4rem" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
                            <h6 class="killChildrensMargins">
                            <?php 
                            $description = get_post_meta(get_the_ID(), 'event_location', TRUE); 
                            echo $description;
                            ?>
                            </h6>
                        </div>
                    </div>
                </div>


            </div>
    <?php endwhile; ?>
<?php endif ?>

</div>