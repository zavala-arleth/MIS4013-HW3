<?php
require_once 'connection.php';
function selectbrand() {
       $conn = get_db_connection();
    if (!$conn) {
        throw new Exception("Database connection failed.");
    }

    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT id, brand_name, founded_year, country FROM brand");
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
