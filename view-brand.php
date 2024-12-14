<?php
require_once 'model-brand.php';
?>
<h1>Shoe Brands</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
    <tr>
      <th>ID</th>
      <th>Brand Name</th>
      <th>Founded Year</th>
      <th>Country</th>
    </tr>
    </thead> 
    <tbody>
      <?php
        $result=  selectbrand();
        while ($brand = $result->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $brand ['id']; ?></td>
             <td><?php echo $brand ['brand_name']; ?></td>
             <td><?php echo $brand ['founded_year']; ?></td>
            <td><?php echo $brand ['country']; ?></td>
          </td>
      <form method="post" action="product-by-brand.php">
        <input type="hidden" name="bid" value="<?php echo $brand ['id']; ?>">
        <button type="submit" class="btn-primary">Shoes</button>
      </form>
    </tbody>
  </td>
  </tr>
          <?php
          }
          ?>
    </tbody> 
  </table>
</div>
