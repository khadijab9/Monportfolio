<?php get_header(); ?>




<section id="hero">

    <img class="image-hero" src="<?php echo get_template_directory_uri() . '/assets/images/travail.jpg'; ?>">
    <h1>
        Je suis Khadija Bidari, <br> Developpeuse Wordpress
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
            Intéressée depuis de nombreuses années par les métiers du web, j'ai décidé de me lancer dans la formation Developpeur Wordpress proposé par OpenClassroom.
            J'ai pu acquérir des connaissances approfondies dans le langage web notamment en HTML, Javascript, CSS et PHP ainsi que de l'utilisation avancée du CMS WordPress.
            Mon parcours m'a permis de travailler sur divers projets qui m'ont permis de simuler une expérience en entreprise.
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


<section id="competence">
    <div class="container-competence">
        <span class="spanCompetence"> Mes compétences </span>
        <h2 class="title-h2">
            Compétences
        </h2>
        <hr class="borderBottom">

        <div class="container-skills">
            <div class="skilss">
                <div class="langage-div">
                    <h3> Langage Web</h3>
                    <p>HTML</p>
                    <div class="bar">
                        <div class="bar-inner" data-percent="70%"></div>
                    </div>
                    <p>CSS</p>
                    <div class="bar">
                        <div class="bar-inner" data-percent="70%"></div>
                    </div>
                    <p>PHP</p>
                    <div class="bar">
                        <div class="bar-inner" data-percent="70%"></div>
                    </div>
                    <p>JAVASCRIPT</p>
                    <div class="bar">
                        <div class="bar-inner" data-percent="70%"></div>
                    </div>
                </div>
                <div class="library">
                    <h3>Librairie et CMS</h3>
                    <p>WORDPRESS</p>
                    <div class="bar">
                        <div class="bar-inner" data-percent="70%"></div>
                    </div>
                    <p>JQUERY</p>
                    <div class="bar">
                        <div class="bar-inner" data-percent="70%"></div>
                    </div>

                </div>


            </div>

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
        <p>
            Vous avez un projet ? N'hésitez pas à me contacter
        </p>

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