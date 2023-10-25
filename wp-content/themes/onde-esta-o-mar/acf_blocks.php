<?php

function registerOneBlock($code, $title, $keywords) {

    acf_register_block_type(array(
        'name' => $code,
        'title' => __($title),
        'description' => __($title),
        'render_template' => 'blocks/' . $code . '.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => $keywords,

    ));
}

function register_acf_block_types() {
    registerOneBlock('teste','teste',['global']);
}

if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}