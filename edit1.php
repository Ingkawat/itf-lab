<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab13-itf.mysql.database.azure.com', 'ingkawat@lab13-itf', '087493765Zin', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_GET['ID'];

$sql = "SELECT * FROM guestbook WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
if (!$query) {
  header('Location: form1.html');
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

<div class="container">
  <center><a href="show2.php"><input type="button" value="Show" class="btn btn-info" class="ex1"></a></center>
</div>
