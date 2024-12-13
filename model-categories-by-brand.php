
<?php
function selectcategoriesByBrand($iid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT p.product_id, p.product_name, b.id AS brand_id, b.brand_name FROM product p JOIN brands b ON p.brand_id = b.id WHERE p.product_id = ?
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
