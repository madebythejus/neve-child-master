<?php
/**
* CPT Tabs Block
*
* @package Custom Post Type Tabs
* @since 1.0.0
*
*/

// Actual code starts here
 // Get the 'movies' post type
$args = array('post_type' => 'tutor',);
$loop = new WP_Query($args);
wp_reset_query();
?>

<?php if ( $loop->have_posts()): ?>

    <div id="tabContainer">
        <div id="theTabs" aria-orientation="vertical">
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
                        <h4 class="notAHeading"><?php the_title(); ?></h4>
                        <!-- Getting description. get post meta, get the ID of current post, field name, true for string vs array -->
                        <span>
                        <?php 
                        $description = get_post_meta(get_the_ID(), 'tutor_specialization', TRUE); 
                        echo $description;
                        ?>
                        </span>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <!-- Tab content loaded with accordion headers - will be hidden with media query -->
        <div id="theAccordions" aria-multiselectable="false" aria-orientation="vertical">
            <?php while($loop->have_posts()): $loop->the_post();
                $slug       = strtolower( get_the_title()); 
                $slug       = str_replace(" ", "-", $slug);
                $slug       = preg_replace("/[-]+/i", "-", $slug); ?> 

                
                
                    <!-- putting slug as aria controls value -->
                    <div class="accordionHeader" aria-controls="<?php echo $slug; ?>">
                        <!-- using thumbnail url in img -->
                        <img class="roundImg" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="">
                        
                        <div>
                            <h4 class="notAHeading"><?php the_title(); ?></h4>
                            <!-- Getting description. get post meta, get the ID of current post, field name, true for string vs array -->
                            <span>
                            <?php 
                            $description = get_post_meta(get_the_ID(), 'tutor_specialization', TRUE); 
                            echo $description;
                            ?>
                            </span>
                        </div>
                    </div>
                
            
                    <div id="<?php echo $slug; ?>" class="tabbedContent">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    
                    </div>

            <?php endwhile; ?>
        </div>
    </div>
    
<?php endif ?>

<!-- Script for invoking tabs -->

<script type="text/javascript">
// var a = 5;
// alert("hello world. The value of a is: " + a);

new AriaTablist(document.getElementById('theTabs'));
new AriaTablist(document.getElementById('theAccordions'));

// set tablist to multi selectable for mobile
function myFunction(x) {
  if (x.matches) { // If media query matches
        document.getElementById("theAccordions").setAttribute("aria-multiselectable", "false");
  } else {
    document.getElementById("theAccordions").setAttribute("aria-multiselectable", "true");
  }
}
var x = window.matchMedia("(min-width: 961px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

</script>


