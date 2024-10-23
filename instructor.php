<?php
require_once("util-db.php");
require_once("model-instructors.php");

$pageTitle = "Doctors";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertInstructor($_POST['iName'], $_POST['iNum'])) {
        echo '<div class="alert alert-success" role="alert"> Doctor added! </div>';
      } else {
         echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
     case "Edit":
      if (editInstructor($_POST['iName'], $_POST['iNum'], $_POST['iid'])) {
        echo '<div class="alert alert-success" role="alert"> Doctor edited! </div>';
      } else {
         echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
     case "Delete":
      if (deleteInstructor($_POST['iid'])) {
        echo '<div class="alert alert-success" role="alert"> Doctor deleted! </div>';
      } else {
         echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
  }
}

$instructors = selectInstructors();
include "view-instructors.php";
include "view-footer.php";
?>
