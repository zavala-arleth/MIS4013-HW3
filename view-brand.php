<h>Shoe Brands</h>
<div class="table-responsive">
  <table class="table">
    <thread>
    <tr>
      <th>ID</th>
      <th>Brand Name</th>
      <th>Founded Year</th>
      <th>Country</th>
      <th></th>
    </tr>
    </thread> 
    <body>
      <?php
        while ($brand = $brand->fetch_assoc()) {
          ?>
          <tr>
            <td><? php echo $brand ['id']; <?</td>
             <td><? php echo $brand ['brand_name']; <?</td>
             <td><? php echo $brand ['founded_year']; <?</td>
            <td><? php echo $brand ['country']; <?</td>
            <td><a href="categories-by-brand.php?id=<?php echo $brand[brand_id]; ?>">Categories</a></td> 
          </tr>
  </table>
</div>
