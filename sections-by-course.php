<?php
require_once("util-db.php");
require_once("model-sections-by-course.php");

$pageTitle = "Section by course";
include "view-header.php";
$courses = selectSectionsByCourse($_POST['cid']);
include "view-sections-by-course.php";
include "view-footer.php";
?>
