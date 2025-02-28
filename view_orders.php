<?php
$conn = new mysqli("localhost", "root", "", "ecommerce_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM orders");

echo "<h2>All Orders</h2>";
echo "<table border='1' cellpadding='10'>
<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Address</th>
  <th>Product</th>
  <th>Price</th>
  <th>Order Date</th>
</tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['full_name']}</td>
                <td>{$row['address']}</td>
                <td>{$row['product']}</td>
                <td>$ {$row['price']}</td>
                <td>{$row['order_date']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No orders found.</td></tr>";
}

echo "</table>";

$conn->close();
?>
