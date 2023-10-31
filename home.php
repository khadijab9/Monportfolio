<?php /* Template Name: Index
*/ ?>
<?php get_header(); ?>




<section id="hero">

    <img class="image-hero" src="<?php echo get_template_directory_uri() . '/assets/images/travail.jpg'; ?>">
    <h1>
        Je suis Khadija Bidari, <br> Developpeuse Wordpress
    </h1>

</section>


<section id="presentation">

    <div class="container-presentation">

        <span class="spanbanckground1"> PRÉSENTATION</span>
        <h2 class="title-h2">
            A PROPOS

        </h2>

        <hr class="borderBottom">
        <p class="paragraphe">
        Passionnée du web depuis de nombreuses années, j'ai décidé de me 
        lancer dans une formation de développeur WordPress chez OpenClassroom. 
        Cette expérience m'a valu l'acquisition de compétences variées dans le domaine 
        de la création de sites internet,
         allant de la création de thèmes personnalisés à l'utilisation de JavaScript pour dynamiser un site web, 
         en passant par la maîtrise de HTML pour structurer le contenu, de CSS pour la mise en forme, 
         et de PHP pour des fonctionnalités avancées. De plus, j'ai exploré des outils puissants tels qu'Elementor
          pour améliorer la conception et l'expérience utilisateur. 
          Forte de ces capacités, je suis prête à relever de nouveaux défis passionnants dans le monde du développement web.



            
        </p>

    </div>
</section>


<section id="realisation">
    <div class="containerRealisation">
        <span class="spanbanckground"> PORTFOLIO </span>
        <h2 class="title-h2">
            PROJETS
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
        <span class="spanCompetence"> Compétences </span>
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
                      
                        <div class="bar-inner" style="--percent: 75;">
                        <p>85%</p> 
                    </div>

                    </div>
                    <p>CSS</p>
                    <div class="bar">
                        <div class="bar-inner" style="--percent: 75;">
                        <p>85%</p>
                    </div>
                    </div>
                    <p>PHP</p>
                    <div class="bar">
                        <div class="bar-inner" style="--percent: 50;">
                        <p>50%</p>
                    </div>
                    </div>
                    <p>JAVASCRIPT</p>
                    <div class="bar">
                        <div class="bar-inner" style="--percent: 60;">
                        <p>60%</p>
                    </div>
                    </div>
                </div>
                <div class="library">
                    <h3>Librairie et CMS</h3>
                    <p>WORDPRESS</p>
                    <div class="bar">
                        <div class="bar-inner" style="--percent: 80;">
                        <p>80%</p>
                    </div>
                    </div>
                    <p>JQUERY</p>
                    <div class="bar">
                        <div class="bar-inner" style="--percent: 40;">
                        <p>50%</p>
                    </div>
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