<?php get_header(); ?>



<div class="containerPost">
    <?php
    // verifie si des publications existent
    if (have_posts()) : ?>

        <?php while (have_posts()) : the_post();
        ?>
            <div class="post-content">
                <div class="container-img">

                    <?php the_post_thumbnail('large', array(
                        'class' => 'photoPost',
                    )); ?>
                    <!-- navigation -->

                    <?php
                    // Récupére le post actuel
                    $current_post = get_post();
                    $previous_post = get_previous_post();
                    $next_post = get_next_post(); ?>

                    <?php if ($previous_post) {
                        // ds ce cas il extrait l'URL de l'image associé au post précédent
                        $previous_post_image_url = get_the_post_thumbnail_url($previous_post->ID, 'thumbnail');
                    }

                    if ($next_post) {
                        $next_post_image_url = get_the_post_thumbnail_url($next_post->ID, 'thumbnail');
                    } ?>

                    <div class="arrow">
                        <!-- Vérifie si un article précédent existe et s'il y a une image associée -->
                        <?php if ($previous_post && $previous_post_image_url) : ?>
                            <!-- Génère un lien vers le post précédent en utilisant l'URL du post précédent et de l'image  -->
                            <a href="<?php echo get_permalink($previous_post->ID); ?>" class="prev-arrow" data-image="<?php echo esc_url($previous_post_image_url); ?>">&larr;</a>
                        <?php endif; ?>

                        <?php if ($next_post && $next_post_image_url) : ?>
                            <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-arrow" data-image="<?php echo esc_url($next_post_image_url); ?>"> &rarr;</a>

                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="post-meta">
                    <!-- Données meta de chaque post -->
                    <h2 class="post-title"><?php the_title() ?></h2>

                    <p> <span class="meta">Contexte :</span> <?php echo get_post_meta(get_the_ID(), 'contexte', true); ?></p>
                    <p> <span class="meta">Description :</span> <?php echo get_post_meta(get_the_ID(), 'description', true); ?></p>

                    <?php $terms = get_the_terms(get_the_ID(), 'technologie'); ?>
                    <?php
                    if (!empty($terms)) {
                        echo ' <p> <span class="meta">Langages utilisés et CMS : </span> ';
                        foreach ($terms as $term) {
                            echo $term->name . ' ';
                            $termFound = $term->slug;
                        }
                    }
                    echo '</p>'; ?>
                    <p class="lien"> <span class="meta">Lien : </span> <?php echo get_post_meta(get_the_ID(), 'lien', true); ?></p>

                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>







<?php get_footer(); ?>