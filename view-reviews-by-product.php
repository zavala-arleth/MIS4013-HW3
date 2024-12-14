<?php
require_once 'model-reviews-by-product.php';
?>
<h1>Reviews</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Review ID</th>
        <th>Rating</th>
        <th>Review Text</th>
        <th>Review Date</th>
        <th>Product ID</th>
      </tr>
    </thead> 
    <tbody>
      <?php
      $result = selectreviewsByProduct();
      while ($review = $result->fetch_assoc()) { 
        ?>
        <tr>
          <td><?php echo $review['review_id']; ?></td>
          <td><?php echo $review['rating']; ?></td>
          <td><?php echo $review['review_text']; ?></td>
          <td><?php echo $review['review_date']; ?></td>
          <td><?php echo $review['product_id']; ?></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>
