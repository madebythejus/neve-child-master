<?php
/**
* CPT Tabs Block
*
* @package Custom Post Type Tabs
* @since 1.0.0
*
*/

// Register js first
function some_good_scripts() {
    wp_register_script('my_amazing_script', get_stylesheet_directory_uri() . '/coolscript.js', array('jquery'),'1.1', true);
    wp_enqueue_script('my_amazing_script');
} 

add_action( 'wp_enqueue_scripts', 'some_good_scripts' , 20 ); 

// Actual code starts here
 // Get the 'movies' post type
$args = array('post_type' => 'tutor',);
$loop = new WP_Query($args);
wp_reset_query();
?>

<?php if ( $loop->have_posts()): ?>

    <div id="tabContainer">
        <div id="theTabs">
            <?php while($loop->have_posts()): $loop->the_post();

            // converting title into spaceless slug
                $slug       = strtolower( get_the_title()); 
                $slug       = str_replace(" ", "-", $slug);
                $slug       = preg_replace("/[-]+/i", "-", $slug); ?>
            
            <!-- putting slug as aria controls value -->
                <div aria-controls="<?php echo $slug; ?>">
                <!-- using thumbnail url in img -->
                <img class="roundImg" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
                    <div>
                    <?php the_title(); ?>
                    <br>
                    <!-- Getting description. get post meta, get the ID of current post, field name, true for string vs array -->
                    <?php 
                    $description = get_post_meta(get_the_ID(), 'tutor_specialization', TRUE); 
                    echo $description;
                    ?>
                    </div>

                </div>

                <?php endwhile; ?>

            </div>

            <?php while($loop->have_posts()): $loop->the_post();
                $slug       = strtolower( get_the_title()); 
                $slug       = str_replace(" ", "-", $slug);
                $slug       = preg_replace("/[-]+/i", "-", $slug); ?> 
            
                <div id="<?php echo $slug; ?>" class="tabbedContent">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                
                </div>

                <?php endwhile; ?>
    </div>
    
<?php endif ?>

<!-- Script for invoking tabs -->

<script type="text/javascript">
// var a = 5;
// alert("hello world. The value of a is: " + a);

new AriaTablist(document.getElementById('theTabs'));
</script>


