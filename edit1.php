<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab13-itf.mysql.database.azure.com', 'ingkawat@lab13-itf', '087493765Zin', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$name = $_POST['Name'];
$sql = "UPDATE guestbook SET comment='ukd', name='erg' WHERE name='$name'";
if (mysqli_query($conn, $sql)) {
echo "Record deleted successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
