<?php
session_start();
if (!isset($_SESSION['eid'])) {
    header("Location:login.php");
}
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Information</h1>
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
    <?php

    $user_list =  Crud::user_update_list();
    if (isset($_POST["Update"])) {
        $result =  Crud::user_update($_POST);
        if (!empty($result)) {
            //   echo "Update Successfull";

            echo "<script>
      window.location.href='http://localhost/ecrud/admin2/read.php';
      </script>";
            // header("Location: http://localhost/ecrud/admin2/read.php");

        }
    }
    ?>




    <?php


    // $result = QB::table("user")->select('*')->get();
    // $con = mysqli_connect('localhost', 'root', '', 'crud');

    // $id = $_GET['id'];
    // $sql = "SELECT * FROM user WHERE id='$id' ";
    // $result = mysqli_query($con, $sql);



    // @$_POST$row$row['id'];
    // @$_POST['eid'];
    // @$_POST['fname'];
    // @$_POST['lname'];
    // @$_POST['faname'];
    // @$_POST['maname'];
    // @$_POST['gender'];
    // @$_POST['bday'];
    // @$_POST['blood'];
    // @$_POST['religion'];
    // @$_POST['ph'];
    // @$_POST['em'];
    // @$_POST['nid'];
    // @$_POST['addr'];
    // @$_POST['city'];
    // @$_POST['st'];
    // @$_POST['dp'];
    // @$_POST['po'];
    // @$_POST['edu'];
    // @$_POST['jd'];
    // @$_POST['ld'];
    // @$_POST['agr'];
    // @$_POST['sta'];
    // @$_POST['pass'];
    // @$_POST['photo'];

    ?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title></title>

        <!-- <style>
        * {
            margin: 5px 10px;
        }
    </style> -->
    </head>

    <body>

        <!-- <h2 align="center">Update Information</h2> <br> -->


        <?php
        foreach ($user_list as $row) { ?>

            <form class="bg-light bg-gradient" action="" enctype="multipart/form-data" method="post" style="margin: 5px 20px;">

                <div class="row">
                    <div class="col">
                        <input class="form-control" type="text" name="id" value="<?php echo $row->id ?>" hidden> <br> <br>

                    </div>
                    <div class="col">
                        EId :
                        <input class="form-control" type="text" name="eid" value="<?php echo $row->eid ?>"> <br> <br>

                    </div>
                    <div class="col">
                        First Name :
                        <input class="form-control" type="text" name="fname" value="<?php echo $row->fname ?>"> <br> <br>

                    </div>
                    <div class="col">
                        Last Name :
                        <input class="form-control" type="text" name="lname" value="<?php echo $row->lname ?>"> <br> <br>

                    </div>


                </div>
                <div class="row">
                    <div class="col">
                        Father Name : &nbsp
                        <input class="form-control" type="text" name="faname" value="<?php echo $row->f_name ?>">
                        <br> <br>

                    </div>
                    <div class="col">
                        Mother Name :
                        <input class="form-control" type="text" name="maname" value="<?php echo $row->m_name ?>"> <br> <br>

                    </div>
                    <div class="col">
                        Gender :
                        <input class="form-control" type="text" name="gender" value="<?php echo $row->sex ?>"> <br> <br>

                    </div>
                    <div class="col">
                        Birth Day :
                        <input class="form-control" type="date" name="bday" value="<?php echo $row->birth_day ?>"> <br> <br>

                    </div>
                    <div class="col">

                        Blood :
                        <input class="form-control" type="text" name="blood" value="<?php echo $row->blood ?>"> <br> <br>
                    </div>
                    <div class="col">

                        Religion :
                        <input class="form-control" type="text" name="religion" value="<?php echo $row->religion ?>"> <br> <br>
                    </div>


                </div>
                <div class="row">
                    <div class="col">
                        email :
                        <input class="form-control" type="email" name="em" value="<?php echo $row->email ?>"> <br> <br>

                    </div>
                    <div class="col">

                        phone :
                        <input class="form-control" type="number" name="ph" value="<?php echo $row->cell ?>"> <br> <br>
                    </div>
                    <div class="col">
                        Nid :
                        <input class="form-control" type="number" name="nid" value="<?php echo $row->nid ?>"> <br> <br>

                    </div>
                    <div class="col">
                        Address :
                        <input class="form-control" type="text" name="addr" value="<?php echo $row->address ?>"> <br> <br>

                    </div>
                    <div class="col">

                        City:
                        <input class="form-control" type="text" name="city" value="<?php echo $row->city ?>"> <br> <br>
                    </div>
                    <div class="col">
                        states : &nbsp
                        <input class="form-control" type="text" name="st" value="<?php echo $row->state ?>">
                        <br> <br>

                    </div>
                    <div class="col">
                        Department :
                        <input class="form-control" type="number" name="dp" value="<?php echo $row->department ?>"> <br> <br>

                    </div>
                    <div class="col">

                        Position:
                        <input class="form-control" type="number" name="po" value="<?php echo $row->position ?>"> <br> <br>

                    </div>
                    <div class="row">
                        <div class="col">
                            Education:
                            <input class="form-control" type="text" name="edu" value="<?php echo $row->education ?>"> <br> <br>
                        </div>
                        <div class="col">
                            Join date:
                            <input class="form-control" type="date" name="jd" value="<?php echo $row->join_date ?>"> <br> <br>
                        </div>
                        <div class="col">
                            Leave date :
                            <input class="form-control" type="date" name="ld" value="<?php echo $row->leave_date ?>"> <br> <br>
                        </div>
                        <div class="col">
                            Access Group :
                            <input class="form-control" type="number" name="agr" value="<?php echo $row->access_group ?>"> <br> <br>
                        </div>
                        <div class="col">
                            Status :
                            <input class="form-control" type="text" name="sta" value="<?php echo $row->status ?>"> <br> <br>
                        </div>
                        <div class="col">
                            Password :
                            <input class="form-control" type="text" name="pass" value="<?php echo $row->password ?>"> <br> <br>
                        </div>
                        <!-- <div class="col">
                    Upload your Photo :
                    <input class="form-control" type="file" name="new-photo"><br> <br>
                    <input class="form-control" type="hidden" name="photo" value="<?php //echo $row['photo'] 
                                                                                    ?>"> <br> <br>
                </div> -->


                        <div class="col">
                            <label class="form-label">Picture</label>
                            <input type="file" class="form-control" name="new-image">
                            <img src="images/<?= $row->image ?>" class="rounded-circle" style="width: 150px;height: 150px;">
                            <input type="hidden" name="old_image" value="<?= $row->image ?>">
                        </div>



                    </div>
                    <div class="row">
                        <div class="d-grid gap-2 col-1 mx-auto">
                            <input class="btn btn-primary btn-block" type="submit" name="Update" value="Update">
                        </div>



                    </div>



            </form>

        <?php
        }
        ?>



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