<?php get_header(); ?>

<?php
    // Get position and location of sidebar
    // JYP 2018-01-21: omgebouwd naar customizer, default right
    $st_kb_sidebar_position = get_theme_mod('knowledgebase_single_page_sidebar_position_setting', 'right');
?>

<?php get_template_part( 'page-header', 'kb' );     ?>

<!-- #primary -->
<div id="primary" class="sidebar-<?php echo $st_kb_sidebar_position; ?> clearfix">
    <div class="ht-container">
        <!-- #content -->
        <section id="content" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php st_set_post_views(get_the_ID()); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
                <div class="entry-header">
                    <h1 class="entry-title">
                        <?php the_title(); ?>
                    </h1>
                    <?php get_template_part( 'content-kb', 'meta' ); ?>
                </div><!-- /.entry-header -->

                <div class="entry-content clearfix">
                    <?php the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'framework' ), 'after' => '</div>' ) ); ?>
                </div><!-- ./entry-content -->

                <?php if (is_single() && has_term( '', 'st_kb_tag' )) { ?>
                <div class="tags">
                    <?php the_terms( get_the_ID(),'st_kb_tag', _e('Tagged:', 'framework') , ''); ?>
                </div>
                <?php } ?>
            </article>
        <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
        comments_template( '', true );
        ?>

        <?php endwhile; // end of the loop. ?>

        </section>
        <!-- #content -->

        <?php if ($st_kb_sidebar_position != 'off') {
            get_sidebar('kb');
        } ?>

    </div>
</div>
<!-- /#primary -->

<?php get_footer(); ?>
