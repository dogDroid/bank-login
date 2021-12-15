<?php

    session_start();

    $MySQLdb = new PDO("mysql:host=127.0.0.1;dbname=bank", "root", "");
    $MySQLdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /*header("content-type: application/json");*/

header("content-type: application/json");

if (isset($_POST["action"])){

		switch ($_POST["action"]){
			case "get_all":
				$cursor = $MySQLdb->prepare("SELECT * FROM users WHERE user_name=:user_name");
				$cursor->execute( array(":user_name"=>$_SESSION["username"]) );
				echo json_encode($cursor->fetch());

				break;

            case "all_transactions":
                $cursor = $MySQLdb->prepare("SELECT * FROM transactions WHERE user_name=:user_name");
                $cursor->execute( array(":user_name"=>$_SESSION["username"]) );
                    echo json_encode($cursor->fetch());

                break;

			case "Update":
				$cursor = $MySQLdb->prepare("UPDATE users SET fullname=:fullname , phone=:phone , email=:email , address=:address , age=:age WHERE username=:username");
				$cursor->execute( array(":phone"=>$_POST["phone"], ":fullname"=>$_POST["fullname"],":email"=>$_POST["email"],":address"=>$_POST["address"],":age"=>$_POST["age"], ":username"=>$_SESSION["username"]) );

				break;

			case "Change":
				$cursor = $MySQLdb->prepare("UPDATE users SET  password=:password WHERE username=:username "); /*username=:username , */
				$cursor->execute( array( ":password"=>$_POST["password"],":username"=>$_SESSION["username"]) ); /*":username"=>$_POST["username"],*/

				break;

            case "all_users":
                $cursor = $MySQLdb->prepare("SELECT username FROM users");
                print_r($cursor);
                //$cursor->execute( array(":username"=>$_SESSION["username"]) );
                //echo json_encode($cursor->fetch());

                break;

            case "logout":
                session_destroy();
                die('{"success":true}');
                break;

            default:
                die('{"success":false}');
       }
    }
?>