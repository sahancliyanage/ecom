<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $product_description = mysqli_real_escape_string($conn, $_POST['product_description']);
    $price = floatval($_POST['price']);
    $plant_size = mysqli_real_escape_string($conn, $_POST['plant_size']);
    $light_requirement = mysqli_real_escape_string($conn, $_POST['light_requirement']);
    $plant_color = mysqli_real_escape_string($conn, $_POST['plant_color']);
    $plant_categary = mysqli_real_escape_string($conn, $_POST['plant_categary']);
    $stock_quantity = intval($_POST['stock_quantity']);

    // Handle image upload
    $target_dir = "uploads/";  // Ensure this folder exists with proper permissions
    $target_file = $target_dir . basename($_FILES["image_url"]["name"]);
    $image_url = "";

    if (move_uploaded_file($_FILES["image_url"]["tmp_name"], $target_file)) {
        $image_url = $target_file;
    } else {
        echo "Error uploading image.";
        exit();
    }

    // Insert into database
    $sql = "INSERT INTO products (product_name, product_description, price, plant_size, light_requirement, plant_color,plant_categary, image_url, stock_quantity)
            VALUES ('$product_name', '$product_description', $price, '$plant_size', '$light_requirement', '$plant_color','$plant_categary','$image_url', $stock_quantity)";

    if (mysqli_query($conn, $sql)) {
        echo "Plant added successfully!";
        header("Location: green_form.php"); // Redirect back to the form
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
