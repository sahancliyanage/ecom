<?php
$servername = "127.0.0.1:3307";
$username = "root";  // Change this if needed
$password = "";      // Change this if needed
$database = "greenhut";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

header("Content-Type: application/json");

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
// Fetch products from database

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="product-card">
            <img src="' . $row["image_url"] . '" alt="' . $row["product_name"] . '">
            <h2>' . $row["product_name"] . '</h2>
            <p>Price: $' . $row["price"] . '</p>
            <button>Add to Cart</button>
        </div>';
    }
} else {
    echo "<p>No products found.</p>";
}

$conn->close();
?>
