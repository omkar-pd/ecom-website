<?php

use JetBrains\PhpStorm\Pure;

$conn = mysqli_connect('localhost', 'root', '', 'ecom');
if (isset($_POST['apply-filter'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'ecom');
    extract($_POST);
    $cat = [$mens, $women, $baby_and_kids, $electronics, $sports_books_more];
    $category = join("','", $cat);
    if (!empty($price)) {
        $prices = explode("-", $price);
        $price1 = $prices[0];
        $price2 = $prices[1];
    } else {
        $price1 = 0;
        $price2 = 100000;
    }
    $query = "SELECT products.product_id,products.name,products.price,images.main_image FROM products
    INNER JOIN category ON products.category_id = category.category_id
    INNER JOIN subcategory ON subcategory.subcategoryid=products.subcategory_id
    INNER JOIN images ON images.p_id=products.product_id
     WHERE subcategory.name IN ('$category')  AND products.price BETWEEN $price1 AND $price2";

    // $query = "SELECT name from products where price BETWEEN 40 AND 100";
    $result = mysqli_query($conn, $query);
    echo (mysqli_error($conn));
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    print_r($products);
    // INSERT INTO products VALUES(7,4,17,"Apple iPad Pro 3rd Gen 2021 27.96 cm, tablet 8 GB RAM, 128 GB","1250","Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente tempore dolor exercitationem deleniti sed odit esse tenetur ipsam provident. Maiores aliquid, libero est sequi totam fuga quia quam molestias nemo cumque aperiam blanditiis reprehenderit labore! Quibusdam, reiciendis. Rem alias veniam libero possimus sapiente ea. Omnis veritatis similique esse adipisci.");


} else {
    $query = "SELECT products.product_id,products.name,products.price,images.main_image FROM products
    INNER JOIN images ON images.p_id=products.product_id";
    $result = mysqli_query($conn, $query);
    echo (mysqli_error($conn));
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $products;
}