<div class="container">
  <form action="edit1.php" method="post">
        Name: <input class="form-control" type="text" name="name" /><br>
        Comment: <input class="form-control" type="text" name="comment" /><br>
        <input type="submit" />
        </form>
</div>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab13-itf.mysql.database.azure.com', 'ingkawat@lab13-itf', '087493765Zin', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_GET['id'];
$name = $_POST['name'];
$comment= $_POST['comment'];  

$sql = "UPDATE guestbook SET Comment='$comment', Name='$name' WHERE id=$id";
if (mysqli_query($conn, $sql)) {
echo "Edit successfully";
$query = mysqli_query($conn, $sql);
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

