<div class="blockHeader">
	<h1>Resources</h1> 
	<input name="SearchData" class="search" placeholder="Filter" />
</div>

<?php 
		// Actual code starts here
		// Get the 'resources_collection' post type
		$args = array('post_type' => 'resources_collection',);
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

				<div id="container<?php echo $incrementor ?>" class="categoryContainer">
					<!-- Putting in post title in a div with slug as ID -->
					<div class="categoryHeading">
						<h2 id="<?php echo $slug; ?>" class="resourceHeader"><?php echo the_title(); ?></h2>
					</div>
					<ul class="list categoryListItems">
						<!-- working through the repeater field -->
						<?php $fields = CFS()->get( 'resource_items' );
							foreach ( $fields as $field ) 
								{	
									// Putting link and label in variables
									$link = $field['resource_link'];
									$label = $field['resource_label'];
									// echoing a link with slug as class, link as href and label inside
									echo "<li class=\"listItem\"><a class=\"" . $slug . "\" href=\"" . $link . "\">" . $label . "</a></li>";
								
								}    
						?>
					</ul>
				</div>
				<?php $incrementor++; ?>
			<?php endwhile; ?>
		<?php endif ?>

<script type="text/javascript">
	var options_1 = {
		valueNames: ["social-networks"]
	};

	var options_2 = {
		valueNames: ["search-engines"]
	};

	var list1 = new List("container1", options_1);
	var list2 = new List("container2", options_2);

	jQuery(".search").keyup(function () {
		list1.search(jQuery(this).val());
		list2.search(jQuery(this).val());
	});

</script>
		