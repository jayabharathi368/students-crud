<?php include "db.php"; 
mysqli_query($conn, "DELETE FROM students WHERE id=$_GET[id]"); header("Location:index.php");?>