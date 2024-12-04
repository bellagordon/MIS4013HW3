

<?php
function selectInstructors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT doctor_id, doctor_name, office_number FROM instructor");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectPatientsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT patient_id, patient_name, patient_description FROM course order by patient_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertInstructor($iName, $iNum, $cName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3_database`.`instructor` (`doctor_name`, `office_number`) VALUES (?, ?)");
        $stmt->bind_param("ss", $iName, $iNum);
        $success = $stmt->execute();
        $doctor_id = $conn->insert_id;
        if ($success) {
            $stmt = $conn->prepare("INSERT INTO `hw3_database`.`section` (`doctor_id`, `patient_name`) VALUES (?, ?)");
            $stmt->bind_param("is", $iid, $cName);
            $success = $stmt->execute();
        }
        $conn->close();
        return $success;

    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function editInstructor($iName, $iNum, $cName, $iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `hw3_database`.`instructor` set `doctor_name` = ?, `office_number` = ?, `patient_name` = ?  WHERE doctor_id =?");
        $stmt->bind_param("ssi",$iName, $iNum, $cName, $iid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteInstructor($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `hw3_database`.`instructor` WHERE doctor_id = ?");
        $stmt->bind_param("i",$iid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
