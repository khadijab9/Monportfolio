<?php get_header(); ?>



<div class="containerPost">
    <?php
    // verifie si des publications existent
    if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); // Commence la boucle pour parcourir les publications 
        ?>
            <div class="post-content">
                <div class="container-img">

                    <?php the_post_thumbnail('large', array(
                        'class' => 'photoPost',
                    )); ?>
                </div>
                <div class="post-meta">
                    <!-- Données meta de chaque post -->
                    <h2 class="post-title"><?php the_title() ?></h2>

                    <p class="meta"> Contexte : <?php echo get_post_meta(get_the_ID(), 'contexte', true); ?></p>
                    <p class="meta"> Description : <?php echo get_post_meta(get_the_ID(), 'description', true); ?></p>
                   <?php  $terms = get_terms('langage'); ?>
        <?php
                        if (!empty($terms)) {
                          echo '<p class="meta">Langages : ';
                          foreach ($terms as $term) {
                            echo $term->name . ' ';
                            $termFound = $term->slug;
                          }
                        }
                        echo '</p>'; ?>
                    <p class="meta date"> Lien : <?php echo get_post_meta(get_the_ID(), 'lien', true); ?></p>
                    <?php
                    $image_url = get_post_meta(get_the_ID(), 'image', true);
                    if (!empty($image_url)) {
                        echo '<img src="' . esc_url($image_url) . '" alt="Description de l\'image" />';
                    }
                    ?>

                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>



<?php get_footer(); ?>