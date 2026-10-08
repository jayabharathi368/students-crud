<?php include "db.php";
$id = $_GET['id'];
if(isset($_POST['update'])){
 mysqli_query($conn, "UPDATE students SET name='$_POST[name]', email='$_POST[email]', mark='$_POST[mark]' WHERE id=$id");
 header("Location:index.php");
}
$d = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students WHERE id=$id"));
?>
<h2>Edit Student</h2>
<form method="POST">
Name: <input name="name" value="<?php echo $d['name'];?>"><br><br>
Email: <input name="email" value="<?php echo $d['email'];?>"><br><br>
Mark: <input name="mark" value="<?php echo $d['mark'];?>"><br><br>
<button name="update">Update</button>
</form>