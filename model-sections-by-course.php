<?php
function selectSectionsByCourse($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT nurse_id, nurse_name, room, day_time FROM course c join section s on s.patient_id = c.patient_id where s.patient_id=?");
        $stmt->bind_param("i", $cid);
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
