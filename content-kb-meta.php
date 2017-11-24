<?php
// Jyp 2017-11-24: override van de kennisbank metagegevens
// Op een later moment nader in te vullen. Opties worden aangestuurd via het options-framework.
// Inmiddels is de in WordPress ingebouwde customizer de aangewezen methode om dit soort opties in te stellen
// Voor nu zijn onderstaande instellingen hard in de template opgenomen
?>
<ul class="entry-meta clearfix">
    <li class="date">
        <strong><?php _e( 'Created: ', 'framework' ); ?></strong>
        <time datetime="<?php the_time('Y-m-d')?>"><?php the_time( get_option('date_format') ); ?></time>
    </li>
    <li class="author">
        <span>/</span>
        <strong><?php _e( 'Author: ', 'framework' ); ?></strong>
        <?php the_author(); ?>
    </li>
    <?php if ( comments_open() ){ ?>
    <li class="comments">
        <span>/</span>
        <strong><?php _e( 'Comments: ', 'framework' ); ?></strong>
        <?php comments_popup_link( __( '0', 'framework' ), __( '1', 'framework' ), __( '%', 'framework' ) ); ?>
    </li>
    <?php } ?>
</ul>
