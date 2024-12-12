<h>Categories</h>
<div class="table-responsive">
  <table class="table">
    <thead>
    <tr>
      <th>Category ID</th>
      <th>Name</th>
    </tr>
    </thead> 
    <tbody>
      <?php
        while ($categories = $categories->fetch_assoc()) {
          ?>
          <tr>
            <td><? php echo $categories ['category_id']; ?></td>
             <td><? php echo $categories ['category_name']; ?></td>
          </tr>
            </tbody>
  </table>
</div>
