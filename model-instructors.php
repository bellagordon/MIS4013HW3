

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
    global $db;
    $query = "INSERT INTO instructor (doctor_name, office_number, patient_id) 
              VALUES (:iName, :iNum, :cid)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':iName', $iName);
    $stmt->bindValue(':iNum', $iNum);
    $stmt->bindValue(':cid', $cid); // Link to patient ID
    return $stmt->execute();
}


function editInstructor($iName, $iNum, $iid, $cid) {
    global $db;
    $query = "UPDATE instructor 
              SET doctor_name = :iName, office_number = :iNum, patient_id = :cid 
              WHERE doctor_id = :iid";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':iName', $iName);
    $stmt->bindValue(':iNum', $iNum);
    $stmt->bindValue(':cid', $cid); // Link to patient ID
    $stmt->bindValue(':iid', $iid);
    return $stmt->execute();
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


?>
