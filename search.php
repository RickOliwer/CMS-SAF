<?php
get_header();
?>

<main class="container mt-3">

	<h1>Search results for QWERTY</h1>

	<pre>search.php</pre>

	<hr />

	
		<div class="content">
			<!-- Do we have any posts to display? -->
			<?php if (have_posts()) : ?>
				<!-- Yay, we has posts do display! -->
				<?php while (have_posts()) : ?>
                    <!-- Start post -->
                    <ul>
					<?php
						// Load next post to display
                        the_post();
                            get_template_part('template-parts/content', 'search');
                    ?>
                    </ul>
					<!-- End post -->
				<?php endwhile; ?>
			<?php else: ?>
				<p>Sorry, no search results found for QWERTY.</p>
			<?php endif; ?>
		</div><!-- /.col-md-9 -->

</main><!-- /.container -->

<?php
get_footer();