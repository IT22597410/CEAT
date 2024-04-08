<?php
// Retrieve supplier_name from URL parameter
$supplier_name = isset($_GET['supplier_name']) ? $_GET['supplier_name'] : '';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>Edit vendor Evaluation</title>
    <link rel="stylesheet" href="Style.css" />
  </head>
  <body>
    
    <div class="content">

        <img
          src="images/logo1.jpg"
          alt="Logo"
          style="width: 150px; height: 80px; margin-left:-250px"
        />

      <h1
        style="
          text-align: center;
          font-size: 50px;
          font-family: Verdana, Geneva, Tahoma, sans-serif;
          font-weight: bold;
          color: white;
          margin-top:-80px
        "
      >
        Edit Vendor Evaluation
      </h1>
      <div class="form">
        <form method="POST" action="Evaluationedit.php">

        <label for="vendor_name" style="background-color: #0f0f0f; opacity: 0.7; color: #fff">Supplier Name:</label>
        <input type="text" id="vendor_name" name="vendor_name" value="<?php echo htmlspecialchars($supplier_name); ?>" readonly><br /><br />

          
          <label for="score1" style="background-color: #0f0f0f; opacity: 0.7; color: #fff">Customer complaints from field(out of 7):</label>
          <input
            type="number"
            id="score1"
            name="complaints"
            min="0"
            max="7"
            required
          /><br /><br />

          <label for="score2"
          style="background-color: #0f0f0f; opacity: 0.7; color: #fff">Incoming rejection and process issue(out of 42):
          </label>
          <input
            type="number"
            id="score2"
            name="rejection"
            min="0"
            max="42"
            required
          /><br />
          <br />

          <label for="score3" style="background-color: #0f0f0f; opacity: 0.7; color: #fff">COA issue(out of 7):</label>
          <input
            type="number"
            id="score3"
            name="coa_issue"
            min="0"
            max="7"
            required
          /><br /><br />

          <label for="score4" style="background-color: #0f0f0f; opacity: 0.7; color: #fff">Deviation/Rework/Segregation(out of 14):</label>
          <input
            type="number"
            id="score4"
            name="deviation"
            min="0"
            max="14"
            required
          /><br /><br />

          <label for="score5"
          style="background-color: #0f0f0f; opacity: 0.7; color: #fff">Average of total score for achieving delivery lot size and delivery
            week(out of 30):</label
          >
          <input
            type="number"
            id="score5"
            name="delivery"
            min="0"
            max="30"
            required
          /><br /><br /><br /><br />

          <div class="form-group text-center"> <!-- Add Bootstrap class 'text-center' -->
    <input type="submit" value="Submit" class="btn btn-primary" style="background-color: #fff; color: #0f0f0f; font-weight: bold"> <!-- Add Bootstrap class 'btn' and 'btn-primary' for styling -->
</div>
        </form>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    
    <script src="Script.js"></script>

  </body>
</html>

