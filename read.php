<?php
session_start();
if (!isset($_SESSION['eid'])) {
    header("Location:login.php");
}
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include_once('functions.php');
//SELECT name, COUNT(id) as un,COUNT(DISTINCT(psID)) as thana FROM 'district',`unions` WHERE district.orderBy=unions.distID;


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All user information</h1>
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


    if (isset($_GET["search"])) {

        $user_list = Crud::user_search($_GET);
        var_dump($user_list);
        exit();
        if (empty($user_list)) {
            //   echo "Update Successfull";
            echo "<script>
              window.location.href='http://localhost/ecrud/admin2/read.php';
              </script>";
            // header("Location: http://localhost/ecrud/admin2/read.php");

        }

        //var_dump($result);
    } else {
        $user_list =  Crud::user_list();
    }

    // Pagination start




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
            margin: 5px 5px;
        }
    </style> -->
    </head>

    <body>
        <h1></h1>

        <script language="JavaScript" type="text/javascript" class="alert alert-warning">
            function checkDelete() {
                return confirm('Are you sure?');
            }
        </script>




        <?php


        // $result = QB::table("user")->select('*')->get();
        // $con = mysqli_connect('localhost', 'root', '', 'crud');
        // $sql = "SELECT * FROM user ORDER BY id ";
        // $result = mysqli_query($con, $sql);
        ?>
        <!-- search bar -->

        <div class=" shadow-sm p-3 mb-5 bg-body rounded" style="margin: 5px 200px;">
            <form method="get" action="">
                <div class="row ">
                    <div class="col-6">

                        <select class="form-select" name="gender">
                            <option value="">ALL Gender</option>
                            <?php foreach (documents_status() as $key => $value) { ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php } ?>

                        </select>


                    </div>
                    <div class="col-6">

                        <select class="form-select" name="blood">
                            <option value="">ALL Blood</option>
                            <?php foreach (blood() as $key => $value) { ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php } ?>
                        </select>



                    </div>



                </div>
                <br>
                <div class="row">
                    <div class="col-6">

                        <select class="form-select" name="department">
                            <option value="">ALL Department</option>
                            <?php foreach (department() as $key => $value) { ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php } ?>
                        </select>



                    </div>
                    <div class="col-6">

                        <select class="form-select" name="access">
                            <option value="">ALL Access Group</option>
                            <?php foreach (access() as $key => $value) { ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php } ?>
                        </select>



                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <select class="form-select" name="religion">
                            <option value="">ALL Religion</option>
                            <?php foreach (religion() as $key => $value) { ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                            <?php } ?>
                        </select>



                    </div>


                    <div class=" col-1 mx-auto">
                        <input type="submit" class="btn btn-primary" name="search" value="Search">


                    </div>
                </div>

            </form>

        </div>


        <!--      <br> -->

        <!-- pagination start -->


        <!-- pagination end -->



        <table class="table table-bordered " style="margin: 5px 20px;">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Eid</th>
                    <th scope="col">Name</th>
                    <!-- <th scope="col">position</th> -->
                    <th scope="col">Gender</th>
                    <!-- <th scope="col"> bday</th>-->
                    <th scope="col">Blood</th>
                    <th scope="col">Religion</th>
                    <!-- <th scope="col">Phone</th> -->
                    <!-- <th scope="col"> email</th>
                    <th scope="col">nid</th> -->
                    <!-- <th scope="col">address</th> -->
                    <!-- <th scope="col">city</th>
                    <th scope="col">state</th> -->
                    <!-- <th scope="col">Department</th> -->
                    <!-- <th scope="col">position</th>
                    <th scope="col">education</th> -->
                    <th scope="col">Access group</th>
                    <!-- <th scope="col">status</th>
                    <th scope="col"> photo</th>  -->
                    <th scope="col"> Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sn = 0;
                foreach ($user_list as $row) {
                    $sn++; ?>
                    <tr>
                        <td><?php echo $sn ?> </td>

                        <td><a class="link-primary" style="text-decoration: none;" href="user_profile.php?id=<?php echo base64_encode($row->id); ?>">
                                <?php echo $row->eid; ?>
                            </a> </td>

                        <td><a class="link-primary" style="text-decoration: none;" href="user_profile.php?id=<?php echo base64_encode($row->id); ?>">
                                <?php echo $row->fname  ?>
                            </a> </td>





                        <td><?php return_documents_status($row->sex); ?> </td>
                        <!--  <td><?php // echo $row->birth_day; 
                                    ?> </td>-->
                        <td><?php return_blood($row->blood);
                            ?> </td>
                        <td><?php if (!empty($row->religion) && is_numeric($row->religion)) {
                                echo religion()[$row->religion];
                            }
                            // return_religion($row->religion); 
                            ?> </td>


                        <!-- <td><?php //echo $row->cell; ?> </td> -->
                        <!-- <td><?php // echo $row->email; 
                                    ?> </td>
                        <td><?php // echo $row->nid; 
                            ?> </td>  -->
                        <!-- <td><?php // echo $row->address; 
                                    ?> </td> -->

                        <!-- <td><?php // echo $row->city; 
                                    ?> </td>
                        <td><?php //echo $row->state; 
                            ?> </td> -->

                        <!-- <td><?php //return_department($row->department);
                            ?> </td> -->
                        <!-- <td><?php // echo $row->position; 
                                    ?> </td>
                        <td><?php // echo $row->education; 
                            ?> </td> -->
                        <td><?php return_access($row->access_group); ?> </td>

                        <!-- <td><? php // echo $row->status; 
                                    ?> </td>-->

                        <!-- <td><?php
                                    //echo '<img src="images/' . $row->image . '." style="width: 100px;height: 100px;">';
                                    ?> </td> -->



                        <td>
                            <a class="btn btn-danger" href="delete.php?id=<?php echo base64_encode($row->id); ?>" onclick="return checkDelete()">Delete</a> &nbsp;

                            <a class="btn btn-primary" href="update.php?id=<?php echo base64_encode($row->id); ?>">Edit</a>
                        </td>

                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>






        <!-- search start -->

</div>








<?php
include('includes/footer.php');

?>


<!-- search End -->
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>