<?php
function selectDoctorsByChief($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT i.doctor_id, doctor_name FROM chief c join instructor i on i.doctor_id = c.doctor_id");
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
