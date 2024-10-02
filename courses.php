<?php
require_once("util-db.php");
require_once("model-courses.php");

$pageTitle = "Courses";
include "view-header.php";
$course = selectCourses();
include "view-courses.php";
include "view-footer.php";
?>
