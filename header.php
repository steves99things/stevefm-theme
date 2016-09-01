<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Steve Carroll">

    <title>
        <?php echo get_bloginfo('name'); ?> &mdash;
        <?php echo get_bloginfo('description'); ?>
    </title>

    <script src="https://use.typekit.net/uqh7odo.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <?php wp_head(); ?>
</head>
<body>
    
    
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-2 col-md-offset-2 col-sm-10">
                    <h1><?php echo get_bloginfo('name') ?></h1>
                    <p><small><?php echo get_bloginfo('description') ?></small></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
