<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize form data
$full_name = htmlspecialchars(trim($_POST['name']));
$address = htmlspecialchars(trim($_POST['address']));
$card_number = htmlspecialchars(trim($_POST['card']));
$expiry_date = htmlspecialchars(trim($_POST['expiry']));
$cvv = htmlspecialchars(trim($_POST['cvv']));
$product = htmlspecialchars(trim($_POST['product']));
$price = htmlspecialchars(trim($_POST['price']));

// Use prepared statements for security
$stmt = $conn->prepare("INSERT INTO orders (full_name, address, card_number, expiry_date, cvv, product, price) VALUES (?, ?, ?, ?, ?, ?, ?)");

if ($stmt) {
    $stmt->bind_param("ssssssd", $full_name, $address, $card_number, $expiry_date, $cvv, $product, $price);
    
    // Execute and confirm success
    if ($stmt->execute()) {
        echo "<div style='font-family: Arial, sans-serif; text-align: center; padding: 20px;'>";
        echo "<h2 style='color: #28a745;'>Order Placed Successfully!</h2>";
        echo "<p>Order Number: #" . $stmt->insert_id . "</p>";
        echo "<p>Thank you for your purchase, <strong>$full_name</strong>!</p>";
        echo "</div>";
    } else {
        echo "<p style='color: red;'>There was an error placing your order. Please try again later.</p>";
    }
    
    $stmt->close();
} else {
    echo "<p style='color: red;'>Failed to prepare the statement. Please try again.</p>";
}

$conn->close();
?>