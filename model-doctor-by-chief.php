<?php
function selectDoctorsbyChief($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT i.doctor_id, doctor_name FROM instructor i join chief c on c.doctor_id = i.doctor_id where c.chief_id=?");
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
