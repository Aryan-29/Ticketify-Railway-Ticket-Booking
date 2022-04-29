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
      Sign Up at Ticketify!
    </h1>

    <!-- <h4 class="text-blue text-center font-weight-bold" style="font-size: 20px;">
      Sign Up
    </h4> -->

    <div class="container">
      <br />

      <div class="col-lg-5 m-auto d-block">
        <form
            action="signup_handle.php"
            method="post"
            class="signupForm"
            onsubmit="validateSignupForm()"
          >
            <div class="modal-body">
              <div class="form-group">
                <label for="loginEmail">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="signupName"
                  name="signupName"
                  aria-describedby="emailHelp"
                  value=""
                  required
                />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="signupEmail"
                  name="signupEmail"
                  aria-describedby="emailHelp"
                  value=""

                  required
                />
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="signupPassword"
                  name="signupPassword"
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                  value=""
                  title="Must contain at least one
                             number and one uppercase and lowercase letter, and at least 8 or more characters"
                  required
                />
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="signupcPassword"
                  name="signupcPassword"
                  value=""

                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                  title="Must contain at least one
                             number and one uppercase and lowercase letter, and at least 8 or more characters"
                  required
                />
              </div>

              <button type="submit" class="btn btn-primary">Signup</button>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Close
              </button>
            </div>
            <div id="message"></div>
          </form>

        <br /><br />
      </div>
    </div>

    <script type="text/javascript">
      
// Signup Form
const signupForm = document.querySelector(".signupForm");
const signupName = signupForm.querySelector("#signupName");
const signupEmail = signupForm.querySelector("#signupEmail");
const signupPassword = signupForm.querySelector("#signupPassword");
const signupcPassword = signupForm.querySelector("#signupcPassword");

function validateSignupForm() {
  if (
    signupName.value === "" ||
    signupEmail.value === "" ||
    signupPassword.value === "" ||
    signupcPassword.value === ""
  ) {
    alert("Please enter all the fields");
    return false;
  }

  if (signupPassword.value !== signupcPassword.value) {
    alert("Passwords don't match");
    return false;
  }
  return true;
}
    </script>
  </body>
</html>
