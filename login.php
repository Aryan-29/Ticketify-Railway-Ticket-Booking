<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head> 
  <body>
  <?php include 'header.php'?>
    <h1
      class="text-green text-center font-weight-bold"
      style="font-size: 40px;"
    >
      Login at Ticketify!
    </h1>

    <!-- <h4 class="text-blue text-center font-weight-bold" style="font-size: 20px;">
      Login
    </h4> -->

    <div class="container">
      <br />

      <div class="col-lg-5 m-auto d-block">

        <form action="loginhandle.php" onsubmit="return validation()" method="POST" class="bg-light">
          <div class="form-group">
            <label for="user" class="font-weight-regular"> Username </label>
            <input
              type="text"
              name="user"
              class="form-control"
              id="user"
              autocomplete="off"
            />
            <span id="username" class="text-danger font-weight-regular"> </span>
          </div>

          <div class="form-group">
            <label class="font-weight-regular"> Password </label>
            <input
              type="password"
              name="pass"
              class="form-control"
              id="pass"
              autocomplete="off"
            />
            <span id="passwords" class="text-danger font-weight-regular">
            </span>
          </div>

          <input
            type="submit"
            name="submit"
            value="Submit"
            class="btn btn-success"
            autocomplete="off"
          />&emsp;&emsp;&emsp;&emsp; Did not have an account?
          <a href="index.html">SignUp</a>
        </form>

        <br /><br />
      </div>
    </div>

    <script type="text/javascript">
      function validation() {
        var user = document.getElementById("user").value;
        var pass = document.getElementById("pass").value;

        if (user == "") {
          document.getElementById("username").innerHTML =
            " ** Please fill the username field";
          return false;
        }
        if (user.length <= 2 || user.length > 20) {
          document.getElementById("username").innerHTML =
            " ** Username lenght must be between 2 and 20";
          return false;
        }
        if (!isNaN(user)) {
          document.getElementById("username").innerHTML =
            " ** only characters are allowed";
          return false;
        }

        if (pass == "") {
          document.getElementById("passwords").innerHTML =
            " ** Please fill the password field";
          return false;
        }
        if (pass.length <= 5 || pass.length > 20) {
          document.getElementById("passwords").innerHTML =
            " ** Passwords lenght must be between  5 and 20";
          return false;
        }

        if (pass != confirmpass) {
          document.getElementById("confrmpass").innerHTML =
            " ** Password does not match the confirm password";
          return false;
        }
      }
    </script>
  </body>
</html>
