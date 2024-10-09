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

?>
