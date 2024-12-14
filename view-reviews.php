<?php
require_once 'model-reviews.php';
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
      $result = selectreviews();
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
require_once 'model-reviews-by-product.php';
?>
<h1>Reviews by Products</h1>
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
         <form method="post" action="reviews-by-product.php">
        <input type="hidden" name="pid" value="<?php echo $review ['id']; ?>">
        <button type="submit" class="btn-primary">Shoe</button>
      </form>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>
