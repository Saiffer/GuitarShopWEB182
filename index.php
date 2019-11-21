<?php
require_once('util/main.php');
require_once('util/tags.php');
require_once('model/database.php');
require_once('model/product_db.php');
require_once('model/category_db.php');

// Get all categories
$categories = get_categories();

// Set the featured product IDs in an array
$product_ids = get_featured_products();

// Note: You could also store a list of featured products in the database

// Get an array of featured products from the database
$products = array();
foreach ($products as $product_id) {
    $product = get_product($product_id);
    $products[] = $product;   // add product to array
}



// Display the home page
include('home_view.php');
?>