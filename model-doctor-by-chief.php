<?php
function selectDoctorsbyChief($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT i.doctor_id, doctor_name FROM instructor i join chief c on c.doctor_id = i.doctor_id where c.chief_id=?");
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

function selectInstructorsForInput() {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT doctor_id, doctor_name FROM instructor");
    $stmt->execute();
    $result = $stmt->get_result();
    $conn->close();
    return $result;
}

?>
