
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



function selectCoursesbyInstructor($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
            SELECT 
                c.patient_id, 
                c.patient_name, 
                c.patient_description, 
                s.room, 
                s.day_time, 
                s.nurse_id, 
                s.nurse_name, 
                s.doctor_id 
            FROM 
                course c 
            INNER JOIN 
                section s 
            ON 
                c.patient_id = s.patient_id 
            WHERE 
                s.doctor_id = ?
        ");
        $stmt->bind_param("i", $iid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function selectInstructorsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT doctor_id, doctor_name FROM instructor order by doctor_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


function selectInstructorsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT patient_id, patient_name FROM course order by patient_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertSection($iid, $cid, $sName, $room, $time ) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `hw3_database`.`section` (`doctor_id`, `patient_id`, `nurse_name`, `room`, `day_time`) VALUES ( ?, ?, ?, ?, ?)");
        $stmt->bind_param("iisss", $iid, $cid, $sName, $room, $time);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function editSection($iid, $cid, $sName, $room, $time, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `hw3_database`.`section` 
            SET doctor_id = ?, patient_id = ?, nurse_name = ?, room = ?, day_time = ? 
            WHERE nurse_id = ?");
        $stmt->bind_param("iisssi", $iid, $cid, $sName, $room, $time, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}



function deleteSection($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `hw3_database`.`section` WHERE nurse_id = ?");
        $stmt->bind_param("i",$sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}


?>
