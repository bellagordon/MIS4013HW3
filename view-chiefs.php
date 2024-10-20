<h1>Head Surgeons</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
      <th>Name</th>
      <th>Department</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
while ($chief = $chiefs->fetch_assoc()) {
  ?>
  <tr>
   <td><?php echo $chief['chief_id']; ?></td>
    <td><?php echo $chief['chief_name']; ?></td>
    <td><?php echo $chief['chief_dpt']; ?></td>
     <td>
       
   </td>
  </tr>
  <?php
}
