<?php

// die('hi all, jyp here');
// require_once( __DIR__ . '/customizer-wrapper.php');
// supportdesk-child

/**
 * All our sections, settings, and controls will be added here
 * @param  [type] $wp_customize [description]
 */
function supportdesk_child_customize_register( $wp_customize ) {

    // Customizer section voor de knowledgebase opties
    $wp_customize->add_section( 'knowledgebase_options' , array(
            'title'      => __( 'Knowledgebase Options', 'supportdesk-child' ),
            'priority'   => 200,
        )
    );

    // Inladen van de knowledgebase settings & controls
    // Zonder settings & controls wordt een sectie niet getoond
    require_once( __DIR__ . '/knowledgebase_options.php');

    // Customizer section voor de forum opties
    // $wp_customize->add_section( 'forum_options' , array(
    //         'title'      => __( 'Forum Options', 'supportdesk-child' ),
    //         'priority'   => 210,
    //     )
    // );

}

add_action( 'customize_register', 'supportdesk_child_customize_register' );
