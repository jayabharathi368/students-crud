<?php include 'db.php'; ?>
<html>
<head>
  <style>
    body{ background-color:grey; }
    h2{ color:white; }
    th{ background-color: blue; color: white; }
    td{ background-color: red; }
  </style>
</head>
<body>

<h2>Students List</h2>
<a href="add.php">Add Student</a><br><br>
<table border="2">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Mark</th><th>Action</th></tr>
<?php
$res = mysqli_query($conn, "SELECT * FROM students");
while($row = mysqli_fetch_assoc($res)){
echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['mark']."</td><td style='text-align:center;'><a href='edit.php?id=".$row['id']."'>
<img src='../images/pen.edit' width='16' height='16'></a></td></tr>";
}
?>
</table>
</body>
</html>