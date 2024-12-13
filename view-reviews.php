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
    </tr>
    </thead> 
    <tbody>
      <?php
        $result = selectreviews();
        while ($reviews = $result->fetch_assoc()) {
          ?>
          <tr>
            <td><?php echo $reviews ['review_id']; ?></td>
             <td><?php echo $reviews ['rating']; ?></td>
            <td><?php echo $reviews ['review_text']; ?></td>
            <td><?php echo $reviews ['review_date']; ?></td>
          </tr>
            <?php
      }
      ?>
            </tbody>
  </table>
</div>
