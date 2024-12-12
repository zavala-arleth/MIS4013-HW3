<?php
require_once 'util-db.php';
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
function insertCategories($category_id, $category_name)
  {
      try {
    $conn = get_db_connection();
    $stmt = $conn->prepare("INSERT INTO 'categories( 'category_name' ) VALUES (?,?)FROM 'categories'");
    $stmt->bind_param("ss", $uEmail);
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
