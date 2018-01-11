<?php 

$con = mysqli_connect('localhost', 'root', '', 'fgc');
$teachers = $con->query('select * from teacher');

while($teacher = $teachers->fetch_object()) {
  echo $teacher->name . "\n";
}

die;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>all teachers</title>
  <!-- <style>
    table, tr, td, th {
      border: 1px solid #333;
      border-collapse: collapse;
    }
    td, th {
      padding: 10px;
    }
    tr:nth-child(odd) {
      background: #333;
      color: white;
    }
  </style> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
  <h1>data showing inside table</h1>
  <table class="table table-bordered table-striped">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>email</th>
    </tr>
    <?php while($teacher = $teachers->fetch_object()): ?>
      <tr>
      <td><?php echo  $teacher->id ?></td>
      <td><?php echo  $teacher->name ?></td>
      <td><?php echo  $teacher->email ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
  
</body>
</html>