<?php
require_once("util-db.php");
require_once("model-doctor-by-chief.php");

$pageTitle = "Doctors by Head Surgeon";
include "view-header.php";
$doctor = selectDoctorssbyChief($_GET['id']);
include "view-doctor-by-chief.php";
include "view-footer.php";
?>
