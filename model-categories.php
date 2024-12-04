<?php
function selectcategories() {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT category_id, category_name FROM 'categories'");
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
