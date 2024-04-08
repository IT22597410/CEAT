<?php
    require 'config.php';

    
        $vendor_name = $_POST["vendor_name"];
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];
        $score4 = $_POST["score4"];
        $score5 = $_POST["score5"];

    
    
    $sql= "INSERT INTO ratings (`Supplier_name`, `Customer_complaints_from_field`, `Incoming_rejection_and_process_issue`, `COA_issue`, `Deviation_Rework_Segregation`, `Achieving_delivery_lot_size_and_delivery_week`) VALUES ('".$vendor_name."', '".$score1."', '".$score2."', '".$score3."', '".$score4."', '".$score5."')";
        if($con->query($sql)){

            header("Location: success.php"); 
            exit();
        }
        else{

            echo "Error:".$con->error;
        }

    
    $con->close();

?>