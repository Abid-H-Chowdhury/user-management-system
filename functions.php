<?php
include_once('includes/header.php');
function documents_status()
{
    return $array = array(

        "1" => "Male",
        "2" => "Female",
        "3" => "Other"

    );
}

function return_documents_status($id)
{
    switch ($id) {
        case 1:
            echo "Male";
            break;

        case 2:
            echo "Female";
            break;

        case 3:
            echo "Other";
            break;

        default:
            # code...
            break;
    }
}

function blood()
{
    return $array = array(

        "2" => "A+",
        "3" => "A-",
        "4" => "B+",
        "5" => "O+",
        "6" => "O-",
        "7" => "AB+",
        "8" => "AB-"

    );
}

function return_blood($id)
{
    switch ($id) {

        case 2:
            echo "A+";
            break;

        case 3:
            echo "A-";
            break;

        case 4:
            echo "B+";
            break;

        case 5:
            echo "B-";
            break;

        case 6:
            echo "O+";
            break;

        case 7:
            echo "O-";
            break;

        case 8:
            echo "AB+";
            break;

        case 9:
            echo "AB-";
            break;

        default:
            # code...
            break;
    }
}


function religion()
{
    return $array = array(

        "2" => "Muslim",
        "3" => "Hindu",
        "4" => "Christian",
        "5" => "Buddhist",
        "6" => "Others"

    );
}

function return_religion($id)
{
    switch ($id) {

        case 2:
            echo "Muslim";
            break;

        case 3:
            echo "Hindu";
            break;

        case 4:
            echo "Christian";
            break;

        case 5:
            echo "Buddhist";
            break;

        case 6:
            echo "Others";
            break;

        default:
            # code...
            break;
    }
}

function department()
{
    return $array = array(

        "1" => "Admin",
        "2" => "HR",
        "3" => "Accounts",
        "4" => "Business development",
        "5" => "Support Services",

    );
}

function return_department($id)
{
    switch ($id) {

        case 1:
            echo "Admin";
            break;

        case 2:
            echo "HR";
            break;

        case 3:
            echo "Accounts";
            break;

        case 4:
            echo "Business development";
            break;

        case 5:
            echo "Support Services";
            break;


        default:
            # code...
            break;
    }
}

function access()
{
    return $array = array(

        "1" => "CEO",
        "2" => "CTO",
        "3" => "Software Engineer",
        "4" => "Billing",
        "5" => "Admin",

    );
}

function return_access($id)
{
    switch ($id) {

        case 1:
            echo "CEO";
            break;

        case 2:
            echo "CTO";
            break;

        case 3:
            echo "Software Engineer";
            break;

        case 4:
            echo "Billing";
            break;

        case 5:
            echo "Admin";
            break;

        default:
            # code...
            break;
    }
}






// define a function to generate the unique user ID
function generateUserID($agr)
{
    $prefix = null;

    switch ($agr) {
        case "1":
            $prefix = "CE";
            break;
        case "2":
            $prefix = "CT";
            break;
        case "3":
            $prefix = "S";
            break;
        case "4":
            $prefix = "B";
            break;
        case "5":
            $prefix = "A";
            break;
        default:
            return null;
    }









    return  $prefix;
}
