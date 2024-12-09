
<?php
require_once("util-db.php");
require_once("model-instructors-with-courses.php");

$pageTitle = "All Records";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertSection($_POST['iid'], $_POST['cid'], $_POST['sName'], $_POST['room'], $_POST['time'])) {
        echo '<div class="alert alert-success" role="alert"> Record added! </div>';
      } else {
         echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
     case "Edit":
      if (editSection($_POST['iid'], $_POST['cid'], $_POST['sName'], $_POST['room'], $_POST['time'])) {
        echo '<div class="alert alert-success" role="alert"> Record edited! </div>';
      } else {
         echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
     case "Delete":
      if (deleteSection($_POST['sid'])) {
        echo '<div class="alert alert-success" role="alert"> Record deleted! </div>';
      } else {
         echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
  }
}


$instructors = selectInstructors();
include "view-instructors-with-courses.php";
include "view-footer.php";
?>
