<?php
$conn = new mysqli("localhost", "root", "", "feedback_db");
$result = $conn->query("SELECT * FROM feedback");
?>

<!DOCTYPE html>
<html>
<head>
  <title>View Feedback</title>
</head>
<body>
  <h2>All Student Feedback</h2>
  <table border="1" cellpadding="8">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Course</th>
      <th>Feedback</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['course'] ?></td>
        <td><?= $row['feedback'] ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
