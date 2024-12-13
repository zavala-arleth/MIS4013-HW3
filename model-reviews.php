<?php
require_once 'util-db.php';
function selectreviews() {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("   SELECT r.review_id, r.rating, r.review_text, r.review_date, p.product_id
      FROM reviews r
      INNER JOIN product p ON r.product_id = p.product_id");
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
