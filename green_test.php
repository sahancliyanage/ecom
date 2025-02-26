<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Plants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="test.style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


</head>
<body>

<div class="container mt-4">
    <h1 class="text-center mb-4">Shop Plants</h1>
    
    <div class="row">
        <!-- Sidebar (Filters) -->
        <div class="col-md-3">
            <div class="border p-3 rounded bg-light">
                <h4>Filters</h4>

                <!-- Plant Size Filter -->
                <h6 class="mt-3">Plant Size</h6>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_size[]" id="extra-small" value="Extra Small">
                    <label class="form-check-label" for="extra-small">Extra Small (6)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_size[]" id="small" value="Small">
                    <label class="form-check-label" for="small">Small (156)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_size[]" id="medium" value="Medium">
                    <label class="form-check-label" for="medium">Medium (118)</label>
                </div>

                <!-- Light Requirement Filter -->
                <h6 class="mt-3">The Light in My Space</h6>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="light_requirement[]" id="super-bright" value="Super Bright and Sunny">
                    <label class="form-check-label" for="super-bright">Super Bright and Sunny (54)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="light_requirement[]" id="bright-not-sunny" value="Bright but Not Sunny">
                    <label class="form-check-label" for="bright-not-sunny">Bright but Not Sunny (156)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="light_requirement[]" id="neither-bright" value="Neither Bright nor Dark">
                    <label class="form-check-label" for="neither-bright">Neither Bright nor Dark (226)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="light_requirement[]" id="darker-side" value="On the Darker Side">
                    <label class="form-check-label" for="darker-side">On the Darker Side (138)</label>
                </div>

                <!-- Plant Color Filter -->
                <h6 class="mt-3">Plant Color</h6>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_color[]" id="green" value="Green">
                    <label class="form-check-label" for="green">Green</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_color[]" id="red" value="Red">
                    <label class="form-check-label" for="red">Red</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_color[]" id="yellow" value="Yellow">
                    <label class="form-check-label" for="yellow">Yellow</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_color[]" id="purple" value="Purple">
                    <label class="form-check-label" for="purple">Purple</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_color[]" id="Orange" value="Orange">
                    <label class="form-check-label" for="Orange">Orange</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_color[]" id="Patterns" value="Patterns">
                    <label class="form-check-label" for="Patterns">Patterns</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_color[]" id="Variegation" value="Variegation">
                    <label class="form-check-label" for="Variegation">Variegation</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_color[]" id="Multicolor" value="Multicolor">
                    <label class="form-check-label" for="Multicolor">Multicolor</label>
                </div>

                 <!-- categary Filter -->
                 <h6 class="mt-3">Plant categary</h6>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_categary[]" id="indoor-plants" value="Indoor plants">
                    <label class="form-check-label" for="indoor-plants">Indoor plants(120)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_categary[]" id="outdoor-plants" value="Outdoor plants">
                    <label class="form-check-label" for="outdoor-plants">Outdoor plants(100)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_categary[]" id="easy-care" value="Easy care">
                    <label class="form-check-label" for="easy-care">Easy care(135)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input filter-option" type="checkbox" name="plant_categary[]" id="pet-friendly" value="Pet friendly">
                    <label class="form-check-label" for="pet-friendly">Pet friendly(60)</label>
                </div>

                <!-- Price Range Filter -->
                <h6 class="mt-3">Price Range</h6>
                <label for="price-range">Select Price Range</label>
                <input type="range" class="form-range filter-option" min="0" max="319" step="1" id="price-range">
                <div class="d-flex justify-content-between">
                    <span>$0</span>
                    <span id="selected-price">$319</span>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="col-md-9">
            <div class="row" id="product-grid">
                <!-- Products will be dynamically loaded here -->
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    // Toggle the display of the filter options
    $('.filter-toggle').on('click', function() {
        // Find the next element with class 'filter-options' and toggle its visibility
        $(this).next('.filter-options').slideToggle();
    });

    function fetchProducts() {
        console.log("fetchProducts called"); // Debugging
        
        let filters = {};

        // Collect selected checkboxes for each filter group
        $('.filter-option:checked').each(function () {
            let name = $(this).attr("name").replace("[]", ""); // Remove [] from name
            if (!filters[name]) {
                filters[name] = [];
            }
            filters[name].push($(this).val());
        });

        // Collect price range
        filters['price'] = $('#price-range').val();

        // Debugging: Log the filters object
        console.log("Filters being sent:", filters);

        // Send AJAX request to the PHP script
        $.ajax({
            url: "green_test_back.php",  // Ensure this path is correct
            method: "POST",
            data: JSON.stringify(filters), // Send as JSON
            contentType: "application/json", // Ensure proper content type
            success: function (response) {
                console.log("Response from server:", response);
                
                if (!response || !response.products) {
                    console.error("Invalid response format:", response);
                    $("#product-grid").html("<p class='text-center text-danger'>Error: Invalid response from server.</p>");
                    return;
                }

                let html = "";

                if (response.products.length > 0) {
                    response.products.forEach(product => {
                        html += `
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 shadow-sm">
                                    <img src="${product.image_url}" class="card-img-top" 
                                         alt="${product.product_name}" 
                                         onerror="this.src='images/default.jpg';">
                                    <div class="card-body">
                                        <h5 class="card-title">${product.product_name}</h5>
                                        <p class="card-text">Price: $${product.price}</p>
                                        <button class="btn btn-primary w-100">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                } else {
                    html = "<p class='text-center'>No products found.</p>";
                }

                $("#product-grid").html(html);
            },
            error: function (xhr, status, error) {
                console.log("AJAX Error:", status, error);
                $("#product-grid").html("<p class='text-center text-danger'>Error loading products. Please try again later.</p>");
            }
        });
    }

    // Attach event listeners to filter options
    $('.filter-option').on("change", function () {
        fetchProducts();
    });

    // Update price range display and fetch products
    $("#price-range").on("input", function () {
        $("#selected-price").text("$" + $(this).val());
        fetchProducts();
    });

    // Load products on page load
    fetchProducts();
});

</script>
</body>
</html>
