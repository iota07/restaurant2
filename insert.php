<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
// servername => localhost
// username => root
// password => empty
// database name => restau2
$conn = mysqli_connect("localhost", "root", "", "restau2");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Taking all values from the form data (input)
$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$email = $_REQUEST['email'];
$category = $_REQUEST['category'];
$textarea = $_REQUEST['textarea']; 

// Performing insert query execution
if ($category === "Reservations" || $category === "Events" || $category === "Customer_Service") {
    // Insert into the form_entries table based on the selected category
    $sqlFormEntries = "INSERT INTO form_entries (name, surname, email,$category) VALUES ('$name', '$surname', '$email','$textarea')";
    mysqli_query($conn, $sqlFormEntries);   
}
echo "Form submitted successfully";
} else {
    echo "Direct access not allowed";
}


// Close connection
mysqli_close($conn);
?>

