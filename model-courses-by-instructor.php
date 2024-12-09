function selectCoursesbyInstructor($iid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT c.patient_id, patient_name, patient_description, room, day_time 
                                FROM course c 
                                JOIN section s ON s.patient_id = c.patient_id 
                                WHERE s.doctor_id = :iid");
        $stmt->bindParam(':iid', $iid, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        throw $e; // Re-throw for handling elsewhere
    }
}
