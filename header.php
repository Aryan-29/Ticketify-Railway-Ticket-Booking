<?php

if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success!</strong> You can now  <a href="/Ticketify/Ticketify/login.php">login</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}

if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false" && $_GET['error']){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
            <strong>Error!</strong> '.  $_GET['error'] .'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}

if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="false" && $_GET['error']){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
            <strong>Error!</strong> '.  $_GET['error'] .'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>';
}
?>