
<h>Reviews</h>
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
        while ($reviews = $reviews->fetch_assoc()) {
          ?>
          <tr>
            <td><? php echo $reviews ['review_id']; <?</td>
             <td><? php echo $reviews ['rating']; <?</td>
            <td><? php echo $reviews ['review_text']; <?</td>
            <td><? php echo $reviews ['review_date']; <?</td>
          </tr>
            </tbody>
  </table>
</div>
