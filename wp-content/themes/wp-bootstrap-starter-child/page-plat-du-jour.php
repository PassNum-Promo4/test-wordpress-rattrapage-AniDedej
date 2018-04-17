<?php
/**
 * Template Name: Acceuil Template
 **/

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-12">
		<main id="main" class="site-main row" role="main">
        <?php
            $query = new WP_Query( array('posts_per_page' => 1,'post_type' => 'plat-du-jour') );
            while ( $query->have_posts() ) : $query->the_post(); ?>
                <div data-aos="fade" class="col-12">
                    <h3>Notre spécialité du jour !</h3>
                    <div data-aos="fade" class="card p-5">
                        <div class="row">
                            <div data-aos="zoom-in" class="col-6">
                                <h2 class="text-center"><?php the_field('nom_plat_du_jour'); ?></h2>
                                <div data-aos="flip-left" class="card m-5">
                                    <div class="p-2">
                                        <span class="ingredient-title">Les ingrédients:</span> 
                                        <div class="ml-3 mt-1 ingredient-info"> <?php the_field('liste_ingredients_plat_du_jour') ?> </div>
                                    </div>
                                    <div class="p-2">
                                        <span class="prix-info">Prix: </span>
                                        <span class="prix-details"><?php the_field('prix_plat_du_jour'); ?> €</span>
                                    </div>
                                    <div class="p-2">
                                        <span class="categorie-title">Catégorie:</span>
                                        <span class="categorie-info"> <?php the_field('plat_du_jour_categorie') ?> </span>
                                    </div>
                                </div>
                            </div>
                            <div data-aos="fade-left" data-aos-duration="600" class="col-6 projectSingle-container">
                                <img class="img-fluid mb-2" src="<?php the_field('photo_plat_du_jour'); ?>" alt="Image du plat!" />
                            </div>
                        </div>
                    </div>
                </div>
            <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
