<?php
require_once("util-db.php");
require_once("model-chiefs.php");

$pageTitle = "Head Surgeons";
include "view-header.php";
$chiefs = selectChiefs();
include "view-chiefs.php";
include "view-footer.php";
?>
