<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">

    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header" >
                <a class="navbar-brand"  href="#">Bit Bank</a>
            </div>
            <ul class="nav navbar-nav" style="float: right">
                <li><a href="#" id="logout">Logout</a></li>
            </ul>
        </div>
    </nav>
     <div class="container">
         <div class="btn-group btn-group-justified">
            <a href="./myProfile.php" class="btn btn-primary">My Profile</a>
            <a href="./transferMoney.php" class="btn btn-primary">Transfer Money</a>
            <a href="./allTransfers.php" class="btn btn-primary">All Transfers</a>
         </div>
     </div>
            <br>

    <div class="container">
        <div class="row" id="page" >

            <div class="col-md-12">
                    <div class="row content">
                        <div class="col-sm-12 text-center">
                            <h1>Welcome</h1> <h1><span id="fullname"></span></h1>

                            <p>your account details: </p>
                            <hr>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-2 text-center">
                                <p>current account:</p>
                                <h3>8,320</h3>
                            </div>
                            <div class="col-sm-2 text-center">
                                <p>next charge (02/11):</p>
                                <h3>-4,320</h3>
                            </div>
                            <div class="col-sm-2 text-center">
                                <p>Savings account</p>
                                <h3>19,320</h3>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    <br>
</div>
<script>
    $.post("api.php", {"action":"get_all"},function(data){
        console.log(data.fullname);
        $("#fullname").html(data.fullname);
    });
    $("#logout").click(function () {
        $.post("api.php",{"action":"logout"},function () {
            document.location="index.php";
        });
    });
</script>
<script src="./assets/pages/helper.js"></script>
<script src="./assets/pages/main.js"></script>
</body>
</html>
