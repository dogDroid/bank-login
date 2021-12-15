<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
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
            <a class="navbar-brand"  href="./mainPage.php">Bit Bank</a>
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

    <h3> My Transactions:</h3>
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID </th>
                <th>transfer to</th>
                <th>amount</th>
                <th>purpose</th>
                <th>date</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td><span id="transaction_id"></span></td>
                <td><span id="from_user"></span></td>
                <td><span id="transaction_data"></span></td>
                <td><span id="purpose"></span></td>
                <td><span id="Tdate"></span></td>

            </tr>

            </tbody>
        </table>
    </div>

</div>



<script>

        // display account details
        $.post("api.php", {"action":"all_transactions"},function(data){
            $("#transaction_id").html(data.transaction_id);
            $("#from_user").html(data.from_user);
            $("#transaction_data").html(data.transaction_data);
            $("#purpose").html(data.purpose);
            $("#Tdate").html(data.Tdate);

    });


    // user logout

        $("#logout").click(function () {
        AjaxMethod({"action":"logout"},function () {
            document.location="index.php";
        });
    });
</script>


</body>
</html>
