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
            <h2>Products</h2>
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
            <div class="card">
                <img src="./static/images/men2.jpg" alt="" />
                <p>Red T-Shirt</p>
                <p>₹1,999</p>
            </div>
            <div class="card">
                <img src="./static/images/men2.jpg" alt="" />
                <p>Red T-Shirt</p>
                <p>₹1,999</p>
            </div>
            <div class="card">
                <img src="./static/images/men2.jpg" alt="" />
                <p>Red T-Shirt</p>
                <p>₹1,999</p>
            </div>
            <div class="card">
                <img src="./static/images/men2.jpg" alt="" />
                <p>Red T-Shirt</p>
                <p>₹1,999</p>
            </div>
            <div class="card">
                <img src="./static/images/men2.jpg" alt="" />
                <p>Red T-Shirt</p>
                <p>₹1,999</p>
            </div>
            <div class="card">
                <img src="./static/images/men2.jpg" alt="" />
                <p>Red T-Shirt</p>
                <p>₹1,999</p>
            </div>
            <div class="card">
                <img src="./static/images/men2.jpg" alt="" />
                <p>Red T-Shirt</p>
                <p>₹1,999</p>
            </div>
            <div class="card">
                <img src="./static/images/men2.jpg" alt="" />
                <p>Red T-Shirt</p>
                <p>₹1,999</p>
            </div>
            <div class="card">
                <img src="./static/images/men2.jpg" alt="" />
                <p>Red T-Shirt</p>
                <p>₹1,999</p>
            </div>
        </div>
        <div class="right-menu">
            <div class="search-box">
                <input type="text" placeholder="Search ..." /> <button>Search</button>
            </div>
            <div class="categories-wrapper">
                <h3>Categories</h3>
                <hr />
                <form action="index.php" method="POST">
                    <div class="category">
                        <span>Mens</span>
                        <select name="mens">
                            <option value="">All categories</option>
                            <option value="Foot Wear">Foot Wear</option>
                        </select>
                    </div>
                    <div class="category">
                        <span>Women</span><select name="women">
                            <option value="">All categories</option>
                            <option value="Western Wear">Western Wear</option>
                            <option value="beauty groming">Beauty Groming</option>
                        </select>
                    </div>
                    <div class="category">
                        <span>Baby & Kids</span><select name="baby_and_kids">
                            <option value="">All categories</option>
                            <option value="toys">Toys</option>
                        </select>
                    </div>
                    <div class="category">
                        <span>Electronics</span><select name="electronics">
                            <option value="">All categories</option>
                            <option value="mobiles">Mobiles</option>
                        </select>
                    </div>
                    <div class="category">
                        <span>Sport,Books & More</span><select name="sports_books_more">
                            <option value="">All categories</option>
                            <option value="gaming">Gaming</option>
                        </select>
                    </div>
                    <div class="prices">
                        <p>Price</p>
                        <input type="radio" id="under-25" name="price" value="25" />
                        <label for="under-25">Under $25</label><br />
                        <input type="radio" id="25-50" name="price" value="25-50" />
                        <label for="25-50">$25 to $50</label><br />
                        <input type="radio" id="50-100" name="price" value="50-100" />
                        <label for="50-100">50$ to $100</label><br />
                        <input type="radio" id="other" name="price" value="Other" />
                        <label for="other">Other (Specify)</label><br /><br />
                    </div>
                    <button class="apply-filter" name="apply-filter">Apply Filter</button>
            </div>
            </form>
        </div>
    </div>
</body>

</html>