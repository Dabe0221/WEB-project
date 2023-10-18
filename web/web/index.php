<!DOCTYPE html>
<html>
<head>
<style>
    /* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}
   body {
    max-width: 100%; /* Use 100% width to fit the entire viewport */
    margin: 0;
    padding: 0;
    background-color: black; /* Set the background color to black */
    background-image: url('b.jpg'); /* Add your background image URL here */
    background-size: cover; /* Cover the entire background area */
    background-repeat: no-repeat; /* Prevent background image from repeating */
    background-attachment: fixed; /* Fixed background so it doesn't scroll with the content */
    color: white; /* Set text color to white */
}
    .header-image {
        max-width: 600px; 
        max-height: 300px;
    }

    header {
        background-color: Black; 
        padding: 20px;
        margin-bottom: 20px;
        text-align: center;
    }

    .header-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    footer {
        background-color: black;
        padding: 20px;
        margin-top: 20px;
        text-align: center;
    }

    .footer-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 20px;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 20px;
    }

    .products ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 0;
    }

    .products li {
        flex-basis: calc(25% - 20px); /* Limit each row to 4 columns */
        margin-bottom: 20px;
        background-color: #f9f9f9;
        padding: 20px;
        text-align: center;
    }

.product-box {
    width: 200px; /* Set a fixed width for the product box */
    height: 300px; /* Set a fixed height for the product box */
    margin: 10px; /* Adjust spacing between product boxes */
    display: inline-block;
    text-align: center;
    cursor: pointer;
    transition: transform 0.2s; /* Add a hover effect */
    overflow: hidden; /* Hide content that exceeds the dimensions */
}

