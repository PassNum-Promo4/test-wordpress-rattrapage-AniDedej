<?php
/**
 * Template Name: Plat Template
 **/

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-12">
		<main id="main" class="site-main row" role="main">

        <?php
            $query = new WP_Query( array('post_type' => 'plat') );
            while ( $query->have_posts() ) : $query->the_post(); ?>
                <div data-aos="zoom-out-up" class="col-md-6 col-lg-3 pb-2">
                    <div class="card p-3">
                        <h3 class="plat-title--center">
                            <a id="thePermalink" class="plat-title" href=" <?php the_permalink() ?>">
                                <?php the_field('nom_plat');?>
                            </a>
                        </h3>
                        <p class="prix-container"> <span class="prix-info">Prix: </span> <span class="prix-details"><?php the_field('prix_plat'); ?> €</span> </p>
                    </div>
                </div>
            <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
