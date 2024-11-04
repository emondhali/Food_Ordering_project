<?php

// Define server and database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "neworder";

// Create a new MySQLi connection object
$conn = new mysqli($servername, $username, $password, $dbname);


// Check if the connection to the database was successful
if ($conn->connect_error) {
    // If there is a connection error, terminate the script and output the error message
    die("Connection failed: " . $conn->connect_error);
}


// Check if the request method is POST, indicating form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve and store form data from POST request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $quantity = $_POST['quantity'];
    $order_item = $_POST['order_item'];
    $address = $_POST['address'];

    // Prepare an SQL query to insert the form data into the orders table
    $sql = "INSERT INTO orders (name, email, number, quantity, order_item, address) VALUES ('$name', '$email', '$number', $quantity, '$order_item', '$address')";

    // Execute the SQL query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, output a success message
        echo "New order placed successfully";
    } else {
        // If the query failed, output an error message with details
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
