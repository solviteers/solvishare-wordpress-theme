<?php get_header(); ?>

<?php
    // Get position and location of sidebar
    // JYP 2018-01-21: omgebouwd naar customizer, default off
    $st_kb_sidebar_position = get_theme_mod('knowledgebase_index_page_sidebar_position_setting', 'off');

    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
?>

<?php get_template_part( 'page-header', 'kb' ); ?>

<div id="primary" class="sidebar-<?php echo $st_kb_sidebar_position; ?> clearfix">
    <div class="ht-container">
        <section id="content" role="main">
        <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <?php
        /* Include the Post-Format-specific template for the content.
        * If you want to overload this in a child theme then include a file
        * called content-___.php (where ___ is the Post Format name) and that will be used instead.
        */
        get_template_part( 'content-kb', get_post_format() );
        ?>

        <?php endwhile; ?>
        <?php st_content_nav( 'nav-below' ); ?>
        <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>
        </section><!-- /#content -->
    <?php if ($st_kb_sidebar_position != 'off') {
        get_sidebar('kb');
    }
    ?>

    </div>
</div><!-- /#primary -->

<?php get_footer(); ?>
