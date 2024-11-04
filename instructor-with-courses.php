<?php
require_once("util-db.php");
require_once("model-instructors-with-courses.php");

$pageTitle = "Doctors with Patients";
include "view-header.php";
$instructors = selectInstructors();
include "view-instructors-with-courses.php";
include "view-footer.php";
?>