.product {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

.product img {
    width: 100%; /* Resize the image to fit the container width */
    height: 100%; /* Automatically adjust the image height to maintain aspect ratio */
    max-width: 100%; /* Limit image width to 100% of the container */
    max-height: 100%; /* Limit image height to 100% of the container */
    object-fit: contain; /* Maintain aspect ratio and fit within the container */
}

    .scrollable-row {
    max-height: 200px;
    overflow: hidden;
    border: 1px solid red;
    transition: max-height 0.5s ease;
    position: relative;
    margin-bottom: 20px;
}

    .scrollable-row:hover {
        max-height: 400px;
        overflow-y: auto;
    }

    .label {
        background-color: red;
        color: black;
        text-align: center;
        padding: 5px;
        position: sticky;
        top: 0;
        z-index: 1;
        font-family: 'Cosmic Octo', sans-serif; /* Set font for labels */
    }
    .category-nav {
        background-color: Black;
        padding: 10px;
        text-align: center;
    }

    .category-nav ul {
        list-style-type: none;
        padding: 0;
    }

    .category-nav ul li {
        display: inline;
        margin-right: 20px;
        cursor: pointer;
        color: white;
    }

    .category-nav ul li:hover {
        text-decoration: underline;
    }
    .productsRow {
    max-width: 100%; 
    max-height: 100%;
    }
    .category-button {
        background-color: red;
        padding: 5px 10px;
        border-radius: 5px;
        color: white;
        cursor: pointer;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/fontawesome.min.css" integrity="sha384-r2plFp5f8rtrSu7q8dLZus0W9dCGy8h6ME5qE4/1QexqCWup2upKf5A5NvKTf5D4w" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopee-like Store</title>
</head>
<body>
    <header>
        <img src="Header.png" alt="Logo Placeholder" style="max-width: 300px; max-height: 150px;">
        <div class="header-content">
            <nav>
                <ul>
                    <li><a href="index.php"><img src="Home.png" alt="Home" width="32" height="32"></a></li>
                    <li><a href="Login.php"><img src="user.png" alt="Account" width="32" height="32"></a></li>
                    <li><a href="checkout.php"><img src="cart.png" alt="Cart" width="32" height="32"></a></li>
                    <li><a href="checkoutpage.php"><img src="money.png" alt="Checkout" width="35" height="32"></a></li>
                </ul>
            </nav>
            <nav class="category-nav">
            <ul>
                <!-- Red buttons for categories -->
                <li class="category-button" data-category="PC">PC</li>
                <li class="category-button" data-category="Laptop">Laptop</li>
                <li class="category-button" data-category="Phones">Phones</li>
            </ul>
        </nav>
        </div>
    </header>
    <main>
        <div class="product-container">
            <div class="scrollable-row">
                <div class="label">Best Sellers</div>
                <div class="products">
                    <?php
                    $productsRow1 = [
                        ['id' => 1, 'name' => 'Product 1', 'price' => 19.99, 'image' => 'Temp.png'],
                    ['id' => 2, 'name' => 'Product 2', 'price' => 29.99, 'image' => 'Temp.png'],
                    ['id' => 3, 'name' => 'Product 3', 'price' => 39.99, 'image' => 'Temp.png'],
                    ['id' => 4, 'name' => 'Product 4', 'price' => 49.99, 'image' => 'Temp.png'],
                    ['id' => 5, 'name' => 'Product 5', 'price' => 59.99, 'image' => 'Temp.png'],
                    ['id' => 6, 'name' => 'Product 6', 'price' => 69.99, 'image' => 'Temp.png'],
                    ['id' => 7, 'name' => 'Product 7', 'price' => 79.99, 'image' => 'Temp.png'],
                    ['id' => 1, 'name' => 'Product 1', 'price' => 19.99, 'image' => 'Temp.png'],
                    ['id' => 2, 'name' => 'Product 2', 'price' => 29.99, 'image' => 'Temp.png'],
                    ['id' => 3, 'name' => 'Product 3', 'price' => 39.99, 'image' => 'Temp.png'],
                    ['id' => 4, 'name' => 'Product 4', 'price' => 49.99, 'image' => 'Temp.png'],
                    ['id' => 5, 'name' => 'Product 5', 'price' => 59.99, 'image' => 'Temp.png'],
                    ['id' => 6, 'name' => 'Product 6', 'price' => 69.99, 'image' => 'Temp.png'],
                    ['id' => 7, 'name' => 'Product 7', 'price' => 79.99, 'image' => 'Temp.png'],
                    ];

                    foreach ($productsRow1 as $product) {
                        echo '<a href="product_details.php?id=' . $product['id'] . '">'; // Add anchor tag
                        echo '<div class="product-box">';
                        echo '<div class="product">';
                        echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                        echo '<h2>' . $product['name'] . '</h2>';
                        echo '<p>Price: $' . $product['price'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</a>'; // Close anchor tag
                    }
                    ?>
                </div>
            </div>

        <div class="scrollable-row">
            <div class="label">Best Rates</div>
            <div class="products">
                <?php
                $productsRow1 = [
                    ['id' => 1, 'name' => 'Product 1', 'price' => 19.99, 'image' => 'Temp.png'],
                    ['id' => 2, 'name' => 'Product 2', 'price' => 29.99, 'image' => 'Temp.png'],
                    ['id' => 3, 'name' => 'Product 3', 'price' => 39.99, 'image' => 'Temp.png'],
                    ['id' => 4, 'name' => 'Product 4', 'price' => 49.99, 'image' => 'Temp.png'],
                    ['id' => 5, 'name' => 'Product 5', 'price' => 59.99, 'image' => 'Temp.png'],
                    ['id' => 6, 'name' => 'Product 6', 'price' => 69.99, 'image' => 'Temp.png'],
                    ['id' => 7, 'name' => 'Product 7', 'price' => 79.99, 'image' => 'Temp.png'],
                    ['id' => 1, 'name' => 'Product 1', 'price' => 19.99, 'image' => 'Temp.png'],
                    ['id' => 2, 'name' => 'Product 2', 'price' => 29.99, 'image' => 'Temp.png'],
                    ['id' => 3, 'name' => 'Product 3', 'price' => 39.99, 'image' => 'Temp.png'],
                    ['id' => 4, 'name' => 'Product 4', 'price' => 49.99, 'image' => 'Temp.png'],
                    ['id' => 5, 'name' => 'Product 5', 'price' => 59.99, 'image' => 'Temp.png'],
                    ['id' => 6, 'name' => 'Product 6', 'price' => 69.99, 'image' => 'Temp.png'],
                    ['id' => 7, 'name' => 'Product 7', 'price' => 79.99, 'image' => 'Temp.png'],
                ];
                

                foreach ($productsRow1 as $product) {
                    echo '<a href="product_details.php?id=' . $product['id'] . '">'; // Add anchor tag
                    echo '<div class="product-box">';
                    echo '<div class="product">';
                    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<h2>' . $product['name'] . '</h2>';
                    echo '<p>Price: $' . $product['price'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</a>'; // Close anchor tag
                }
                ?>
            </div>
        </div>

        <div class="scrollable-row">
            <div class="label">Latest</div>
            <div class="products">
                <?php
                $productsRow1 = [
                    ['id' => 1, 'name' => 'Product 1', 'price' => 19.99, 'image' => 'Temp.png'],
                    ['id' => 2, 'name' => 'Product 2', 'price' => 29.99, 'image' => 'Temp.png'],
                    ['id' => 3, 'name' => 'Product 3', 'price' => 39.99, 'image' => 'Temp.png'],
                    ['id' => 4, 'name' => 'Product 4', 'price' => 49.99, 'image' => 'Temp.png'],
                    ['id' => 5, 'name' => 'Product 5', 'price' => 59.99, 'image' => 'Temp.png'],
                    ['id' => 6, 'name' => 'Product 6', 'price' => 69.99, 'image' => 'Temp.png'],
                    ['id' => 7, 'name' => 'Product 7', 'price' => 79.99, 'image' => 'Temp.png'],
                    ['id' => 1, 'name' => 'Product 1', 'price' => 19.99, 'image' => 'Temp.png'],
                    ['id' => 2, 'name' => 'Product 2', 'price' => 29.99, 'image' => 'Temp.png'],
                    ['id' => 3, 'name' => 'Product 3', 'price' => 39.99, 'image' => 'Temp.png'],
                    ['id' => 4, 'name' => 'Product 4', 'price' => 49.99, 'image' => 'Temp.png'],
                    ['id' => 5, 'name' => 'Product 5', 'price' => 59.99, 'image' => 'Temp.png'],
                    ['id' => 6, 'name' => 'Product 6', 'price' => 69.99, 'image' => 'Temp.png'],
                    ['id' => 7, 'name' => 'Product 7', 'price' => 79.99, 'image' => 'Temp.png'],
                ];
                

                foreach ($productsRow1 as $product) {
                    echo '<a href="product_details.php?id=' . $product['id'] . '">'; // Add anchor tag
                    echo '<div class="product-box">';
                    echo '<div class="product">';
                    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<h2>' . $product['name'] . '</h2>';
                    echo '<p>Price: $' . $product['price'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</a>'; // Close anchor tag
                }
                ?>
            </div>
        </div>
</main>

    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Phil-Tech-Retails LTD all right reserved</p>
        </div>
    </footer>
</body>
</html>
