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

    <style>
      /* Custom CSS for hover effect on navigation links */
      .sidebar .nav-link:hover {
        font-size: 30px;
        color: #0f0f0f;
        background-color: #fff;
      }

      #rating-link {
        font-size: 30px;
        color: #0f0f0f;
        background-color: #fff;
      }
    </style>

    <title>vendor rating</title>

    <link rel="stylesheet" href="Style.css" />
  </head>
  <body>
    <div class="sidebar">
      <div class="nav flex-column">
        <img
          src="images/logo1.jpg"
          alt="Logo"
          class="mx-auto d-block mb-4"
          style="width: 150px; height: 80px"
        />

        <a class="nav-link" href="#">Dashboard</a>
        <a class="nav-link" href="#">Orders</a>
        <a class="nav-link" href="#">Reports</a>
        <a class="nav-link" href="#">Messages</a>
        <a class="nav-link" id="rating-link" href="#">Rating</a>
        <a class="nav-link" href="#">Complaints</a>

        <hr />
        <a class="nav-link mt-auto" href="#">Profile</a>
        <a class="nav-link" href="#">Logout</a>
      </div>
    </div>

    <div class="content">
      <h1
        style="
          text-align: center;
          font-size: 50px;
          font-family: Verdana, Geneva, Tahoma, sans-serif;
          font-weight: bold;
          color: white;
        "
      >
        Vendor Evaluation
      </h1>
      <div class="form">
        <form id="ratingForm" method="POST" action="Ratingcon.php">
          <label
            for="vendor_name"
            style="background-color: #0f0f0f; opacity: 0.5; color: #fff"
            >Supplier Name:</label
          >

          <select name="vendor_name" id="vendor_name">
            <option value="BEKAERT INDUSTRIES PVT LTD">
              BEKAERT INDUSTRIES PVT LTD
            </option>
            <option value="BIRLA CARBON INDIA PRIVATE LIMITED">
              BIRLA CARBON INDIA PRIVATE LIMITED
            </option>
            <option value="BRENNTAG PTE LTD">BRENNTAG PTE LTD</option>
            <option value="GANPATI GENERAL TRADING LLP">
              GANPATI GENERAL TRADING LLP
            </option>
            <option value="MADHU SILICA PVT LTD">MADHU SILICA PVT LTD</option>
            <option value="CHEM TREND CHEMICALS CO PVT LTD">
              CHEM TREND CHEMICALS CO PVT LTD
            </option>
            <option value="GODREJ INDUSTRIES LIMITED">
              GODREJ INDUSTRIES LIMITED
            </option>
            <option value="GOUTAM ENTERPRICES">GOUTAM ENTERPRICES</option>
            <option value="HYOSUNG VIETNAM">HYOSUNG VIETNAM</option>
            <option value="JUNMA TYRE CORD COMPANY LTD">
              JUNMA TYRE CORD COMPANY LTD
            </option>
            <option value="KISWIRE CORD SDN BHD">KISWIRE CORD SDN BHD</option>
            <option value="KRAIBURG AUSTRIA GMBH & CO KG">
              KRAIBURG AUSTRIA GMBH & CO KG
            </option>
            <option value="KUMHO PETROCHEMICAL CO LTD">
              KUMHO PETROCHEMICAL CO LTD
            </option>
            <option value="LANXESS INDIA PVT LTD">LANXESS INDIA PVT LTD</option>
            <option value="CHEM TREND INDUSTRIES LIMITED">
              CHEM TREND INDUSTRIES LIMITED
            </option></select
          ><br /><br />

          <label
            for="score1"
            style="background-color: #0f0f0f; opacity: 0.5; color: #fff"
            >Customer complaints from field(out of 7):</label
          >
          <input
            type="number"
            id="score1"
            name="score1"
            min="0"
            max="7"
            required
          /><br /><br />

          <label
            for="score2"
            style="background-color: #0f0f0f; opacity: 0.5; color: #fff"
            >Incoming rejection and process issue(out of 42):
          </label>
          <input
            type="number"
            id="score2"
            name="score2"
            min="0"
            max="42"
            required
          /><br />
          <p
            style="
              background-color: #0f0f0f;
              opacity: 0.5;
              color: #fff;
              width: 400px;
            "
          >
            (hint:Deduct 42 marks if registration due to specnot met/process
            issue,Deduct 14 marks ifdue to wetness/reasons not linked to RM
            spec)
          </p>
          <br />

          <label
            for="score3"
            style="background-color: #0f0f0f; opacity: 0.5; color: #fff"
            >COA issue(out of 7):</label
          >
          <input
            type="number"
            id="score3"
            name="score3"
            min="0"
            max="7"
            required
          /><br /><br />

          <label
            for="score4"
            style="background-color: #0f0f0f; opacity: 0.5; color: #fff"
            >Deviation/Rework/Segregation(out of 14):</label
          >
          <input
            type="number"
            id="score4"
            name="score4"
            min="0"
            max="14"
            required
          /><br /><br />

          <label
            for="score5"
            style="background-color: #0f0f0f; opacity: 0.5; color: #fff"
            >Average of total score for achieving delivery lot size and delivery
            week(out of 30):</label
          >
          <input
            type="number"
            id="score5"
            name="score5"
            min="0"
            max="30"
            required
          /><br /><br /><br /><br />

          <div class="form-group text-center">
            <button
              type="submit"
              id="btn1"
              style="background-color: #fff; color: #0f0f0f; font-weight: bold"
              class="btn btn-primary"
            >
              Submit
            </button>
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
