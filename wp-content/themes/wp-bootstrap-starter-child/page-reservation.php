<?php
/**
 * Template Name: Reservation Template
 **/

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-12">
		<main id="main" class="site-main row justify-content-center" role="main">

        <?php
            $query = new WP_Query( array('post_type' => 'reservation') );
            while ( $query->have_posts() ) : $query->the_post(); ?>
                <div data-aos="fade-right" class="col-12">
                    <h3 class="pb-3">
                        <p class="gen-container">
                            <span class="gen-info">Ouvert: </span>
                            <span class="gen-details"><?php the_field('reservation'); ?> </span>
                        </p>
                    </h3>
                </div>
            <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
        <form data-aos="fade-up" class="col-lg-6 card p-lg-5">
            <fieldset>
                <legend> Reservations:</legend>
            </fieldset>
            <div class="form-group">
                <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Prénom" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                <small id="emailHelp" class="form-text text-muted">Nous n'allions jamais partager votre email avec les autres.</small>
            </div>
            <div class="form-group">
                <label for="dateReservation">Date de réservation:</label>
                <input class="form-control" type="date" name="dateReservation" id="dateReservation" required>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Validez">
            </div>
        </form>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
