<?php
session_start();
if (!isset($_SESSION['eid'])) {
    header("Location:login.php");
}
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');


?>
<?php
if (isset($_POST["submit"])) {
    $result = Crud::user_set($_POST);



    if (!empty($result)) {
        echo "Saved Successfull";
        echo "<script>
      window.location.href='http://localhost/ecrud/admin2/read.php';
      </script>";
        //header("Location: http://localhost/ecrud/admin2/read.php");
    }
    if (empty($result)) {

        echo "<script>
      window.location.href='http://localhost/ecrud/admin2/form.php';
      </script>";
        //header("Location: http://localhost/ecrud/admin2/read.php");
    }
}

// if (isset($_REQUEST['submit'])) {

//     if (($_REQUEST['fname']) == "" || ($_REQUEST['lname']) == "" || ($_REQUEST['faname']) == "" || ($_REQUEST['maname']) == "" || ($_REQUEST['gender']) == "" || ($_REQUEST['bday']) == "" || ($_REQUEST['blood']) == "" || ($_REQUEST['religion']) == "" || ($_REQUEST['ph']) == "" || ($_REQUEST['em']) == "" || ($_REQUEST['nid']) == "" || ($_REQUEST['addr']) == "" || ($_REQUEST['city']) == "" || ($_REQUEST['st']) == "" ||  ($_REQUEST['edu']) == "" || ($_REQUEST['jd']) == "" || ($_REQUEST['ld']) == "" || ($_REQUEST['agr']) == "" || ($_REQUEST['sta']) == "" || ($_REQUEST['pass']) == "" || ($_REQUEST['photo']) == "")

//         echo "Fill All Field";
// }

// $r = Generateid::gid($_POST);
// $user_ID = str_pad($r->eid, 4, 0, STR_PAD_LEFT);

// foreach ($r as $row) {

//     echo $last_id = $row->eid;
//     if ($last_id == "") {
//         $user_ID = "ABC1";
//     } else {
//         $user_ID = substr($last_id, 3);
//         $user_ID = intval($user_ID);
//         $user_ID = "ABC" . ($user_ID + 1);
//     }
// }

// $user_list =  Ecrud::user_list();

