
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $categories = get_the_category( $post_ID ); ?>

    <section class="interna-post">
    	<div class="container-fluid">
    		<div class="row">
        		<div class="banner-interna-post">
        		</div>
        	</div>
    	</div>
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col">
                    <div class="single-post">
                    	<div class="images-post">
                    		<img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="">
                    	</div>
                    	<span class="categoria">
                    		<?php $i = 0; foreach ( $categories as $category ) {  if (++$i == 1) { echo $category->name; } break;  } ?>
                    	</span>
                    	<div class="metas">
                    		<div class="date">
                    			<?php echo $post_date = get_the_date('j F, Y,');  ?>
                    		</div>
                    		<div class="tags">
                    			<?php

                                    $posttags = get_the_tags();
                                    if ($posttags) {
                                      foreach($posttags as $tag) {
                                        echo $tag->name . ' '; 
                                      }
                                    }            
                                ?>
                    		</div>
                    	</div>
                    	<h2><?php the_title(); ?></h2>
                    	<span class="author">Autor: <?php echo get_the_author(); ?></span>
                    	<?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>