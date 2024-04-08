<?php

require 'config.php';

$sql = "SELECT * FROM ratings";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="table.css" /> 

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />


  </head>
  <body>
    <div class="container-fluid">
      <h1
        style="
          background-color: rgb(54, 54, 141);
          text-align: center;
          font-size: 60px;
          color: white;
          margin-left: 250px;
          margin-right: 250px;
        "
      >
        Vendor Evaluation
      </h1>

      <img
        src="images/logo1.jpg"
        alt="Logo"
        class="content"
        style="width: 200px; height: 100px; float: left; margin-top: -90px"
      />
          
      <div class="container mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                  <th>Supplier Name</th>
                  <th>Customer Complaints</th>
                  <th>Incoming Rejection</th>
                  <th>COA Issue</th>
                  <th>Deviation/Rework/Segregation</th>
                  <th>Achieving Delivery</th>
                  <th>Action</th>
                  
                </tr>
            </thead>
            <tbody>
              <?php
              // Step 3: Fetch data and display in HTML table
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      echo "<tr class='bg-primary text-white'>";
                      echo "<td>" . $row["Supplier_name"] . "</td>";
                      echo "<td>" . $row["Customer_complaints_from_field"] . "</td>";
                      echo "<td>" . $row["Incoming_rejection_and_process_issue"] . "</td>";
                      echo "<td>" . $row["COA_issue"] . "</td>";
                      echo "<td>" . $row["Deviation_Rework_Segregation"] . "</td>";
                      echo "<td>" . $row["Achieving_delivery_lot_size_and_delivery_week"] . "</td>";
                       // Edit button
                       echo "<td><button class='btn btn-primary' onclick='location.href=\"edit.php?supplier_name=" . urlencode($row["Supplier_name"]) . "\"'>Edit</button></td>";
                      // Delete button
                      echo "<td><button class='btn btn-danger' onclick='location.href=\"deleteEvaluation.php?Supplier_name=" . $row["Supplier_name"] . "\"'>Delete</button></td>";
                      echo "</tr>";
                  }
              } else {
                  echo "0 results";
              }
              ?>
            </tbody>
        </table><br>
        <a href="generate_pdf.php" class="btn btn-primary">Generate PDF</a>

        <div class="form-group text-center"> 
     <button type="button" id="back" style="background-color:grey; font-weight:bold; height:40px; width:300px; font-size:20px">Back to Dashboard</button>
        </div>

      </div>
    </div>

    <script>
        var Back = document.getElementById("back");
       Back.addEventListener("click", function () {
       window.location.href = "Rating.php";
      });
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


