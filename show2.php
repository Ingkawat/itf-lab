<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab13-itf.mysql.database.azure.com', 'ingkawat@lab13-itf', '087493765Zin', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">ID</div></th>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['ID'];?></div></td>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo '<a href="delete1.php?id='.$Result['ID'].'">Delete</a>'?>
        <?php echo $Result['ID']'<a href="form_edit.html">Update</a>'?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
