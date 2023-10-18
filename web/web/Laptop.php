<div class="products">
    <?php
    $productsLaptop = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 19.99, 'image' => 'Acc.jpg'],
        ['id' => 2, 'name' => 'Product 2', 'price' => 29.99, 'image' => 'PC.jpg'],
        ['id' => 3, 'name' => 'Product 3', 'price' => 39.99, 'image' => 'Parts.jpg'],
        ['id' => 4, 'name' => 'Product 4', 'price' => 49.99, 'image' => 'product4.jpg'],
        ['id' => 5, 'name' => 'Product 5', 'price' => 59.99, 'image' => 'product5.jpg'],
        ['id' => 6, 'name' => 'Product 6', 'price' => 69.99, 'image' => 'product6.jpg'],
        ['id' => 7, 'name' => 'Product 7', 'price' => 79.99, 'image' => 'product7.jpg'],
        ['id' => 1, 'name' => 'Product 1', 'price' => 19.99, 'image' => 'Acc.jpg'],
        ['id' => 2, 'name' => 'Product 2', 'price' => 29.99, 'image' => 'PC.jpg'],
        ['id' => 3, 'name' => 'Product 3', 'price' => 39.99, 'image' => 'Parts.jpg'],
        ['id' => 4, 'name' => 'Product 4', 'price' => 49.99, 'image' => 'product4.jpg'],
        ['id' => 5, 'name' => 'Product 5', 'price' => 59.99, 'image' => 'product5.jpg'],
        ['id' => 6, 'name' => 'Product 6', 'price' => 69.99, 'image' => 'product6.jpg'],
        ['id' => 7, 'name' => 'Product 7', 'price' => 79.99, 'image' => 'product7.jpg'],
    ];

    foreach ($productsLaptop as $product) {
        echo '<div class="product-box">';
        echo '<div class="product">';
        echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
        echo '<h2>' . $product['name'] . '</h2>';
        echo '<p>Price: $' . $product['price'] . '</p>';
        echo '<div class="add-to-cart-box"><a href="add_to_cart.php?id=' . $product['id'] . '">Add to Cart</a></div>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>