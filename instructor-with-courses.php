<?php
require_once("util-db.php");
require_once("model-instructors-with-courses.php");

$pageTitle = "Doctors with Patients";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertSection($_POST['$iid'], $_POST['$cid'], $_POST['$sName'], $_POST['$room'], $_POST['$time'])) {
        echo '<div class="alert alert-success" role="alert"> Patient added to Doctor! </div>';
      } else {
         echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
     case "Edit":
      if (editSection($_POST['$iid'], $_POST['$cid'], $_POST['$sName'], $_POST['$room'], $_POST['$time'])) {
        echo '<div class="alert alert-success" role="alert"> Patient edited by Doctor! </div>';
      } else {
         echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
     case "Delete":
      if (deleteSection($_POST['sid'])) {
        echo '<div class="alert alert-success" role="alert"> Patient deleted! </div>';
      } else {
         echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
  }
}

$sections = selectSections();
include "view-instructors-with-courses.php";
include "view-footer.php";
?>
