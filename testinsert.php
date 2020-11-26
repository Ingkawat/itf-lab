<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'panwit.mysql.database.azure.com', 'panwit@panwit', '123456789', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$A = $_POST['a'];
$B = $_POST['b'];
$C = $A + $B;

$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$A', '$B', '$C')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
<div class="container">
  <center><a href="test.php"><input type="button" value="Show" class="btn btn-info" class="ex1"></a></center>
</div>
