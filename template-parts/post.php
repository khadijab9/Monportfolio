<div id="overlay">

  <span class="overlay-link post-image">

    <?php the_post_thumbnail('medium', array(
      'class' => 'photoProjet',
    )) ?>

    <div class="overlay-effect"></div>
    <div class="btn-post">
    <a href="<?php the_permalink(); ?>" class="btn"> Voir</a>
    </div>

    <div class="text-overlay">
      <div class="textFormat">

        <?php echo the_title() ?>

      </div>

    </div>
  </span>

</div>