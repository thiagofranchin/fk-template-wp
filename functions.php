<?php

// Função para carregamento dos scripts
    function carrega_scripts(){
        //wp_enqueue_style: Chama os estilos.css na ordem passada
            /* 
            (
                id_arquivo, 
                caminho, 
                escolher arquivo que deva carregar antes, 
                versao da folha de estilo, versão(é contatenada junto ao nome do arquivo, 
                tipo de media('print', 'screen', 'all')
            ),           
            wp_enqueue_script: true é para carregar os scripts no final da página
            */
        wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.min.css', array(), '1.0', 'all' );    
        wp_enqueue_script( 'tether', get_template_directory_uri() . '/node_modules/tether/dist/js/tether.min.js', array(), null, true );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'), null, true );
        wp_enqueue_script( 'template', get_template_directory_uri() . '/js/template.js', array(), null, true );
    }
    add_action( 'wp_enqueue_scripts', 'carrega_scripts' );

// Função para menus
    register_nav_menus( 
        array(
            'menu_principal' => 'Menu Principal',
            'menu_rodape' => 'Menu Rodapé',
        ) 
    );

    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails'); // Imagem destacada
    add_theme_support('post-formats', array('video', 'image')); // https://codex.wordpress.org/Post_Formats

    if(function_exists('register_sidebar')){
        register_sidebar( 
            array(
                'name'          => 'Barra Lateral 1',
                'id'            => 'sidebar-1',
                'description'   => 'Barra lateral da pág home',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title' => '<h2 class="widget-titulo">',
                'after_title'  => '</h2>',
            )
        );
        register_sidebar( 
            array(
                'name'          => 'Barra Lateral 2',
                'id'            => 'sidebar-2',
                'description'   => 'Barra lateral da pág home',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget'  => '</div>',
                'before_title' => '<h2 class="widget-titulo">',
                'after_title'  => '</h2>',
            )
        );
    }