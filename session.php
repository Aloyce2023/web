
<form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "POST">
<div>
<label for = "Username"> Username:</label><br>
<input type = "text" name="username"><br>
</div><br>
<div>

<label for = "Password"> Password:</label><br>
<input type = "password"  name = "password"><br>
</div><br>

<div>
<input type = "submit" name = "submit" value = "submit"><br>

</div>
</form>
</body>
</html>

<?php
session_start();
if(isset($_POST['submit']))
    {
        $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
    
        if(empty($username))
        {
            echo"Username is missing!.<br>";

        }
        elseif(empty($password)){
            echo"Password is misssing.<br>";
        }
      
       if(!empty($_POST['username']) && !empty($_POST['password']))
       {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];
        header('location: index.php');
      
       }
    } 
?>