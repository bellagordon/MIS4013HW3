<?php
require_once("util-db.php");
require_once("model-doctor-by-chief.php");

$pageTitle = "Doctors by Head Surgeon";
include "view-header.php";
$instructors = selectDoctorsbyChief($_POST['iid']);
include "view-doctors-by-chief.php";
include "view-footer.php";
?>
