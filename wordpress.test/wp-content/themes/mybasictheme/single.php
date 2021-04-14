<?php 

get_header();

?>

    <h1>Hello, world! & Single</h1>

    <hr />

    <!-- do we have any posts to display? -->
    <?php if(have_posts()) : ?>
        <!-- heh we have posts to display -->
        <?php while(have_posts()) : ?>

            <?php 
                the_post(); 
            ?>
            <article class="">
                
                <div class="">
                    
                    <h2 class="card-title">
                        <?php the_title(); ?>
                    </h2>
                    <div class="card-meta text-muted small mb-2">
                        post published <?php the_date(); ?> by <?php the_author(); ?> in <?php the_category(); ?>
                    </div>
                    

                    <p class="card-text">
                        <?php the_content(); ?>
                    </p>
                
                </div>
            
            </article>
        <?php endwhile ; ?>
    <?php endif ; ?>

<?php 

get_footer();