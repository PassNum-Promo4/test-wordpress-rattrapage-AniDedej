<?php
    if (!function_exists("get_field")) return;
?>

<div data-aos="fade" class="card p-5">
    <div class="row">
        <div data-aos="zoom-in" class="col-6">
            <h2 class="text-center"><?php the_field('nom_plat'); ?></h2>
            <div data-aos="flip-left" class="card m-5">
                <div class="p-2">
                    <span class="ingredient-title">Les ingrédients:</span> 
                    <div class="ml-3 mt-1 ingredient-info"> <?php the_field('liste_ingredients') ?> </div>
                </div>
                <div class="p-2">
                    <span class="prix-info">Prix: </span>
                    <span class="prix-details"><?php the_field('prix_plat'); ?> €</span>
                </div>
                <div class="p-2">
                    <span class="categorie-title">Catégorie:</span>
                    <span class="categorie-info"> <?php the_field('plat_categorie') ?> </span>
                </div>
            </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="600" class="col-6 projectSingle-container">
            <img class="img-fluid mb-2" src="<?php the_field('photo_plat'); ?>" alt="Image du plat!" />
        </div>
    </div>
</div>