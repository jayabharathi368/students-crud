<?php
include 'db.php';
if(isset($_POST['save'])){
 $name=$_POST['name'];
 $email=$_POST['email'];
 $mark=$_POST['mark'];
 mysqli_query($conn, "INSERT INTO students (name, email, mark) VALUES ('$name','$email','$mark')");
 header("Location: index.php");
}
?>
<h2>Add Student</h2>
<form method="POST">
Name: <input type="text" name="name" required><br><br>
Email: <input type="email" name="email" required><br><br>
Mark: <input type="number" name="mark" required><br><br>
<input type="submit" name="save" value="Save">
</form>
<a href="index.php">Back</a>