<?php
require_once 'model-product.php';
?>
<h1>Products</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
    <tr>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Category ID</th>
      <th>Brand ID</th>
    </tr>
    </thead> 
    <tbody>
      <?php
        $result=  selectproduct();
        while ($product = $result->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $brand ['product_id']; ?></td>
             <td><?php echo $brand ['product_name']; ?></td>
             <td><?php echo $brand ['category_id']; ?></td>
            <td><?php echo $brand ['brand_id']; ?></td>
          </tr>
          <?php
          }
          ?>
    </tbody> 
  </table>
</div>
