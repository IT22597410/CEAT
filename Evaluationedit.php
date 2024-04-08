<?php

$supplier_name = $_POST["vendor_name"];
$complaints = $_POST["complaints"];
$rejection = $_POST["rejection"];
$COA = $_POST["coa_issue"];
$deviation = $_POST["deviation"];
$delivery=$_POST["delivery"];

$servername = "localhost";
$username = "root";
$password = "";
$db = "vendor";



$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);

}else{
$sql = "UPDATE ratings SET Customer_complaints_from_field='$complaints',Incoming_rejection_and_process_issue='$rejection',COA_issue='$COA',Deviation_Rework_Segregation='$deviation',Achieving_delivery_lot_size_and_delivery_week='$delivery'  WHERE Supplier_name='$supplier_name'";

if ($conn->query($sql) === TRUE) {
	header("Location: ViewEvaluation.php"); 
	exit();
   
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
}
?>