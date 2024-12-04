
<?php
function selectcategoriesByBrand($iid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT c.category_id, c.category_name FROM categories c join reviews r ON c.category_id = r.category_id where r.review_id=?
");
    $stmt->bind_param("i", $iid);
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
