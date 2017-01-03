<div class="col-sm-4 col-md-3">
    <div class="post-grid-item">
        
        <?php if ( has_post_thumbnail() ) { ?>
            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="" class="img-responsive">
            <div class="copy">
                <h2 class="post-grid-title"><?php the_title(); ?></h2>
            </div>
        <?php } else { ?>
            <div class="copy">
                <h2 class="post-grid-title"><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
            </div>
        <?php } ?>
        
    </div>
</div>