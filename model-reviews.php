<?php
require_once 'util-db.php';
function selectreviews() {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT review_id, review_text, rating, review_date FROM reviews");
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
