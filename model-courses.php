
<?php
function selectCourses() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT patient_id, patient_name, patient_description FROM course");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertCourse($cName, $cDesc, $sid) {
    try {
        $conn = get_db_connection();

        $stmt = $conn->prepare("INSERT INTO `hw3_database`.`course` (`patient_name`, `patient_description`) VALUES (?, ?)");
        $stmt->bind_param("ss", $cName, $cDesc);
        $stmt->execute();
        $patientId = $stmt->insert_id;

        if ($sid) {
            $stmt = $conn->prepare("INSERT INTO nurse_patient (nurse_id, patient_id) VALUES (?, ?)");
            $stmt->bind_param("ii", $sid, $patientId);
            $stmt->execute();
        }

        $conn->close();
        return true;
    } catch (Exception $e) {
        $conn->close();
        error_log("Error inserting course: " . $e->getMessage());
        return false;
    }
}



function insertCourse($cName, $cDesc) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3_database`.`course` (`patient_name`, `patient_description`) VALUES ( ?, ?)");
        $stmt->bind_param("ss", $cName, $cDesc);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editCourse($cName, $cDesc, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `hw3_database`.`course` set `patient_name` = ?, `patient_description` = ?  WHERE patient_id =?");
        $stmt->bind_param("ssi",$cName, $cDesc, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteCourse($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `hw3_database`.`course` WHERE patient_id = ?");
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
