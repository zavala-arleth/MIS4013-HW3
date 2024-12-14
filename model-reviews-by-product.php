<?php
function selectreviewsByProduct($pid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT r.review_id, r.rating, r.review_text, r.review_date, r.product_id FROM reviews r  WHERE r.product_id = ?"
");
    $stmt->bind_param("i", $pid);
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
