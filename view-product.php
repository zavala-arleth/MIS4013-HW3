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
            <td><?php echo $product ['product_id']; ?></td>
             <td><?php echo $product ['product_name']; ?></td>
             <td><?php echo $product ['category_id']; ?></td>
            <td><?php echo $product ['brand_id']; ?></td>
          </tr>
         <form method="post" action="reviews-by-product.php">
        <input type="hidden" name="pid" value="<?php echo $product ['product_id']; ?>">
        <button type="submit" class="btn-primary">Shoe</button>
      </form>
          <?php
          }
          ?>
    </tbody> 
  </table>
</div>
