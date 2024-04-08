<?php
require 'config.php';

// Check if the Supplier_name parameter is provided
if(isset($_GET['Supplier_name'])) {
    // Escape any special characters to prevent SQL injection
    $supplier_name = mysqli_real_escape_string($con, $_GET['Supplier_name']);
    
    // SQL query to delete the row with the specified Supplier_name
    $sql = "DELETE FROM ratings WHERE Supplier_name = '$supplier_name'";
    
    if ($con->query($sql) === TRUE) {
        // Redirect back to the page displaying the table after successful deletion
        header("Location: ViewEvaluation.php"); 
        exit();
    } else {
        echo "Error deleting record: " . $con->error;
    }
} else {
    // If Supplier_name parameter is not provided, display an error message
    echo "Supplier_name parameter not provided.";
}
?>