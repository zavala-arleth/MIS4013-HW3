<?php
function selectshoe_categories() {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT category_id, category_name FROM 'shoe_categories'");
    $stmt->execute();
    $result - $stmt->get_result();
    $conn->close();
    return $result;
  } catch (Exception $e) {
    $conn->close();
    throw $e;
  }
}
?>
