<div class="row">
    <div class="col-sm-offset-2 col-md-offset-2 col-sm-9 col-md-7">
        <h2 class="blog-post-title"><?php the_title(); ?></h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-9 col-md-7 col-md-push-2 col-sm-push-2">
        <div class="blog-post">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="col-sm-2 col-md-2 col-md-pull-7 col-sm-pull-9">
        <div class="blog-post-metadata">
            <?php the_author(); ?> <br>
            <?php echo get_the_date(); ?>
        </div>
    </div>
</div>

<hr>