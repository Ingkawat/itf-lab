<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab13-itf.mysql.database.azure.com', 'ingkawat@lab13-itf', '087493765Zin', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$name = $_POST['name1'];
$comment = $_POST['comment1'];
$sql = "UPDATE guestbook SET comment='$comment', name='$name' WHERE name='$name'";
if (mysqli_query($conn, $sql)) {
echo "Edit successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

<div class="container">
  <center><a href="show2.php"><input type="button" value="Show" class="btn btn-info" class="ex1"></a></center>
</div>
