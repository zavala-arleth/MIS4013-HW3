<h>Instructors</h>
<div class="table-responsive">
  <table class="table">
    <thread>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Office</th>
    </tr>
    </thread> 
    <body>
      <?php
        while ($instructor = $instructors->fetch_assoc()) {
          ?>
          <tr>
            <td><? php echo $instructor ['instructor_id']; <?</td>
             <td><? php echo $instructor ['instructor_name']; <?</td>
             <td><? php echo $instructor ['office_number']; <?</td>
          </tr>
  </table>
</div>
