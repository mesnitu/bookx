<?php

if (class_exists('AdminRequestSanitizer')) {

$sanitizer = AdminRequestSanitizer::getInstance();

$group = array(
    'author_description', 
    'publisher_description', 
    'series_description', 
    'imprint_description'
    );
$sanitizer->addSimpleSanitization('PRODUCT_DESC_REGEX', $group);

$group = array(
    'bookx_binding_id',
    'bookx_publisher_id', 
    'bookx_series_id', 
    'bookx_imprint_id',
    'bookx_printing_id',
    'blank_bookx_author_id',
    'blank_bookx_genre_id',
    'blank_bookx_author_type_id'
);

$sanitizer->addSimpleSanitization('CONVERT_INT', $group);

$group = array(
    'bookx_publisher_name', 
    'bookx_author_name', 
    'bookx_author_type_name', 
    'bookx_publisher_name', 
    'bookx_genre_name',
    'products_subtitle',
    'pages',
    'isbn',
    'volume',
    'size'
);
$sanitizer->addSimpleSanitization('WORDS_AND_SYMBOLS_REGEX', $group);

$group = array(
    'bookx_author_id' => array(
        'sanitizerType' => 'CONVERT_INT', 
        'method' => 'both',
        'pages' => array('new_product_preview', 'insert_product', 'new_product'), 
        ),
    'bookx_author_type_id' => array(
        'sanitizerType' => 'CONVERT_INT', 
        'method' => 'both',
        'pages' => array('new_product_preview', 'insert_product', 'new_product'), 
        ),
    'assigned_author_db_id' => array(
        'sanitizerType' => 'CONVERT_INT', 
        'method' => 'both',
        'pages' => array('new_product_preview', 'insert_product', 'new_product'), 
        ),
    'assigned_genre_db_id' => array(
        'sanitizerType' => 'CONVERT_INT', 
        'method' => 'both',
        'pages' => array('new_product_preview', 'insert_product', 'new_product'), 
        ),
    'bookx_genre_id' => array(
        'sanitizerType' => 'CONVERT_INT', 
        'method' => 'both',
        'pages' => array('new_product_preview', 'insert_product', 'new_product'), 
        )
    );

$sanitizer->addComplexSanitization($group);

}
