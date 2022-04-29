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
  </head>
  <body>
    <div class="container">
      <!--container-->

      <form class="form-group" action="personaldb.php" method="POST">
        <!--form-->
        <h1 class="text-center">Railway Ticket Booking Passenger Form</h1>

        <div id="form" style="height: 400px">
          <div id="input5">
            <h3 class="text-white">Personal Details</h3>
          </div>

          <div id="input">
            <input type="text" name="fullname" id="input-group" placeholder="Full Name" required/>
            <input type="number" name="number" id="input-group" placeholder="Phone Number" required/>
            <input type="email" id="input-group" placeholder="Email" required/>
            <input type="number" name="age" id="input-group" placeholder="Age" required/>
            <label style="color: #fff; margin-top: 10px">Gender</label>
            <div class="gender">
              <input type="radio" id="Male" name="gender" value="Male" required/>
              <label for="Gender">Male</label>
              <input type="radio" id="Female" name="gender" value="Female" required/>
              <label for="Gender">Female</label>
            </div>
          </div>
          <button type="submit" class="btn btn-warning text-white">Add +</button>

          <div class="booking-cta">
            <button class="btn btn-warning text-white">
              Submit Form
            </button>
            <button type="reset" class="btn btn-primary">Clear Form</button>
          </div>
        </div>
        <!--form-->
      </form>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Sr.No</th>
            <th scope="col">Passenger Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "signup" ;
                $port = 3306; 
                
                // Create connection
                $conn = mysqli_connect($servername, $username, $password,$database,$port);
                
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                        $sql = "SELECT * FROM personal";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) { 
                            while($row = $result->fetch_assoc()) {
                              echo '
                                <tr>
                                <td>  ' . $row["srno"] . '</td>
                                <td>  ' . $row["name"] . '</td>
                                <td>  ' . $row["number"] . '</td>
                                <td>  ' . $row["age"] . '</td>
                                <td>  ' . $row["gender"] . '</td>  

                                <td><button class="btn btn-danger"><a href="deleteCategory.php?id='. $row['srno']. '" style="color:#fff;">Delete</a></button></td>                                   
                                </tr>
                                ';
                            }
                        }
                ?>
       </tbody>
      </table>
      <!--form-->
    </div>
    <!--container-->
  </body>
</html>
