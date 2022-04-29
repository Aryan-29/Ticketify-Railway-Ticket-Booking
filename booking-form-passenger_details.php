<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Railway Ticket Booking Form</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    

    <style>
      .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
      }
      
      .dropbtn:hover, .dropbtn:focus {
        background-color: #3e8e41;
      }
      
      #myInput {
        box-sizing: border-box;
        background-image: url('searchicon.png');
        background-position: 14px 12px;
        background-repeat: no-repeat;
        font-size: 16px;
        padding: 14px 20px 12px 45px;
        border: none;
        border-bottom: 1px solid #ddd;
      }
      
      #myInput:focus {outline: 3px solid #ddd;}
      
      .dropdown {
        position: relative;
        display: inline-block;
      }
      
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f6f6f6;
        min-width: 230px;
        overflow: auto;
        border: 1px solid #ddd;
        z-index: 1;
      }
      
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      
      .dropdown a:hover {background-color: #ddd;}
      
      .show {display: block;}

      
      </style>
  </head>
  <body>
    <div class="container">
      <!--container-->

      <form class="form-group" action="./handle_passengers.php" method="POST">
        <!--form-->
        <h1 class="text-center">Railway Ticket Booking Form</h1>

        <div id="form">
          <!--form-->
          <h3 class="text-white">Booking Details</h3>

          <div id="input">
            <!--input-->
            

<select class="form-select" id="input-group" name="From" aria-label="Default select example" onChange="getUpdate(this)">
  <option selected>FROM</option>


  <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "railway";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM `train`"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      echo $row;
     $stationname = $row["Source_Station_Name"];
     $id = "<option value=.$stationname>$stationname</option>";
     echo $id;
    }
  ?>
</select>

<select class="form-select" id="input-group" name="To" aria-label="Default select example" onChange="getUpdate(this)">
  <option selected>TO</option>

  <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "railway";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM `train`"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      echo $row;
     $stationname = $row["Destination_Station_Name"];
     $id = "<option value=.$stationname>$stationname</option>";
     echo $id;
    }
  ?>
</select>
<Script language="Javascript">
function getUpdate(selectObject) {
    var value = selectObject.value;  

    $.get( "urlToyourPHPResults.php?POS="+value, function( data ) {
    // Do something with returned data
    });

}
</script>
<select class="form-select" id="input-group" name="Train" aria-label="Default select example">
  <option selected>TO</option>

  <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "railway";
    
    $conn = mysqli_connect($servername, $username, $password, $database);
    $sql = "SELECT * FROM `train` where "; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
      echo $row;
     $stationname = $row["Train_Name"];
     $id = "<option value=.$stationname>$stationname</option>";
     echo $id;
    }
  ?>
</select>


            <!-- <input type="text" id="input-group" placeholder="To" required /> -->
            <input type="date" id="input-group" name="date" placeholder="Departure Date" required />
            <!--<input type="time" id="input-group" placeholder="Departure Time" required />-->

    
            <!-- <select id="input-group" style="background: black">
              <option value="">List of trains</option>
              <option value="">Rajdhani</option>
              <option value="">Shatabdi</option>
              <option value="">Gujarat Express</option>
            </select> -->
            <select id="input-group" name='seat' style="background: black" required>
              <option value="">Preffered Seating</option>
              <option value="Acchair">AC Chair Car</option>
              <option value="Acsleeper">AC Sleeper</option>
            </select>
          </div>
          <!--input-->

          <div id="input2">
            <!--input2-->
            <input type="number" id="input-group" name="adult" placeholder="Adult" required/>
            <input
              name="child"
              type="number"
              id="input-group"
              placeholder="Children(2-11years)"
              required
            />
            <input
              name="infant"
              type="number"
              id="input-group"
              placeholder="infant(under 2years)"
              required
            />
          </div>
          <!--input2-->

          <div class="booking-cta">
            <button type="submit" class="btn btn-warning text-white">
              Submit Form
            </button>
            <button type="reset" class="btn btn-primary">Clear Form</button>
          </div>
        </div>
        <!--form-->
      </form>
      <!--form-->
    </div>
    <!--container-->

    <script>
      /* When the user clicks on the button,
      toggle between hiding and showing the dropdown content */
   
      </script>
  </body>
</html>