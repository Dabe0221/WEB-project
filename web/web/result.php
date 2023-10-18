<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style2.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Result</title>
</head>
<body>
    <h1>Checkout Result</h1>
    <div id="checkout-details" class="red-text">
        <?php
        $product = $_POST["product"];
        $quantity = $_POST["quantity"];
        $name = $_POST["name"];
        $contact = $_POST["contact"];
        $address = $_POST["address"];
        $paymentmethod = $_POST["paymentmethod"];
        ?>
        <h2>Product Details</h2>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Product</td>
                <td><?php echo $product; ?></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><?php echo $quantity . '<p>pieces</p>'; ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><?php echo $contact; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>
            </tr>
            <tr>
                <td>Payment Method</td>
                <td><?php echo $paymentmethod; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
