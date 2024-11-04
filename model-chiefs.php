<?php
function selectChiefs() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT chief_id, chief_name, chief_dpt FROM chief");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertChief($chName, $chDpt, $iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3_database`.`chief` (`doctor_id`, `patient_name`, `patient_description`) VALUES ( ?, ?, ?)");
        $stmt->bind_param("ss", $iid, $chName, $chDpt);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editChief($chName, $chDpt, $iid, $chid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `hw3_database`.`chief` set `chief_name` = ?, `chief_dpt` = ?, `doctor_id`=? WHERE chief_id =?");
        $stmt->bind_param("ssi", $iid, $chName, $chDpt, $chid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteChief($chid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `hw3_database`.`chief` WHERE chief_id = ?");
        $stmt->bind_param("i",$cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

?>
