<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "rawan";
$password = "rawan";
$dbname = "HIS";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute a query to retrieve the data
$sql = "SELECT * FROM nursing_assessment";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Patient Record</title>
    <style>
        body {
  background-image: url("istockphoto-1302483442-170667a.jpg");
  background-size: cover;
    background-position: center;
}
      /* Style the header */
      header {
        text-align: center;
        color: black;
        padding: 20px;
        font-size: 30px;
        font-weight: bold;
      }

      
      table {
    border-collapse: collapse;
    width: 100%;
    margin-top: 50px;
    margin-bottom: 50px;
  }
  .table-title {
    font-weight: bold;
    margin-bottom: 10px;
  }
  td {
    padding: 10px;
    text-align: center;
  }
      /* Style the tab */
      .tab {
        overflow: hidden;
        background-color: #f1f1f1;
      }

      th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }

      th {
        background-color: #f2f2f2;
      }

      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
      input[type="number"] {
        padding: 2px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
      }

      /* Style the tab buttons */
      .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
      }

      /* Change background color of buttons on hover */
      .tab button:hover {
        background-color: #ddd;
      }

      /* Create an active/current tablink class */
      .tab button.active {
        background-color: gray;
        color: white;
      }

      /* Style the tab content */
      .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
      }

      /* Style the form */
      form {
        margin: 30px auto 0;
        width: 50%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f2f2f2;
      }

      /* Style the form inputs */
      input[type="text"],
      select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type="datetime-local"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      /* Style the form submit button */
      input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <header>Patient Record</header>

    <div class="tab">
      <button class="tablinks active" onclick="openTab(event, 'SOAP1')">SOAP1</button>
      <button class="tablinks" onclick="openTab(event, 'SOAP2')">SOAP2</button>
      <button class="tablinks" onclick="openTab(event, 'MedicalReport')">Medical Report</button>
      <button class="tablinks" onclick="openTab(event, 'PatientHistory')">Patient History</button>
      <button class="tablinks" onclick="openTab(event, 'Logout')">Logout</button>

    </div>

    <div id="SOAP1" class="tabcontent" style="display: block;">
      <form>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter name" required>

        <label for="med-number">Medical Number</label>
        <input type="text" id="med-number" name="med-number" placeholder="Enter medical number" required>

        <label for="age">Age</label>
        <input type="text" id="age" name="age" placeholder="Enter age" required>

        <label for="gender">Gender</label>
        <select id="gender" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>

        <label for="entry-date">Patient Entry Date</label>
        <input type="datetime-local" id="entry-date" name="entry-date" required>

        <label for="patient">Patient</label>
        <select id="patient" name="patient">
          <option value="inpatient">Inpatient</option>
          <option value="outpatient">Outpatient</option>
        </select>

        <label for="payment-process">Payment Process</label>
        <input type="text" id="payment-process" name="payment-process" placeholder="Enter payment process">

        <label for="soap1-date">Date</label>
        <input type="datetime-local" id="soap1-date" name="soap1-date" required>

        <input type="submit" value="Save">
      </form>
    </div>

    <div id="SOAP2" class="tabcontent" style="display: none;">
        <form>
          <label for="xray">X-Ray</label>
          <input type="text" id="xray" name="xray" placeholder="Enter x-ray" required>
  
          <label for="lab">Lab Tests</label>
          <input type="text" id="lab" name="lab" placeholder="Enter lab tests" required>
  
          <label for="mri">MRI</label>
          <input type="text" id="mri" name="mri" placeholder="Enter MRI" required>
  
          <label for="goals">Goals</label>
          <select id="goals" name="goals">
            <option value="Relieve Pain">Relieve Pain</option>
            <option value="Reduce Swelling">Reduce Swelling</option>
            <option value="Increase R.O.M.">Increase R.O.M.</option>
            <option value="Independent gait">Independent gait</option>
            <option value="Increase Muscle Power">Increase Muscle Power</option>
          </select>
  
          <label for="patient-need">Patient Need/Problem</label>
          <input type="text" id="patient-need" name="patient-need" placeholder="Enter patient's need/problem" required>
  
          <label for="interventions">Interventions</label>
          <select id="interventions" name="interventions">
            <option value="Cold Bag">Cold Bag</option>
            <option value="Faradic">Faradic</option>
            <option value="Active Exs">Active Exs</option>
            <option value="Wall Bars">Wall Bars</option>
            <option value="Quadriceps drill">Quadriceps drill</option>
            <option value="Hot Bag">Hot Bag</option>
            <option value="TENS">TENS</option>
            <option value="Stretching">Stretching</option>

          </select>
  
          <input type="submit" value="Save">
        </form>
      </div>

    <div id="MedicalReport" class="tabcontent" style="display: none;">
        <form>
            <label for="medical-number">Medical Number</label>
            <input type="text" id="medical-number" name="medical-number" placeholder="Enter medical number" required>
    
            <label for="lab">Lab Tests</label>
            <input type="text" id="lab" name="lab" placeholder="Enter lab tests" required>
    
            <label for="Diagnosis">Diagnosis</label>
            <select id="Diagnosis" name="Diagnosis">
              <option value="Low Back Pain">Low Back Pain</option>
              <option value="Osteoarthritis of Knee">Osteoarthritis of Knee</option>
              <option value="Calcaneal Spur">Calcaneal Spur</option>
              <option value="Elbow Stiffness">Elbow Stiffness</option>
            </select>

            <label for="sessions-number">Sessions Number</label>
            <select id="sessions-number" name="sessions-number">
              <option value="8Sessions">8 Sessions</option>
              <option value="6-12Sessions">6-12 Sessions</option>
              <option value="12-20Sessions">12-20 Sessions</option>
              <option value="20-30Sessions">20-30 Sessions</option>
            </select>

            <label for="Equipment/ProtocolNeeded">Equipment/Protocol Needed</label>
            <select id="Equipment/ProtocolNeeded" name="Equipment/ProtocolNeeded">
              <option value="Infrared">Infrared</option>
              <option value="Interferrential Therapy">Interferrential Therapy</option>
              <option value="Shortwave Diathermy">Shortwave Diathermy</option>
              <option value="TENS">TENS</option>
            </select>

            <label for="Therapeutic Exercises">Therapeutic Exercises</label>
            <select id="Therapeutic Exercises" name="Therapeutic Exercises">
              <option value="Stretching Exercises">Stretching Exercises</option>
              <option value="Straight Leg Raising">Straight Leg Raising</option>
              <option value="Active Exercises">Active Exercises</option>
              <option value="Passive Exercises">Passive Exercises</option>
            </select>
    
            <input type="submit" value="Save">
          </form>
    </div>

    <div id="PatientHistory" class="tabcontent">
        <table id="patient-table">
          <caption class="table-title">General Information</caption>
          <thead>
            <tr>
              <th>Medical Number</th>
              <th>Name</th>
              <th>Gender</th>
              <th>Entry Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                
           </tr>   
  
      </tbody>
        </table>
        <table id="medical-table">
          <caption class="table-title">Nursing Assessment</caption>
          <thead>
            <tr>
              <th>Medical Number</th>
              <th>Temperature</th>
              <th>Pulse</th>
              <th>Blood Pressure</th>
              <th>Weight</th>
              <th>Height</th>
              <th>Blood Sugar</th>
              <th>Respiratory Rate</th>
            </tr>
          </thead>
          <tbody>
            <?php
          // Loop through the result set and display the data in the table
          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row["Medical_Number"] . "</td>";
                  echo "<td>" . $row["Temperature"]."</td>";
                  echo "<td>" . $row["Pulse"] . "</td>";
                  echo "<td>" . $row["Blood_Pressure"] . "</td>";
                  echo "<td>" . $row["Weight"] . "</td>";
                  echo "<td>" . $row["Height"] . "</td>";
                  echo "<td>" . $row["Blood_Sugar"] . "</td>";
                  echo "<td>" . $row["Respiratory_Rate"] . "</td>";
                  echo "</tr>";
              }
          } else {
              echo "<tr><td colspan='8'>No supplements found.</td></tr>";
          }
          ?>
          </tbody>
        </table>
      </div>

    <div id="Logout" class="tabcontent">
       
      </div>

      <script>
        // Open the default tab
        document.getElementById("SOAP1").style.display = "block";
  
        // Open the corresponding tab on button click
        function openTab(event, tabName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          if (tabName === "Logout") {
            // Show confirmation dialog
            if (confirm("Are you sure you want to logout?")) {
              window.location.href = "login.html"; // Redirect to login page
            }
          } else {
            document.getElementById(tabName).style.display = "block";
            event.currentTarget.className += " active";
          }
        }

        const patientId = 'patient'; // Replace with the actual patient ID pattern
        const apiUrl = "https://fhir.simplifier.net/System-Project";
        fetch(apiUrl)
  .then(response => response.json())
  .then(data => {
    const resourceTable = document.getElementById("patient-table");
    const tbody = resourceTable.getElementsByTagName("tbody")[0];
    tbody.innerHTML = "";

    if (data && data.entry) {
      // Sort the entries by ID
      data.entry.sort((a, b) => {
        if (a.resource.id < b.resource.id) {
          return -1;
        }
        if (a.resource.id > b.resource.id) {
          return 1;
        }
        return 0;
      });

      data.entry.forEach(entry => {
        const resource = entry.resource;
        const row = tbody.insertRow();
        if (resource.resourceType == "Patient") {
          row.insertCell().innerHTML = resource.id || "";
          row.insertCell().innerHTML = (resource.name[0].given[0] + ' ' + resource.name[0].family) || "";
          row.insertCell().innerHTML = (resource.gender) || "";
          row.insertCell().innerHTML = (resource.birthDate) || "";
        }
      });
    }
  })
  .catch(error => console.error(error));
      </script>
  </body>
</html>
<?php
// Close the database connection
mysqli_close($conn);
?>

<table>
        <thead>
          <tr>
            <th>Patient Name</th>
            <th>ID</th>
            <th>Age</th>
            <th>Surgery Type</th>
            <th>Doctor Name</th>
            <th>Room for Surgery</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
            // Connect to the database
            $host = "localhost:3307";
            $user = "root";
            $password = "";
            $database = "project";
            $conn = mysqli_connect($host, $user, $password, $database);

            // Check if the connection was successful
            if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch the surgery requests from the database
            $sql = "SELECT * FROM surgery_requests";
            $result = mysqli_query($conn, $sql);

            // Loop through each row in the result set and display it in the table
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row["patientname"] . "</td>";
  echo "<td>" . $row["id"] . "</td>";
  echo "<td>" . $row["age"] . "</td>";
  echo "<td>" . $row["surgerytype"] . "</td>";
  echo "<td>" . $row["doctor_name"] . "</td>";
  echo "<td>" . $row["room_for_surgery"] . "</td>";
  echo "<td>" . $row["status"] . "</td>";
  echo "<td>";

  echo "</td>";
  echo "</tr>";
}


            // Close the database connection
            mysqli_close($conn);
          ?>
        </tbody>
      </table>