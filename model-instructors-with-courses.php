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

function selectCoursesbyinstructor($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.patient_id, patient_name, patient_description, room, day_time FROM course c join section s on s.patient_id = c.patient_id where s.doctor_id=?");
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



?>
