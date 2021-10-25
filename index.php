<?php include('./includes/config.php') ?>
<?php include('./includes/fetch.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./static/css/style.css" />
    <title>Ecom | Products</title>
</head>

<body>
    <nav>
        <div class="heading">
            <a href="index.php"><h2>Products</h2></a>
            <span>Ecommerce / Products</span>
        </div>
        <div>
            <button class="import"><i class="bi bi-download"></i> Import</button><button class="filter"><i
                    class="bi bi-funnel"></i> Filter</button><button class="download-report">
                <i class="bi bi-cloud-download"> </i> Download Report
            </button>
        </div>
    </nav>
    <div class="wrapper">
        <div class="card-container">
            <?php
            foreach ($products as $row) { ?>
            <div class="card">
                <img src="./static/images/<?php echo $row["main_image"] ?>" alt="" />
                <p><?php echo $row["name"] ?></p>
                <p class="price">$<?php echo $row["price"] ?></p>
            </div>
            <?php } ?>
        </div>
        <div class="right-menu ">
            <div class="search-box">
                <input type="text" placeholder="Search ..." /> <button>Search</button>
            </div>
            <div class="categories-wrapper">
                <h3>Categories</h3>
                <hr />
                <form action="index.php" method="POST" id="form">
                    <div class="category">
                        <span>Mens</span>
                        <select name="mens">
                            <option value="">All categories</option>
                            <option value="men-Foot Wear">Foot Wear</option>
                            <option value="men-Top Wear">Top Wear</option>
                            <option value="men-Bottom Wear">Bottom Wear</option>
                            <option value="men-Men's Groming">Men's Groming</option>
                            <option value="men-Accessories">Accessories</option>
                        </select>
                    </div>
                    <div class="category">
                        <span>Women</span><select name="women">
                            <option value="">All categories</option>
                            <option value="women-Western Wear">Western Wear</option>
                            <option value="women-Top Wear">Top Wear</option>
                            <option value="women-Bottom Wear">Bottom Wear</option>
                            <option value="women-Beauty Groming">Beauty Groming</option>
                            <option value="women-Accessories">Accessories</option>
                        </select>
                    </div>
                    <div class="category">
                        <span>Baby & Kids</span><select name="baby_and_kids">
                            <option value="">All categories</option>
                            <option value="Boys Clothing">Boys Clothing</option>
                            <option value="Girls Clothing">Girls Clothing</option>
                            <option value="Toys">Toys</option>
                            <option value="Baby Care">Baby Care</option>
                            <option value="Kids Footware">Kids Footware</option>
                        </select>
                    </div>
                    <div class="category">
                        <span>Electronics</span><select name="electronics">
                            <option value="">All categories</option>
                            <option value="Mobiles">Mobiles</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Gaming & Accessories">Gaming & Accessories</option>
                            <option value="Health Care Appliances">Health Care Appliances</option>
                        </select>
                    </div>
                    <div class="category">
                        <span>Sport,Books & More</span>
                        <select name="sports_books_more">
                            <option value="">All categories</option>
                            <option value="Books">Books</option>
                            <option value="Gaming">Gaming</option>
                            <option value="Music">Music</option>
                            <option value="Excersice & Fitness">Excersice & Fitness</option>
                        </select>
                    </div>
                    <div class="prices">
                        <p>Price</p>
                        <input type="radio" id="under-25" name="price" value="0-25" />
                        <label for="0-25">Under $25</label><br />
                        <input type="radio" id="25-50" name="price" value="25-50" />
                        <label for="25-50">$25 to $50</label><br />
                        <input type="radio" id="50-100" name="price" value="50-100" />
                        <label for="50-100">50$ to $100</label><br />
                        <input type="radio" id="other" name="price" value="Other" class="other"/>
                        <label for="other">Other (Specify)</label><br /><br />
                     
                </div>
                <button class="apply-filter" name="apply-filter" disabled>Apply Filter</button>
            </form>
        </div>
    </div>
    <script src="./static/js/script.js"></script>
</body>

</html>