<?php
require_once("util-db.php");
require_once("model-instructors.php");

$pageTitle = "Instructors";
include "view-header.php";
$instructors = selectInstructors();
include "view-instructors.php";
include "view-footer.php";
?>
