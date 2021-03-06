<?php

$con = mysqli_connect('localhost', 'root', '', 'fgc2');
$teachers = $con->query(
  "select * from teachers"
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
  <h1>all teachers</h1>
  <table class="table table-bordered table-striped table-hover">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>email</th>
    </tr>
    <?php while($teacher = $teachers->fetch_object()): ?>
      <tr>
        <td><?php echo $teacher->id; ?></td>
        <td><?php echo $teacher->name; ?></td>
        <td><?php echo $teacher->email; ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>