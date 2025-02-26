<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Submission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Add New Plant</h1>
   
    <form action="green_form_back.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="product_name" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="product_name" name="product_name" required>
    </div>

    <div class="mb-3">
        <label for="product_description" class="form-label">Product Description</label>
        <textarea class="form-control" id="product_description" name="product_description" rows="4"></textarea>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" step="0.01" required>
    </div>

    <div class="mb-3">
        <label for="plant_size" class="form-label">Plant Size</label>
        <select class="form-select" id="plant_size" name="plant_size">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
            <option value="Extra Small">Extra Small</option>
        </select>
    </div>

    <!-- Light Requirement Field - Updated as a select dropdown -->
    <div class="mb-3">
        <label for="light_requirement" class="form-label">The Light in My Space</label>
        <select class="form-select" id="light_requirement" name="light_requirement" required>
            <option value="Super Bright and Sunny">Super Bright and Sunny</option>
            <option value="Bright but Not Sunny">Bright but Not Sunny</option>
            <option value="Neither Bright nor Dark">Neither Bright nor Dark</option>
            <option value="On the Darker Side">On the Darker Side</option>
        </select>
    </div>

    <!-- Plant Color Field - Updated as a select dropdown -->
    <div class="mb-3">
        <label for="plant_color" class="form-label">Plant Color</label>
        <select class="form-select" id="plant_color" name="plant_color" required>
            <option value="Green">Green</option>
            <option value="Red">Red</option>
            <option value="Yellow">Yellow</option>
            <option value="Purple">Purple</option>
            <option value="Orange">Orange</option>
            <option value="Patterns">Patterns</option>
            <option value="Variegation">Variegation</option>
            <option value="Multicolor">Multicolor</option>
        </select>
    </div>

       <!-- Plant Categary Field - Updated as a select dropdown -->
       <div class="mb-3">
        <label for="plant_categary" class="form-label">Plant Categary</label>
        <select class="form-select" id="plant_categary" name="plant_categary" required>
            <option value="Indoorplants">Indoor plants</option>
            <option value="Outdoor plants">Outdoor plants</option>
            <option value="Easy care">Easy care</option>
            <option value="Pet friendly">Pet friendly</option>
        </select>
    </div>


    <div class="mb-3">
        <label for="image_url" class="form-label">Product Image (Upload)</label>
        <input type="file" class="form-control" id="image_url" name="image_url" accept="image/*" required>
    </div>

    <div class="mb-3">
        <label for="stock_quantity" class="form-label">Stock Quantity</label>
        <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

   
   
</div>

</body>
</html>
