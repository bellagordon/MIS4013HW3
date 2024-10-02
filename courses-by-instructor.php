<?php
require_once("util-db.php");
require_once("model-courses-by-instructor.php");

$pageTitle = "Courses by instructor";
include "view-header.php";
$course = selectCoursesbyinstructor($_GET['id']);
include "view-courses-by-instructor.php";
include "view-footer.php";
?>
