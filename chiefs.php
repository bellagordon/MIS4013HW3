<?php
require_once("util-db.php");
require_once("model-chiefs.php");

$pageTitle = "Head Surgeons";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertChief($_POST['iid'], ($_POST['chName'], $_POST['chDpt'])) {
        echo '<div class="alert alert-success" role="alert"> Chief surgeon added! </div>';
      } else {
         echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
     case "Edit":
      if (editChief($_POST['iid'],$_POST['chName'], $_POST['chDpt'], $_POST['chid'])) {
        echo '<div class="alert alert-success" role="alert"> Chief surgeon edited! </div>';
      } else {
         echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
     case "Delete":
      if (deleteCourse($_POST['chid'])) {
        echo '<div class="alert alert-success" role="alert"> Chief surgeon deleted! </div>';
      } else {
         echo '<div class="alert alert-danger" role="alert"> Error </div>';
      }
      break;
  }
}

$chiefs = selectChiefs();
include "view-chiefs.php";
include "view-footer.php";
?>
