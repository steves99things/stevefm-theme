<?php
/*
Template Name: Post Grid
*/
?>

<?php get_header(); ?>

<div id="content" class="post-grid container-fluid">
    
    <div class="row">

        <?php 
            $args = array( 
                'order' => 'date',
                'posts_per_page' => '6' 
            );
            $posts = get_posts( $args );
            foreach ( $posts as $post ) :
                setup_postdata( $post );
                get_template_part('postgriditem');
            endforeach;
            wp_reset_postdata(); 
        ?>

    </div>


    <!-- post grid flex items -->
    <section>
        <?php 
            $args = array( 
                'order' => 'date',
                'posts_per_page' => '3' 
            );
            $posts = get_posts( $args );
            foreach ( $posts as $post ) :
                setup_postdata( $post );
                get_template_part('postgridflex');
            endforeach;
            wp_reset_postdata(); 
        ?>
    </section>

    <section>
        <?php 
            $args = array( 
                'order' => 'date',
                'posts_per_page' => '4' 
            );
            $posts = get_posts( $args );
            foreach ( $posts as $post ) :
                setup_postdata( $post );
                get_template_part('postgridflex');
            endforeach;
            wp_reset_postdata(); 
        ?>
    </section>

    <section>
        <?php 
            $args = array( 
                'order' => 'date',
                'posts_per_page' => '2' 
            );
            $posts = get_posts( $args );
            foreach ( $posts as $post ) :
                setup_postdata( $post );
                get_template_part('postgridflex');
            endforeach;
            wp_reset_postdata(); 
        ?>
    </section>

    <!-- post grid flex cards -->
    <div class="section whole30">
        <h2 class="section-title">Whole 30</h2>
        <section>
            <?php 
                $args = array( 
                    'order' => 'date',
                    'posts_per_page' => '3' 
                );
                $posts = get_posts( $args );
                foreach ( $posts as $post ) :
                    setup_postdata( $post );
                    get_template_part('postgridflexcard');
                endforeach;
                wp_reset_postdata(); 
            ?>
        </section>
    </div>

    <section>
        <?php 
            $args = array( 
                'order' => 'date',
                'posts_per_page' => '4' 
            );
            $posts = get_posts( $args );
            foreach ( $posts as $post ) :
                setup_postdata( $post );
                get_template_part('postgridflexcard');
            endforeach;
            wp_reset_postdata(); 
        ?>
    </section>

    <section>
        <?php 
            $args = array( 
                'order' => 'date',
                'posts_per_page' => '2' 
            );
            $posts = get_posts( $args );
            foreach ( $posts as $post ) :
                setup_postdata( $post );
                get_template_part('postgridflexcard');
            endforeach;
            wp_reset_postdata(); 
        ?>
    </section>
    
</div>

