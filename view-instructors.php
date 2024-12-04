<h>Shoes</h>
<div class="table-responsive">
  <table class="table">
    <thread>
    <tr>
      <th>ID</th>
      <th>Brand Name</th>
      <th>Founded Year</th>
      <th>Country</th>
    </tr>
    </thread> 
    <body>
      <?php
        while ($brand = $instructors->fetch_assoc()) {
          ?>
          <tr>
            <td><? php echo $brand ['id']; <?</td>
             <td><? php echo $brand ['brand_name']; <?</td>
             <td><? php echo $brand ['founded_year']; <?</td>
            <td><? php echo $brand ['country']; <?</td>
          </tr>
  </table>
</div>
