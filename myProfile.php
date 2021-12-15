<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>update profile</title>
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
  <p><strong>Note:</strong> in this page you can all your information and also update your profile or change your password and username.</p>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Account Info</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="col-sm-3 col-md-6 col-lg-4">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>info</th>
                    <th>your details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Full name</td>
                    <td><span id="fullname"></span></td>
                  </tr>
                  <tr>
                    <td>Phone</td>
                    <td><span id="phone"></span></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><span id="email"></span></td>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td><span id="address"></span></td>
                  </tr>
                  <tr>
                    <td>Age</td>
                    <td><span id="age"></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>

<!--Update profile -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Update profile </a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label">Full name :</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="Fullname" type="text" value="">
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Phone :</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="Phone" type="text" value="">
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Email :</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="Email" type="text" value="">
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Address :</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="Address" type="text" value="">
                    </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Age :</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="Age" type="text" value="">
                    </div>
            </div>
            <div class=" col-md-offset-11">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">update</button>
            </div>
            <br>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Profile</h4>
                        </div>
                        <div class="modal-body">
                            <p>Your personal information will be <strong> update! <strong></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" id="Update" data-dismiss="modal"> confirm </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Change password</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <form class="form-horizontal">
<!--Change password-->
            <div class="form-group">
                <label class="col-sm-2 control-label">Change password :</label>
                    <div class="col-sm-10">
                        <input class="form-control" id="Password" type="text" value="">
                    </div>
            </div>
            <div class=" col-md-offset-11">
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myMOdal">Change</button>
            </div>
            <br>
            <!-- Modal -->
            <div class="modal fade" id="myMOdal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Change password</h4>
                        </div>
                        <div class="modal-body">
                            <p>Your password will be change! </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" id="Change" data-dismiss="modal"> confirm </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="./assets/pages/helper.js"></script>
<script src="./assets/pages/main.js"></script>
<script>
// display account details
    $.post("api.php", {"action":"get_all"},function(data){

	    $("#fullname").html(data.fullname);
	    $("#phone").html(data.phone);
	    $("#email").html(data.email);
	    $("#address").html(data.address);
	    $("#age").html(data.age);

    });

// update account details
	$("#Update").click(function(){
	    $.post("api.php", {"action":"Update","fullname":$("#Fullname").val(),"phone":$("#Phone").val(),"email":$("#Email").val(),"address":$("#Address").val(),"age":$("#Age").val()},function(data){

	    });
    });
    // Change username and password
    $("#Change").click(function(){
        $.post("api.php", {"action":"Change","username":$("#Username").val(),"password":$("#Password").val()},function(data){

        });
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
