<?php
require_once 'model-categories.php';
?>
<h1>Categories</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Category ID</th>
        <th>Category Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = selectcategories();
      while ($category = $categories->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $category['category_id']; ?></td>
          <td><?php echo $category['category_name']; ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>
