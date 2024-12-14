

<?php
function selectproductByBrand($pid) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT p.product_id, p.product_name, p.category_id, b.id AS brand_id, b.brand_name FROM product p JOIN brands b ON p.brand_id = b.id WHERE b.id = ?
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
