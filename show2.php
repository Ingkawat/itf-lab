<html>
<head>
<title>ITF Lab</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    th{
      background-color:#9999ff; color:white;
    }
    td{
      background-color:#e5e5ff;
    }
    body{
      background-color:#ffffcc;
    }
  </style>
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
<div class="container">
  <table width="800" height="600" border="1" style="margin-left:12%; margin-top:30px;">
  <tr>
    <th width="200"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="250"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo '<a href="delete1.php?id='.$Result['ID'].'">Delete</a>'?>
        <?php echo '<a href="form_edit.html">Update</a>'?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
<a href="https://ingkawat.azurewebsites.net/form1.html" class="btn btn-info"style="margin-left:50%; margin-top:20px;">add</a>
  </div>
  </body>
</html>
