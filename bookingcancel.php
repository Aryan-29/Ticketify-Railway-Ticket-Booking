<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/book_cancel.css">
</head>

<body background="img\image.png">

<?php
    session_start();

    var_dump($_SESSION);
    // echo $_SESSION['srno'];
    // echo $_SESSION['email'];
    if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)){
        $showError = 'You are not logged in!';
        return header("Location: /Ticketify/Ticketify/login.php?loginsuccess=false&error= $showError");
    }
    // session_destroy();
    // var_dump($_SESSION);

?>
    <table class="center">
        <?php 
            echo '<a href="logout.php"><buttton>Logout</buttton></a>'
        ?>

        <tr>
            <td class="book1">
                <a class="Link" href="booking-form-passenger_details.php">
                    <img class="image-holder" src="img\picture4.png" style="width : 336px; border-radius : 50px;"/>
                </a>
            </td>

            <td class="book2">
                <a class="Link" href="#">
                    <img class="image-holder2" src="img\picture5.png" style="width : 336px; border-radius : 50px;"/>
                </a>
            </td>
        </tr>
    </table>
</body>

</html>