// foreach ($user_list as $row) {
// }
// $last_id = $row->eid;
// if ($last_id == "") {
//     $user_ID = "ABC1";
// } else {
//     $user_ID = substr($last_id, 3);
//     $user_ID = intval($user_ID);
//     $user_ID = "ABC" . ($user_ID + 1);
// }



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Registration Form</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->










    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Registration Form</title>

        <!-- <style>
        * {
            margin: 5px 10px;
        }
    </style> -->
    </head>

    <body>



        <!-- Content Wrapper -->
        <!-- <div id="content-wrapper" class="d-flex flex-column">
    <center>
        <h1 style="margin-top: 40px;">Registration Form</h1>
    </center>
    <br> -->
        <!-- form start from here -->



        <form class="bg-light bg-gradient" action="" method="post" enctype="multipart/form-data" style="margin: 5px 20px;">


            <!-- <div class="row align-items-center g-0"> -->

                <!-- <div class="col-md">
                <label for="inputEmail4" class="form-label">Id</label>
                <input type="number" class="form-control" name="id" id="inputEmail4">
            </div> -->
                <!-- <div class="col-md-3">
                    <label for="inputEmail4" class="form-label"></label>
                    <input type="number" class="form-control" name="eid" value="" id="inputid">
                </div> -->



            <!-- </div> <br> -->
            <hr><br>
            <div class="row g-3">

                <div class="col-md">
                    <label for="inputEmail4" class="form-label">First name</label>
                    <input type="text" class="form-control" name="fname" id="inputfname">
                </div>
                <div class="col-md">
                    <label for="inputEmail4" class="form-label">Last name</label>
                    <input type="text" class="form-control" name="lname" id="inputlname">
                </div>
                <div class="col-md">
                    <label for="inputEmail4" class="form-label">Father Name</label>
                    <input type="text" class="form-control" name="faname" id="inputfaname">
                </div>
                <div class="col-md">
                    <label for="inputEmail4" class="form-label">Mother Name</label>
                    <input type="text" class="form-control" name="maname" id="inputmanames">
                </div>

            </div>
            <div class="row g-3">

                <!-- 
            <div class="col-md">
                <label for="inputEmail4" class="form-label">Gender</label>
                <div class="row-md">
                    <div class="form-check-inline">
                        Male

                        <input class="form-check-input" type="radio" name="male" id="gridRadios1" value="option1" checked>

                    </div>
                    <div class="form-check-inline">
                         <label class="form-check-label" for="gridRadios2">

                            </label> 
                        Female

                        <input class="form-check-input" type="radio" name="female" id="gridRadios2" value="option2">

                    </div>

                </div>
            </div>  -->
                <!-- <div class="col-md">
                    <label for="inputEmail4" class="form-label">Gender</label>
                    <select class="form-select" name="gender">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>

                    </select>
                </div> -->
                <div class="col-md">
                    <label for="inputEmail4" class="form-label">Gender</label>
                    <select class="form-select" name="gender">
                        <option>Select Gender</option>
                        <?php foreach (documents_status() as $key => $value) { ?>
                            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php } ?>

                    </select>
                </div>



                <div class="col-md">
                    <label for="inputEmail4" class="form-label">Birthday</label>
                    <input type="date" class="form-control" name="bday" id="inputEmail4">
                </div>
                <div class="col-md">

                    <label class="form-label" for="radio1"> Blood</label>
                    <select class="form-select" name="blood">
                        <option>Select Your Blood</option>
                        <?php foreach (blood() as $key => $value) { ?>
                            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php } ?>

                        <!--  <option value="">Select Your Blood</option>
                         <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option> -->
                    </select>
                </div>

                <div class="col-md">

                    <label class="form-label" for="radio1"> Religion</label>
                    <select class="form-select" name="religion">
                        <option>Select Your Religion</option>
                        <?php foreach (religion() as $key => $value) { ?>
                            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php } ?>

                        <!--<option value="">Select Your Religion</option>
                       
                        <option value="muslim">Muslim</option>
                        <option value="hindu">Hindu</option>
                        <option value="Christian">Christian</option>
                        <option value="Buddhist">Buddhist</option>
                        <option value="Others">Others</option> -->
                    </select>
                </div>

                <div class="col-md">
                    <label for="inputEmail4" class="form-label">Phone</label>
                    <input type="number" class="form-control" name="ph" id="inputEmail4">
                </div>


            </div>
            <div class="row g-3">

                <div class="col-md">
                    <label for="inputPassword4" class="form-label">Email</label>
                    <input type="email" class="form-control" name="em" id="inputPassword4">
                </div>
                <div class="col-md">
                    <label for="inputPassword4" class="form-label">Nid</label>
                    <input type="text" class="form-control" name="nid" id="inputPassword4">
                </div>


                <div class="col-md">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" name="addr" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-md">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" name="city" id="inputCity">
                </div>
                <div class="col-md">
                    <label for="inputAddress2" class="form-label">state</label>
                    <input type="text" class="form-control" name="st" id="inputAddress2">
                </div>
                <div class="col-md">
                    <label for="inputPassword4" class="form-label">Department</label>
                    <select class="form-select" name="dp">
                        <option>Select Your Department</option>
                        <?php foreach (department() as $key => $value) { ?>
                            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md">
                    <label for="inputPassword4" class="form-label">Position</label>
                    <input type="number" class="form-control" name="po" id="inputPassword4">
                </div>
                <div class="col-md">
                    <label for="inputPassword4" class="form-label">Education</label>
                    <input type="text" class="form-control" name="edu" id="inputPassword4">
                </div>

            </div>
            <div class="row g-3">
                <div class="col-md">
                    <label for="inputPassword4" class="form-label">Join Date</label>
                    <input type="date" class="form-control" name="jd" id="inputPassword4">
                </div>
                <div class="col-md">
                    <label for="inputPassword4" class="form-label">Leave Date</label>
                    <input type="date" class="form-control" name="ld" id="inputPassword4">
                </div>


                <div class="col">
                    <label for="inputAddress" class="form-label">Access Group</label>
                    <select class="form-select" name="agr">
                        <option>Select Your Access Group</option>
                        <?php foreach (access() as $key => $value) { ?>
                            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md">
                    <label for="inputCity" class="form-label">Status</label>
                    <input type="text" class="form-control" name="sta" id="inputCity">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" id="inputPassword4">
                </div>



                <div class="col">
                    <label for="formFile" class="form-label">Upload your photo</label>
                    <input class="form-control" type="file" name="photo" id="formFile">
                </div>

            </div>
            <br>
            <div class="row ">
                <div class="d-grid gap-2 col-1 mx-auto">
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Signup</button>
                </div>
            </div>
            <br>




        </form>

        <!-- </div> -->
        <!-- End of Main Content -->



</div>
</div>








<?php
include('includes/footer.php');

?>

<!-- form End from here -->
<!-- ============================================================================ -->



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>