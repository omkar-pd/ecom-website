<?php
if (isset($_POST['apply-filter'])) {

    $category = $_POST['women'];

    $conn = mysqli_connect('localhost', 'root', '', 'ecom');

    $query = "SELECT products.name FROM products
    INNER JOIN category ON products.category_id = category.category_id
    INNER JOIN subcategory ON subcategory.subcategoryid=products.subcategory_id
    WHERE subcategory.name IN ('Western Wear','Foot Wear')  AND products.price<100";

    // $query = "SELECT name from products where price BETWEEN 40 AND 100";
    $result = mysqli_query($conn, $query);
    echo (mysqli_error($conn));
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    print_r($products);
}