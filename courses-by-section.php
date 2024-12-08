<?php
require_once("util-db.php");
require_once("model-courses-by-section.php");

$pageTitle = "Patients by Nurse";
include "view-header.php";
$courses = selectCoursesbynurse($_GET['sid']);
include "view-courses-by-section.php";
include "view-footer.php";
?>
