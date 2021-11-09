<?php
global $conn;

use JetBrains\PhpStorm\Pure;
class fetch {
    function fetch_products(){
        global $conn;
        extract($_POST);
        $category=$this->create_category();
        if(!empty($price)) {
            $prices = explode("-", $price);
            $price1 = $prices[0];
            $price2 = $prices[1];
        }else{
            $price1 = 0;
            $price2 = 100000;
        }
    
        $query = "SELECT products.product_id,products.name,products.price,images.main_image FROM products
        INNER JOIN category ON products.category_id = category.category_id
        INNER JOIN subcategory ON subcategory.subcategoryid=products.subcategory_id
        INNER JOIN images ON images.p_id=products.product_id
        WHERE subcategory.name IN ('$category')  AND products.price BETWEEN $price1 AND $price2";
    
        $result = mysqli_query($conn, $query);
        echo (mysqli_error($conn));
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $products;
    }
    function create_category(){
    global $conn;
    extract($_POST);
    
    $cat = [$mens, $women, $baby_and_kids, $electronics, $sports_books_more];
    $category = join("','", $cat);
    if(empty($mens)&& empty($women) && empty($baby_and_kids) && empty($electronics)&& empty($sports_books_more)){
         
        $values=[];
        $query="SELECT subcategory.name from subcategory";
        $result = mysqli_query($conn, $query);
        $cat= mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach( $cat as $val){
        array_push($values, $val['name']);
        }
        $category = join("','", $values);
    }
    return $category;
    }
    function fetch_all(){
        global $conn;
        $query = "SELECT products.product_id,products.name,products.price,images.main_image FROM products
        INNER JOIN images ON images.p_id=products.product_id";
        $result = mysqli_query($conn, $query);
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $products;
    }
      function fetchDetails($product_id){
        global $conn;
        $query="SELECT products.*,images.*from products 
        INNER JOIN images ON products.product_id=images.p_id
        WHERE product_id=$product_id";
        $result=mysqli_query($conn, $query);
        $details=mysqli_fetch_all($result,MYSQLI_ASSOC);
        return $details;
    }
}

        // if (isset($_POST['apply-filter'])) {
        //     // $product=new fetch();
        //     // $products=$product->fetch_products();
      
        // }else{
        // $query = "SELECT products.product_id,products.name,products.price,images.main_image FROM products
        // INNER JOIN images ON images.p_id=products.product_id";
        // $result = mysqli_query($conn, $query);
        // $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // }
    // return $products;
  