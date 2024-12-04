
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

function insertInstructor($iName, $iNum, $cid) {
    try {
        $conn = get_db_connection();
r
        $stmt = $conn->prepare("INSERT INTO doctors (doctor_name, office_number) VALUES (?, ?)");
        $stmt->bind_param("ss", $iName, $iNum);
        $stmt->execute();
        $doctorId = $stmt->insert_id; 

     
        if ($cid) {
            $stmt = $conn->prepare("INSERT INTO doctor_patient (doctor_id, patient_id) VALUES (?, ?)");
            $stmt->bind_param("ii", $doctorId, $cid);
            $stmt->execute();
        }

        $conn->close();
        return true;
    } catch (Exception $e) {
        $conn->close();
        error_log("Error inserting instructor: " . $e->getMessage());
        return false;
    }
}


function editInstructor($iName, $iNum, $iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `hw3_database`.`instructor` set `doctor_name` = ?, `office_number` = ?  WHERE doctor_id =?");
        $stmt->bind_param("ssi",$iName, $iNum, $iid);
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
