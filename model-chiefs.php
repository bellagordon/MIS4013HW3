<?php
function selectChiefs() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT chief_id, i.doctor_id, chief_name, chief_dpt FROM chiefs c JOIN instructors i ON c.doctorid = i.doctorid");
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
