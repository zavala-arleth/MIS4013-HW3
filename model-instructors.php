<?php
function selectInstructors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Instructor_ID, instucotr_name,office_number FROM instructor");
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
