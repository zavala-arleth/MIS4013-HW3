<?php
function selectshoe_brands() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT id, brand_name, founded_year, country FROM shoe_brand");
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
