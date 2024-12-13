
<?php
function selectproductByBrand($brandId) {
  try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("SELECT p.product_id, p.product_name, b.id AS brand_id, b.brand_name FROM product p JOIN brand b ON p.brand_id = b.id WHERE p.product_id = ?
");
    $stmt->bind_param("i", $bradnId);
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
