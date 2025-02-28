# ecom

upload file has the photos related to the plants

/////////////////////////////////////////////////////////
database code
CREATE DATABASE greenhut;
USE greenhut;

product table
CREATE TABLE products (
    product_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) COLLATE utf8mb4_general_ci NOT NULL,
    product_description TEXT COLLATE utf8mb4_general_ci NULL,
    price DECIMAL(10,2) NOT NULL,
    plant_size ENUM('Extra Small', 'Small', 'Medium', 'Large', 'Extra Large') COLLATE utf8mb4_general_ci NOT NULL,
    light_requirement ENUM('Super Bright and Sunny', 'Bright but Not Sunny', 'Medium Light', 'Low Light') COLLATE utf8mb4_general_ci NOT NULL,
    plant_color ENUM('Green', 'Red', 'Yellow', 'Purple', 'Variegated') COLLATE utf8mb4_general_ci NOT NULL,
    plant_categary ENUM('Indoor plants', 'Outdoor plants', 'Easy care plants', 'Flowering plants') COLLATE utf8mb4_general_ci NOT NULL,
    image_url VARCHAR(255) COLLATE utf8mb4_general_ci NULL,
    stock_quantity INT(11) NOT NULL
);

