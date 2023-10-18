<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Checkout</h1>
    <form id="checkout-form" action="result.php" method="post">
        <div class="form-group">
            <label for="product">Product:</label>
            <input placeholder="Enter product name..." type="text" id="product" name="product" required>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input placeholder="Enter quantity..." type="number" id="quantity" name="quantity" required>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input placeholder="Enter your name..." type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact Number:</label>
            <input placeholder="Enter contact number..." type="tel" id="contact" name="contact" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea placeholder="Enter address..." id="address" name="address" required></textarea>
        </div>
        <div class="form-group">
            <label for="payment-method">Payment Method:</label>
            <select id="payment-method" name="paymentmethod" required>
                <option value="COD">Cash on Delivery</option>
                <option value="debit">Debit Card</option>
                <option value="credit">Credit Card</option>
                <option value="gcash">GCash</option>
            </select>
        </div>
        <input type="submit" value="Place Order" name>
        <div class="form-group">
            
        </div>
    </form>
</body>
</html>
