<?php 
		// Actual code starts here
		// Get the 'resources_collection' post type
		$args = array('post_type' => 'resources_collection',);
		$loop = new WP_Query($args);
		wp_reset_query();
		?>

		<?php if ( $loop->have_posts()): ?>
			<?php while($loop->have_posts()): $loop->the_post(); 
				// converting title into spaceless slug
				$slug       = strtolower( get_the_title()); 
				$slug       = str_replace(" ", "-", $slug);
				$slug       = preg_replace("/[-]+/i", "-", $slug); ?>

				<!-- Putting in post title in a div with slug as ID -->
				<div>
					<h2 id="<?php echo $slug; ?>" class="resourceHeader"><?php echo the_title(); ?></h2>
				</div>
				<!-- working through the repeater field -->
				<?php $fields = CFS()->get( 'resource_items' );
					foreach ( $fields as $field ) 
						{	
							// Putting link and label in variables
							$link = $field['resource_link'];
							$label = $field['resource_label'];
							// echoing a link with slug as class, link as href and label inside
							echo "<a class=\"" . $slug . "\" href=\"" . $link . "\">" . $label . "</a>";
							echo "<br>";
						
						}    
				?>

			<?php endwhile; ?>
		<?php endif ?>

		