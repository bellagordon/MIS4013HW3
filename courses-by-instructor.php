<?php
require_once("util-db.php");
require_once("model-courses-by-instructor.php");

$pageTitle = "Patients by Attending Doctor";
include "view-header.php";
$courses = selectCoursesbyinstructor($_GET['id']);
include "view-courses-by-instructor.php";
include "view-footer.php";
?>
