
<h>Reviews</h>
<div class="table-responsive">
  <table class="table">
    <thread>
    <tr>
      <th>Review ID</th>
      <th>Rating</th>
      <th>Review Text</th>
      <th>Review Date</th>
    </tr>
    </thread> 
    <body>
      <?php
        while ($reviews = $reviews->fetch_assoc()) {
          ?>
          <tr>
            <td><? php echo $reviews ['review_id']; <?</td>
             <td><? php echo $reviews ['rating']; <?</td>
            <td><? php echo $reviews ['review_text']; <?</td>
            <td><? php echo $reviews ['review_date']; <?</td>
          </tr>
  </table>
</div>
