<?php

    /**
     * File met settings & controlls voor de knowledgebase opties
     * Elke instelling bestaat uit een combinatie van een setting en een controll
     * De setting bevat de eigenschappen van de instelling zoals id, type en default
     * De controll bevat de eigenschappen voor de visuele (UI) weergave van de intelling in de customizer
     *
     * Opties in deze file:
     * 1 Positie sidebar op index-pagina's
     * 2 Positie sidebar op single-pagina's
     */

    // 1. Setting: knowledgebase index sidebar position
    $wp_customize->add_setting( 'knowledgebase_index_page_sidebar_position_setting', array(
        'type' => 'theme_mod', // or 'option', options are applied regardless of active theme
        'capability' => 'edit_theme_options', // default: edit_theme_options. Rechten die een gebruiker moet hebben om wijzigingen door te voeren
        'default' => 'off',
        'transport' => 'refresh', // or postMessage for live preview
        // 'sanitize_callback' => '',
        // 'sanitize_js_callback' => '', // Basically to_json.
    ) );

    // 1. UI Control: knowledgebase index sidebar position
    $wp_customize->add_control('knowledgebase_index_page_sidebar_position_control', array(
            'label'    => __( 'Sidebar position index pages', 'supportdesk-child' ),
            'description'    => __( 'De positie van de sidebar op index pagina\'s, dit zijn alle pagina\'s behalve de single weergave', 'supportdesk-child' ),
            'section'  => 'knowledgebase_options',
            'settings' => 'knowledgebase_index_page_sidebar_position_setting',
            'type'     => 'select',
            'choices'  => array(
                'left'  => 'links',
                'right' => 'rechts',
                'off' => 'geen'
            )
        )
    );

    // 2. Setting: knowledgebase single_page sidebar position
    $wp_customize->add_setting( 'knowledgebase_single_page_sidebar_position_setting', array(
        'type' => 'theme_mod', // or 'option', options are applied regardless of active theme
        'capability' => 'edit_theme_options', // default: edit_theme_options. Rechten die een gebruiker moet hebben om wijzigingen door te voeren
        'default' => 'right',
        'transport' => 'refresh', // or postMessage for live preview
        // 'sanitize_callback' => '',
        // 'sanitize_js_callback' => '', // Basically to_json.
    ) );

    // 2. UI Control: knowledgebase single_page sidebar position
    $wp_customize->add_control('knowledgebase_single_page_sidebar_position_control', array(
            'label'    => __( 'Sidebar position single pages', 'supportdesk-child' ),
            'description'    => __( 'De positie van de sidebar op single_page pagina\'s, dit zijn alle pagina\'s behalve de single weergave', 'supportdesk-child' ),
            'section'  => 'knowledgebase_options',
            'settings' => 'knowledgebase_single_page_sidebar_position_setting',
            'type'     => 'select',
            'choices'  => array(
                'left'  => 'links',
                'right' => 'rechts',
                'off' => 'geen'
            )
        )
    );
