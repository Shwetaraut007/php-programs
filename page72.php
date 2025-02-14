


<?php

// Start session
session_start();

// Product array
$products = [
    ["id" => 1, "name" => "Product A", "price" => 100],
    ["id" => 2, "name" => "Product B", "price" => 200],
    ["id" => 3, "name" => "Product C", "price" => 300]
];

?>

<form action="page73.php" method="post">
    <table border="1">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        <?php foreach ($products as $product) { ?>
        <tr>
            <td><?php echo $product["id"]; ?></td>
            <td><?php echo $product["name"]; ?></td>
            <td><?php echo $product["price"]; ?></td>
            <td><input type="number" name="quantity_<?php echo $product["id"]; ?>"></td>
        </tr>
        <?php } ?>
    </table>
    <input type="submit" value="Place Order">
</form>

<?php

// Store product quantities in session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($products as $product) {
        $_SESSION["quantity_" . $product["id"]] = $_POST["quantity_" . $product["id"]];
    }
}

?>