
<?php
function selectCoursesbyInstructor($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.patient_id, patient_name, patient_description, room, day_time, s.nurse_name, i.doctor_name FROM course c join section s on s.patient_id = c.patient_id join instructor i on s.doctor_id = i.doctor_id where s.doctor_id=?");
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
