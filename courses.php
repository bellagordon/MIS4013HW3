<?php
require_once("util-db.php");
require_once("model-courses.php");

$pageTitle = "Patients";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      insertCourse($_POST['cName'], $_POST['cDesc'];
      break;
    
  }
}

$courses = selectCourses();
include "view-courses.php";
include "view-footer.php";
?>
