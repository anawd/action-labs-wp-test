<?php get_header(); ?>

    <section class="top-banner">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col">
                    <h1>Portal do Cliente</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="list-posts">
        <div class="container">
            <div class="row">
            <?php
                $args = array(
                    'posts_per_page'    =>  '6',
                    'post_type'         => 'post',
                    'order'             => 'ASC'
                );
            $loop = new WP_Query( $args );
            if($loop->have_posts()) : while($loop->have_posts()) : $loop->the_post(); $categories = get_the_category( $post_ID ); ?>
            
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="card-posts">
                        <div class="post-images">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                        </div>
                        <div class="tag-info">
                            <?php $i = 0; foreach ( $categories as $category ) {  if (++$i == 1) { echo $category->name; } break;  } ?>
                        </div>
                        <div class="post-info">
                            <h2><?php the_title(); ?></h2>
                            <p><?php echo $excerpt = get_the_excerpt();?> </p>
                            <a href="<?php print get_permalink($post->ID) ?>">LEIA MAIS »</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>