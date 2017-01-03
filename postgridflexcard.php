<style>
    section {
        display: flex;
    }
    .column {
        margin: 10px;
        flex: 1 1 0;
    }
</style>

<div class="card">
    <div class="card-content">
        
        <?php if ( has_post_thumbnail() ) { ?>
            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="" class="img-responsive">
            <!-- <div class="copy"> -->
                <h2 class="title"><?php the_title(); ?></h2>
            <!-- </div> -->
        <?php } else { ?>
            <!-- <div class="copy"> -->
                <h2 class="title"><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
            <!-- </div> -->
        <?php } ?>
        
    </div>
</div>
