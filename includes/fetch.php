<?php

use JetBrains\PhpStorm\Pure;

if (isset($_POST['apply-filter'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'ecom');
    extract($_POST);
    $cat = [$mens, $women, $baby_and_kids, $electronics, $sports_books_more];
    $category = join("','", $cat);
    $prices = explode("-", $price);
    $price1 = $prices[0];
    $price2 = $prices[1];

    $query = "SELECT products.name FROM products
    INNER JOIN category ON products.category_id = category.category_id
    INNER JOIN subcategory ON subcategory.subcategoryid=products.subcategory_id
    WHERE subcategory.name IN ('$category')  AND products.price BETWEEN $price1 AND $price2";

    // $query = "SELECT name from products where price BETWEEN 40 AND 100";
    $result = mysqli_query($conn, $query);
    echo (mysqli_error($conn));
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    print_r($products);
}