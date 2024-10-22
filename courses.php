<?php
require_once("util-db.php");
require_once("model-courses.php");

$pageTitle = "Patients";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertCourse($_POST['cName'], $_POST['cDesc'])) {
        echo '<div class="alert alert-success" role="alert"> Patient added! </div>';
      } else {
         echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
    
  }
}

$courses = selectCourses();
include "view-courses.php";
include "view-footer.php";
?>
