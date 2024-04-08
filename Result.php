<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="success.css" />
  </head>
  <body>
    <div class="container-fluid">
      <img
        src="images/logo1.jpg"
        alt="Logo"
        style="width: 150px; height: 80px; margin-top: 30px"
      />

      <h1 class="topic1" style="margin-top: 10px;">Vendor Rating</h1><br><br>

      <div class="container ">
        <div class="row justify-content-center">
          <div class="col-md-10">

        <form method="POST" action="">
          <label for="vendor_name" style="color: #fff; font-size: 30px;">Supplier Name:</label>

          <input type="text" name="vendor_name" id="search" onkeyup="searchFunction()" placeholder="Search for supplier.." style="height: 35px; width: 400px;">
            
           <input type="submit" value="search" style="height: 30px; width: 100px; font-weight:bold; background-color:lightblue"></input><br /><br /><br />
           
           <div id="searchResults" style="color:yellow"></div>

           </form>
         
           <label for="score" style="color: #fff; font-size: 30px;">Overall Rating Score(out of 100):</label>
           <span style="color:#fff; font-size:20px">
           <p> <?php
// Database connection
$servername = "localhost"; // Change this if your database server is hosted elsewhere
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "vendor"; // Change this to your database name

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if(isset($_POST["vendor_name"])) {
    $selected_vendor = $_POST["vendor_name"];

    // SQL query to calculate the overall rating score for the selected vendor
    $sql = "SELECT SUM(Customer_complaints_from_field) + 
                   SUM(Incoming_rejection_and_process_issue) + 
                   SUM(COA_issue) + 
                   SUM(Deviation_Rework_Segregation) + 
                   SUM(Achieving_delivery_lot_size_and_delivery_week) AS overall_score
            FROM ratings
            WHERE Supplier_name = '$selected_vendor'";

    // Execute query
    $result = $con->query($sql);

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Fetch the overall rating score
        $row = $result->fetch_assoc();
        $overall_score = $row["overall_score"];

        // Output the overall rating score
        echo "<p>Overall Rating Score for $selected_vendor: $overall_score</p>";
    } else {
        echo "No data found for the selected vendor.";
    }
}

// Close connection
$con->close();
?></p>
</span><br><br><br>
    <div class="form-group text-center"> 
     <button type="button" id="view" style="background-color:grey; font-weight:bold; height:40px; width:300px; font-size:20px">View Evaluation</button>
        </div>
      </div>
    </div>
  </div>

    <script>
    function searchFunction() {
        var input, filter, div, option, i;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        div = document.getElementById("searchResults");
        div.innerHTML = ''; // Clear previous search results
        <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "vendor";
            $con = new mysqli($servername, $username, $password, $database);
            $sql = "SELECT Supplier_name FROM ratings"; 
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $supplier_name = $row["Supplier_name"];
                    echo "if ('$supplier_name'.toUpperCase().indexOf(filter) > -1) {";
                    echo "div.innerHTML += '<p>' + '$supplier_name' + '</p>';";
                    echo "}";
                }
            }
            $con->close();
        ?>
    }
</script>

    <script>
         var viewButton = document.getElementById("view");
         viewButton.addEventListener("click", function () {
         window.location.href = "ViewEvaluation.php";
         });
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></scrip>

    <script src="Script.js"></script>
  </body>
</html>
