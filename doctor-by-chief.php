<?php
require_once("util-db.php");
require_once("model-doctor-by-chief.php");

$pageTitle = "Doctors assigned to Head Surgeon";
include "view-header.php";
$doctors = selectDoctorsByChief($_POST['iid']);
include "view-doctor-by-chief.php";
include "view-footer.php";
?>
