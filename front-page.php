<?php get_header()?>
    <div id="banner">
        <h1>Welcome To Whistler</h1>
        <h3>Winter Heaven</h3>
    </div>

    <main>
        <a href="<?php echo  site_url('/blog');?>">
            <h2 class="section-heading">All Blog Posts</h2>
        </a>

        <section>

            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                );

                $blogposts = new WP_Query($args);

                while ($blogposts->have_posts()) {
                    $blogposts->the_post();
                
                    ?>
                    <div class="card">
                        <div class="card-img">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Snow falling at night">
                            </a>
                        </div>
                        <div class="card-description">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                        </div>
                    </div>
                    
                   <?php }
                    wp_reset_query(); ?> 
        </section>


        <h2 class="section-heading">All Activities</h2>


        <section>

            <?php 
                $args = array(
                    'post_type' => 'activity',
                    'posts_per_page' => 2,
                );

                $activities = new WP_Query($args);

                while ($activities->have_posts()) {
                    $activities->the_post();
                
                    ?>
                    <div class="card">
                        <div class="card-img">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Snow falling at night">
                            </a>
                        </div>
                        <div class="card-description">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                        </div>
                    </div>
                    
                   <?php }
                    wp_reset_query(); ?> 
        </section>
        
        <h2 class="section-heading">Source Code</h2>

        <section class="section-source">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed laudantium quas saepe maiores, placeat fugiat repudiandae autem perferendis praesentium quod modi error quibusdam odio, sequi doloribus perspiciatis cupiditate nemo similique!\
            </p>
            <a href="#" class="btn-readmore">GitHub Profile</a>
        </section>
<?php get_footer()?>