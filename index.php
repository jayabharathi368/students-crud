<?php include 'db.php'; ?>
<h2>Students List</h2>
<a href="add.php">Add Student</a><br><br>
<table border="2">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Mark</th><th>Action</th></tr>
<?php
$res = mysqli_query($conn, "SELECT * FROM students");
while($row = mysqli_fetch_assoc($res)){
 echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['mark'].
 "</td><td><a href='edit.php?id=".$row['id']."'>Edit</a> 
 | <a href='delete.php?id=".$row['id']."'>Delete</a></td></tr>";
}
?>
</table>