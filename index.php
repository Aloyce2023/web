
<?php
include("index.html");
session_start();
if(isset($_SESSION['username']))
{
    echo "Welcome{$_SESSION['username']}";
}
 if(isset($_POST['logout']))
        {
            session_destroy();
            header('location: session.php');

        } 
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>This is home page </h1>
        <form action = "index.php" method = "POST">
            <input type = "submit" name = "logout" value = "logout">
</form>


    </body>
    </html>

    <?php
   
   include("footer.html");


    ?>
