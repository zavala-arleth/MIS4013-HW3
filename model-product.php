<?php
require_once 'util-db.php';
function selectproduct() {
       $conn = get_db_connection();
    if (!$conn) {
        throw new Exception("Database connection failed.");
    }

    try {
       
        $stmt = $conn->prepare("SELECT product_id, product_name, category_id, brand_id FROM product");
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
