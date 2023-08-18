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
                    <h1 class="m-0">profile Page</h1>
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



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title></title>
        <style>
            /* * {
            margin: 5px 5px;
        } */


            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            /* setting the text-align property to center*/
            td {
                padding: 5px;
                text-align: center;
            }

            .table {
                width: 30%;
                margin: 0 auto !important;
            }
        </style>
    </head>

    <body>



        <!-- <h1 align="center">My Profile</h1> -->

        <?php
        // $con = mysqli_connect('localhost', 'root', '', 'crud');

        // $id = $_GET['id'];

        // $sql = "SELECT * FROM user WHERE id='$id' ";
        // $res = mysqli_query($con, $sql);



        $user_list =  Crud::user_update_list();

        ?>
        <table class="table" style="margin: 5px 20px;">

            <?php
            foreach ($user_list as $row) { ?>
                <tr>
                    <td>photo</td>
                    <td><?php
                        echo '<img src="images/' . $row->image . '." style="width: 100px;height: 100px;">';
                        ?> </td>

                </tr>
                <tr>
                    <td>ID</td>
                    <td><?php echo $row->id ?> </td>
                </tr>
                <tr>
                    <td>Eid</td>
                    <td><?php echo $row->eid ?> </td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><?php echo $row->fname ?> </td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo $row->lname ?> </td>
                </tr>
                <tr>
                    <td>Father Name</td>
                    <td><?php echo $row->f_name ?> </td>
                </tr>
                <tr>
                    <td>Mother Name</td>
                    <td><?php echo $row->m_name  ?> </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><?php return_documents_status($row->sex) ?> </td>
                </tr>
                <tr>
                    <td>Birthday</td>
                    <td><?php echo $row->birth_day  ?> </td>
                </tr>
                <tr>
                    <td>Blood Group</td>
                    <td><?php return_blood($row->blood); ?></td>
                </tr>

                <tr>
                    <td>Religion</td>
                    <td><?php return_religion($row->religion); ?> </td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><?php echo $row->cell  ?> </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><?php echo $row->email  ?> </td>
                </tr>
                <tr>
                    <td>Nid</td>
                    <td><?php echo $row->nid  ?> </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $row->address  ?> </td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><?php echo $row->city  ?> </td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><?php echo $row->state  ?> </td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td><?php return_department($row->department) ?> </td>
                </tr>
                <tr>
                    <td>Position</td>
                    <td><?php echo $row->position ?> </td>
                </tr>
                <tr>
                    <td>Education</td>
                    <td><?php echo $row->education ?> </td>
                </tr>
                <tr>
                    <td>join_date</td>
                    <td><?php echo $row->join_date  ?> </td>
                </tr>
                <tr>
                    <td>leave_date</td>
                    <td><?php echo $row->leave_date  ?> </td>
                </tr>
                <tr>
                    <td>access_group</td>
                    <td><?php return_access($row->access_group) ?> </td>
                </tr>
                <tr>
                    <td>status</td>
                    <td><?php echo $row->status  ?> </td>
                </tr>



            <?php
            }
            ?>




        </table>

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