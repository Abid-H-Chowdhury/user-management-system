<?php

//$PAGINATION_PERPAGE =25;
$localhost = "localhost";
$db = "crud";
$users = "root";
$pass = "";
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null :
    define('SITE_ROOT', DS . 'wamp64' . DS . 'www' . DS . 'ecrud');
defined('SITE_URL')   ? null : define("SITE_URL", "http://localhost/ecrud/");

//defined('SITE_URL')   ? null : define("SITE_URL", "http://localhost/directory2/");

date_default_timezone_set("Asia/Dhaka");
$gtime = date("Y-m-d H:i:s");
$gdate = date("Y-m-d");
require 'Query_builder/vendor/autoload.php';
$config = array(
    'driver'    => 'mysql', // Db driver
    'host'      => $localhost,
    'database'  => $db,
    'username'  => $users,
    'password'  => $pass,
    'charset'   => 'utf8', // Optional
    'collation' => '', // Optional
    'prefix'    => '', // Table prefix, optional
);
new \Pixie\Connection('mysql', $config, 'QB');
// require 'esadmin/class/common_helper.php';

$PAGINATION_PERPAGE = 10;

include_once("functions.php");
// function pagination($query, $per_page = 10, $page = 1, $url = '?')
// {

//     $query = "SELECT COUNT(*) as `num` FROM {$query}";
//     $row = Q::query($query)->first();

//     $total = $row->num;

//     $adjacents = "2"; // default was  2

//     $firstlabel = "&lsaquo;&lsaquo; First";
//     $prevlabel = "&lsaquo; Prev";
//     $nextlabel = "Next &rsaquo;";
//     $lastlabel = "Last &rsaquo;&rsaquo;";

//     $page = ($page == 0 ? 1 : $page);
//     $start = ($page - 1) * $per_page;

//     $first = 1;
//     $prev = $page - 1;
//     $next = $page + 1;

//     $lastpage = ceil($total / $per_page);

//     $lpm1 = $lastpage - 1; // //last page minus 1

//     $pagination = "";
//     if ($lastpage > 1) {
//         $pagination .= "<nav aria-label='Page navigation example'> <ul class='pagination'>";
//         $pagination .= "<li class='page_info'>&nbsp;Page {$page} of {$lastpage}</li>";

//         if ($page > 1) {
//             $pagination .= "<li><a href='{$url}pages={$first}'>{$firstlabel}</a></li>";
//             $pagination .= "<li><a href='{$url}pages={$prev}'>{$prevlabel}</a></li>";
//         }

//         if ($lastpage < 3 + ($adjacents * 2)) {
//             for ($counter = 1; $counter <= $lastpage; $counter++) {
//                 if ($counter == $page)
//                     $pagination .= "<li><a class='active'>{$counter}</a></li>";
//                 else
//                     $pagination .= "<li><a href='{$url}pages={$counter}'>{$counter}</a></li>";
//             }
//         } elseif ($lastpage > 3 + ($adjacents * 2)) {

//             if ($page < 1 + ($adjacents * 2)) {

//                 for ($counter = 1; $counter < 2 + ($adjacents * 2); $counter++) {
//                     if ($counter == $page)
//                         $pagination .= "<li><a class='active'>{$counter}</a></li>";
//                     else
//                         $pagination .= "<li><a href='{$url}pages={$counter}'>{$counter}</a></li>";
//                 }
//                 $pagination .= "<li class='dot'></li>";
//                 $pagination .= "<li><a href='{$url}pages={$lpm1}'>{$lpm1}</a></li>";
//                 $pagination .= "<li><a href='{$url}pages={$lastpage}'>{$lastpage}</a></li>";
//             } elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {

//                 $pagination .= "<li><a href='{$url}pages=1'>1</a></li>";
//                 $pagination .= "<li><a href='{$url}pages=2'>2</a></li>";
//                 $pagination .= "<li class='dot'></li>";
//                 for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
//                     if ($counter == $page)
//                         $pagination .= "<li><a class='active'>{$counter}</a></li>";
//                     else
//                         $pagination .= "<li><a href='{$url}pages={$counter}'>{$counter}</a></li>";
//                 }
//                 $pagination .= "<li class='dot'></li>";
//                 $pagination .= "<li><a href='{$url}pages={$lpm1}'>{$lpm1}</a></li>";
//                 $pagination .= "<li><a href='{$url}pages={$lastpage}'>{$lastpage}</a></li>";
//             } else {

//                 $pagination .= "<li><a href='{$url}pages=1'>1</a></li>";
//                 $pagination .= "<li><a href='{$url}pages=2'>2</a></li>";
//                 $pagination .= "<li class='dot'></li>";
//                 for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
//                     if ($counter == $page)
//                         $pagination .= "<li><a class='active'>{$counter}</a></li>";
//                     else
//                         $pagination .= "<li><a href='{$url}pages={$counter}'>{$counter}</a></li>";
//                 }
//             }
//         }
//         // temp solution for not showing pagination
//         if (!isset($counter)) {
//             $counter = $total;
//         }

//         if ($page < $counter - 1) {
//             $pagination .= "<li><a href='{$url}pages={$next}'>{$nextlabel}</a></li>";
//             $pagination .= "<li><a href='{$url}pages=$lastpage'>{$lastlabel}</a></li>";
//         }

//         $pagination .= "</ul> </nav>";
//     }

//     return $pagination;
// }



// function curPageURL()
// {
//     $targetpage1 = basename($_SERVER['REQUEST_URI']);     //your file name  (the name of this file)
//     //$targetpage2 = explode("&page", $targetpage1);
//     list($targetpage) = explode("&pages", $targetpage1);
//     return $targetpage = $targetpage . "&";
// }
