<?php

    session_start();
    $msg = "";

    if (isset($_GET["action"]))
    {
    $MySQLdb = new PDO("mysql:host=127.0.0.1;dbname=bank", "root", "");
    $MySQLdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       if ($_GET["action"] == "register" )
       {
           if ($_GET["pass1"] == $_GET["pass2"])
            {
                $cursor = $MySQLdb->prepare("INSERT INTO users (username, password, fullname, phone, email, address, age) value (:username,:password,:fullname,:phone,:email,:address,:age)");
                $cursor->execute(array(":username"=>$_GET["username"], ":password"=>$_GET["pass1"], ":fullname"=>$_GET["fullName"], ":phone"=>$_GET["phone"], ":email"=>$_GET["email"], ":address"=>$_GET["address"], ":age"=>$_GET["age"]));
                $msg = "Registered";
            }
            else{
                $msg = "Error: password not equal";
            }

       }
       else if ($_GET["action"] == "login" )
       {
           $cursor = $MySQLdb->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
           $cursor->execute( array(":username"=>$_GET["l_username"], ":password"=>$_GET["l_password"]) );
           if($cursor->rowCount()){
                $row = $cursor->fetch();
                $_SESSION["username"] = $row['username'];
                Header("Location: mainPage.php");
           }
           else{
            $msg ="wrong username or password";
           }

       }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <title>login & register</title>
    </head>
    <body>
      <form action="index.php" method="GET">
        <input type="text" placeholder="Enter username" name="l_username">
        <input type="password" placeholder="Enter password" name="l_password">
        <input type="submit" value="login" name="action">
      </form>
      <hr>
      <form action="index.php" method="GET">
        <input type="text" placeholder="Enter username" name="username">
        <input type="password" placeholder="Enter password" name="pass1">
        <input type="password" placeholder="Repeat password" name="pass2">
        <br>
        <input type="text" placeholder="full name" name="fullName">
        <input type="text" placeholder="phone number" name="phone">
        <input type="text" placeholder="email" name="email">
        <br>
        <input type="text" placeholder="address" name="address">
        <input type="text" placeholder="age" name="age">


        <input type="submit" value="register" name="action">
      </form>
      <p>
        <?php echo $msg; ?>
      </p>
    </body>
</html>