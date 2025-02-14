


<?php

// Start session
session_start();

?>

<form action="page72.php" method="post">
    Customer Name: <input type="text" name="customerName"><br><br>
    Email Address: <input type="email" name="emailAddress"><br><br>
    Shipping Address: <textarea name="shippingAddress"></textarea><br><br>
    Mode of Payment: 
    <select name="paymentMode">
        <option value="Credit Card">Credit Card</option>
        <option value="Debit Card">Debit Card</option>
        <option value="Net Banking">Net Banking</option>
        <option value="Cash on Delivery">Cash on Delivery</option>
    </select><br><br>
    <input type="submit" value="Proceed to Products">
</form>

<?php

// Store customer details in session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["customerName"] = $_POST["customerName"];
    $_SESSION["emailAddress"] = $_POST["emailAddress"];
    $_SESSION["shippingAddress"] = $_POST["shippingAddress"];
    $_SESSION["paymentMode"] = $_POST["paymentMode"];
}

?>