<?php
require_once("util-db.php");
require_once("model-courses-by-section.php");

$pageTitle = "Patients by Nurse";
include "view-header.php";
$courses = selectCoursesbySection($_GET['cid']);
include "view-courses-by-section.php";
include "view-footer.php";
?>
