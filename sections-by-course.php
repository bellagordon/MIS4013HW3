<?php
require_once("util-db.php");
require_once("model-sections-by-course.php");

$pageTitle = "Nurses assigned to Patient";
include "view-header.php";
$sections = selectSectionsByCourse($_POST['cid']);
include "view-sections-by-course.php";
include "view-footer.php";
?>
