<?php
require_once("util-db.php");
require_once("model-instructors-with-courses.php");

$pageTitle = "Doctors with Patients";
include "view-header.php";
$instructors = selectInstructors();
$sections = selectNurses();
include "view-instructors-with-courses.php";
include "view-footer.php";
?>
