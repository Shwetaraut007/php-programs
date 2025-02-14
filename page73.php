


<?php

// Start session
session_start();

// Calculate total cost
$totalCost = 0;
$products = [
    ["id" => 1, "name" => "Product A", "price" => 100],
    ["id" => 2, "name" => "Product B", "price" => 200],
    ["id" => 3, "name" => "Product C", "price" => 300]
];
foreach ($products as $product) {
    $quantity = $_SESSION["quantity_" . $product["id"]];
    $totalCost += $product["price"] * $quantity;
}

?>

<h1>Bill</h1>

**Customer Details:**
<p>Customer Name: <?php echo $_SESSION["customer Name"]; ?></p>
<p>Email Address: <?php echo $_SESSION["emailAddress"]; ?></p>
<p>Shipping Address: <?php echo $_SESSION["shipping Address"]; ?></p>
<p>Mode of Payment: <?php echo $_SESSION["payment Mode"]; ?></p>

**Purchase Details:**
<table border="1">
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>
    <?php foreach ($products as $product) { ?>
    <tr>
        <td><?php echo $product["id"]; ?></td>
        <td><?php echo $product["name"]; ?></td>
        <td><?php echo $product["price"]; ?></td>
        <td><?php echo $_SESSION["quantity_" . $product["id"]]; ?></td>
        <td><?php echo $product["price"] * $_SESSION["quantity_" . $product["id"]]; ?></td>
    </tr>
    <?php } ?>
    <tr>
        <td colspan="4">Total Cost:</td>
