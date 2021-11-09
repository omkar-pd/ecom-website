<?php include('./includes/config.php') ?>
<?php include('./includes/fetch.php') ?>

<?php $product_id = $_GET['product_id'];
$product=new fetch();
 $details=$product->fetchDetails($product_id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./static/css/style.css" />
    <title>Ecom | Product Details</title>
</head>

<body>
    <nav>
        <div class="heading">
            <a href="index.php">
                <h2>Products</h2>
            </a>
            <span>Ecommerce / Products</span>
        </div>
        <div>
            <button class="import"><i class="bi bi-download"></i> Import</button><button class="filter"><i
                    class="bi bi-funnel"></i> Filter</button><button class="download-report">
                <i class="bi bi-cloud-download"> </i> Download Report
            </button>
        </div>
    </nav>
    <section class="product-details">
        <?php foreach($details as $row) {?>
        <div class="details-wrapper">
            <div class="images">
                <div class="image-thumbnails"><img src="./static/images/<?php echo $row['main_image']; ?> "
                        alt="image1"><img src="./static/images/<?php echo $row['image2']; ?>" alt="image2"><img
                        src="./static/images/<?php echo $row['image3']; ?>" alt="image3"><img
                        src="./static/images/<?php echo $row['image4']; ?>" alt="image4">
                </div>
                <div class="large-image-wrapper">
                    <img class="large-image" src="./static/images/<?php echo $row['main_image']; ?>" alt="image">
                    <div class="buttons-wrapper">
                        <button class="add-to-cart"><i class="bi bi-cart"></i>Add to cart</button>
                        <button class="buy-now"><i class="bi bi-wallet"></i>Buy Now</button>
                    </div>
                </div>
            </div>
            <div class="details">
                <h2 class="product-name"><?php echo $row['name']?></h2>
                <p class="product-price">Price : $ <?php echo $row['price']?> USD </p>
                <h4>Description</h4>
                <p class="product-desc"><?php echo $row['description']?></p>
                <label for="quantity">Quantity</label>
                <select name="quantity" id="">
                    <option value="1">1</option>
                    <option value="3">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <?php } ?>
        <div class="specifications">
            <table border="2">
                <tr>
                    <th>Category</th>
                    <td>Lorem ipsum dolor sit amet.</td>
                </tr>
                <tr>
                    <th>Brand</th>
                    <td>Color</td>
                </tr>
                <tr>
                    <th>Connections</th>
                    <td>Lorem ipsum dolor sit amet.</td>
                </tr>
                <tr>
                    <th>Warrenty Summary</th>
                    <td>Lorem ipsum dolor sit amet.</td>
                </tr>

            </table>
        </div>
    </section>
</body>
<script src="./static/js/script.js"></script>

</html>