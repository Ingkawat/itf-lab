  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="container">
  <div class="row">
    <div class="col">
  <form method="post">
        Name: <input class="form-control" type="text" name="name" /><br>
        Comment: <input class="form-control" type="text" name="comment" /><br>
    <button>submit</button>
        </form>
    </div>
    <div class="col">
      <a style='margin-top:170px; margin-left:-50px;' href="show2.php" class="btn btn-info" >go to show</a>
      </div>
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
$query = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
  </div>

