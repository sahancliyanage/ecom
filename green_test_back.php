<?php
include('db_connection.php');

header("Content-Type: application/json"); // Ensure JSON response

$inputData = json_decode(file_get_contents("php://input"), true);

// Start query
$query = "SELECT * FROM products WHERE 1=1";

// Function to sanitize array inputs
function sanitizeArray($conn, $inputArray) {
    return array_map(function($item) use ($conn) {
        return mysqli_real_escape_string($conn, trim($item));
    }, $inputArray);
}

// Handle plant size filter
if (!empty($inputData['plant_size'])) {
    $sizes = sanitizeArray($conn, $inputData['plant_size']);
    $query .= " AND plant_size IN ('" . implode("','", $sizes) . "')";
}

// Handle light requirement filter
if (!empty($inputData['light_requirement'])) {
    $lights = sanitizeArray($conn, $inputData['light_requirement']);
    $query .= " AND light_requirement IN ('" . implode("','", $lights) . "')";
}

// Handle plant color filter
if (!empty($inputData['plant_color'])) {
    $colors = sanitizeArray($conn, $inputData['plant_color']);
    $query .= " AND plant_color IN ('" . implode("','", $colors) . "')";
}

// Handle plant categary filter
if (!empty($inputData['plant_categary'])) {
    $categary = sanitizeArray($conn, $inputData['plant_categary']);
    $query .= " AND plant_categary IN ('" . implode("','", $categary) . "')";
}

error_log("Final Query: " . $query); // Logs the query


// Handle price range filter
if (!empty($inputData['price'])) {
    $price = intval($inputData['price']);
    $query .= " AND price <= $price";
}

// Execute query
$result = mysqli_query($conn, $query);

$products = [];

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = [
            "image_url" => $row['image_url'],
            "product_name" => $row['product_name'],
            "price" => $row['price']
        ];
    }
}

// Return JSON response
echo json_encode(["products" => $products]);

mysqli_close($conn);
?>