<?php
session_start();
include('includes/header.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>

    <style>
        html,
        body {
            height: 100%;
            background-color: whitesmoke !important;
            font-family: "Roboto", sans-serif;
        }

        .global-container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0F52BA;
            margin-top: 150px;
        }

        form {
            padding-top: 10px;
            font-size: 14px;
            margin-top: 30px;

        }

        .login-form {
            width: 380px;
            height: 450px;
            margin: 20px;
            background: whitesmoke !important;
            border-radius: 10px !important;

        }

        input[type="text"],
        input[type="password"] {
            background: white;
            border: 2px solid #0db8de;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border: none;
            background: white;
            margin-bottom: 25px;
            /* margin: 0; */

        }

        .card-title {
            font-weight: 900;
            padding-top: 20px;

        }

        .btn {
            background: #0F52BA !important;
            font-size: 18px;
            transform: translateY(20px);
            border-radius: 10px !important;
        }
    </style>
</head>

<body>


    <!-- form start from here -->



    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="title text-center">LOGIN</h1>
                <div class="card-text">
                    <form method="post">
                        <div class="form-group">
                            <label for="eid" class="form-label">User id:</label>
                            <input type="text" class="form-control form-control sm" id="eid" placeholder="Enter userid" name="eid">

                            <label for="pass" class="form-label">Password:</label>
                            <input type="password" class="form-control form-control sm" id="pass" placeholder="Enter password" name="pass">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!-- form End from here -->
    <!-- ============================================================================ -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST["submit"])) {

    $userid = trim($_POST['eid']);
    $epass = trim($_POST['pass']);

    $userpass = QB::query("SELECT eid,password FROM user WHERE eid = '$userid'")->first();
    $pp =  $userpass->password;






    if (password_verify($epass, $pp)) {
        $_SESSION['eid'] =  $userid;


        echo "<script>
        window.location.href='http://localhost/user-management-system/index.php';
        </script>";
        // header("Location:index.php");
    } else {
        echo "<script>
        window.location.href='http://localhost/user-management-system/login.php';
        </script>";
        // header("Location:login.php");
    }
}


?>