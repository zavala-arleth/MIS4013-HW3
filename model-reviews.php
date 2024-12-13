<?php
require_once 'util-db.php';
function selectreviews() {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("    SELECT r.review_id, r.rating, r.review_text, r.review_date, c.category_name
    FROM reviews r
    INNER JOIN categories c ON r.category_id = c.category_id");
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
