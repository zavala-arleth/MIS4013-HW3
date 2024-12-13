<?php
require_once 'model-product-by-brand.php';
?>
<h1>Products by Brands </h1>
<div class="table-responsive">
  <table class="table">
    <thead>
    <tr>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Brand ID</th>
    </tr>
    </thead> 
    <tbody>
      <?php
        $result=  selectproductByBrand();
        while ($product = $result->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $product ['product_id']; ?></td>
             <td><?php echo $product ['product_name']; ?></td>
            <td><?php echo $product ['brand_id']; ?></td>
          </tr>
          <?php
          }
          ?>
    </tbody> 
  </table>
</div>
