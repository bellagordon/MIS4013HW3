
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
        $stmt = $conn->prepare("SELECT c.patient_id, patient_name, patient_description, room, day_time, nurse_id, s.doctor_id FROM course c join section s on s.patient_id = c.patient_id where s.doctor_id=?");
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
        $stmt = $conn->prepare("UPDATE `hw3_database`.`section` set `doctor_id` = ?, `patient_id` = ?, `nurse_name` = ?, `room` = ?, `day_time` = ? WHERE nurse_id =?");
        $stmt->bind_param("iissssi",$iid, $cid, $sName, $room, $time, $sid);
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
