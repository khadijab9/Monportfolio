<?php get_header(); ?>




<section id="hero">

    <img class="image-hero" src="<?php  echo get_template_directory_uri() . '/assets/images/travail.jpg'; ?>">
    <h1>
        Bienvenue dans mon Porftolio, <br>je suis Khadija Bidari, <br> Developpeuse Wordpress
    </h1>

</section>



<section id="presentation">

    <div class="container-presentation">

    <span class="spanbanckground1"> A PROPOS DE MOI </span>
        <h2 class="title-h2">
            PRÉSENTATION

        </h2>

        <hr class="borderBottom">
        <p class="paragraphe">
            Intérressée depuis de nombreuses années par les métiers du web, j'ai décidé de me lancer dans la formation Developpeur Wordpress proposé par OpenClassroom.
            Ayant obtenu le diplôme à ce jour, j'ai pu acquérir des connaissance approfondi dans le langage web notamment en HTML, Javascript, CSS et PHP ainsi que le CMS Wordpress.
        </p>

    </div>
</section>


<section id="realisation">
 <div class="containerRealisation">
<span class="spanbanckground"> PORTFOLIO </span>
    <h2 class="title-h2">
        MES PROJETS
    </h2>

    <hr class="borderBottom">
    <!-- Créez une requête pour obtenir toutes les photos -->
    <?php
    //tableau qui contient les paramètres pour personnaliser la requête WordPress
    $args = array(
        'post_type' => 'projet', // Type de contenu personnalisé
        'posts_per_page' => -1, // Afficher toutes les photos
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => 1, // page actuelle à afficher
    );
    //exécute la requête WordPress avec les paramètres définis dans $args pour obtenir une liste de photos.
    $projets = new WP_Query($args); ?>

    <div class="containerProjet ">
        <?php
        // Vérifiez si des photos sont trouvées
        if ($projets->have_posts()) : ?>
            <!-- va parcourir chaque résultat de la requête -->
            <?php while ($projets->have_posts()) : $projets->the_post(); ?>
                <!-- va appelé le template post pour afficher les photos -->
                <?php get_template_part('template-parts/post') ?>
            <?php endwhile; ?>
            <!-- réinitialise les données de publication -->
            <?php wp_reset_postdata(); ?>
        <?php endif;  ?>
    </div>
</div>
</section>


<section id="contact">
    <div class="container-contact">
    <span class="spanContact"> CONTACT </span>
    <h2 class="title-h2">
        CONTACT
    </h2>
        <hr class="borderBottom">

        <div class="container-icon">
        <a href="mailto:bidari.khadija@hotmail.fr">
            <img class="icon1" src="<?php echo get_template_directory_uri() . '/assets/images/mail.png'; ?>">
        </a>
        <a href="https://github.com/khadijab9" target="_blank">
            <img class="icon2" src="<?php echo get_template_directory_uri() . '/assets/images/github-mark.png'; ?>">
        </a>
    </div>
    </div>


</section>

















<?php get_footer(); ?>