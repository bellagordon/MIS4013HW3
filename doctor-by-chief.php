<?php
require_once("util-db.php");
require_once("model-doctor-by-chief.php");

$pageTitle = "Doctors by Head Surgeon";
include "view-header.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['actionType'] === 'Edit') {
    $chief_id = filter_input(INPUT_POST, 'chid', FILTER_VALIDATE_INT);
    $doctor_id = filter_input(INPUT_POST, 'iid', FILTER_VALIDATE_INT);

    if ($chief_id && $doctor_id) {
        require_once("model-doctors-by-chief.php");
        $result = updateChiefDoctor($chief_id, $doctor_id);

        if ($result > 0) {
            echo "Doctor updated successfully!";
        } else {
            echo "No changes made or update failed.";
        }
    } else {
        echo "Invalid input data.";
    }
}


$doctors = selectDoctorsbyChief($_POST['cid']);
include "view-doctors-by-chief.php";
include "view-footer.php";
?>
