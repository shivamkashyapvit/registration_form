<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2>Basic HTML Table</h2>

<table style="width:100%">
  <tr>
    <th>id</th>
    <th>NAME</th>
	<th>ADDRESS</th>
    <th>CONTACT NUMBER</th> 
    <th>ITEM NAME</th>
	<th>NO. OF ITEM</th>
  </tr>
 <tbody>
    <?php
	
	include 'dbcon.php';
	$selectquery ="select * from registration ";
	$query=mysqli_query($con,$selectquery);
	
	
	while($result=mysqli_fetch_array($query)) 
	{
	?>
	
	<tr>
	     <td> <?php echo $result['id']; ?> </td>  
		 <td> <?php echo $result['name']; ?> </td>  
		 <td> <?php echo $result['address']; ?> </td>  
		 <td> <?php echo $result['cno']; ?> </td>  
		 <td> <?php echo $result['iname']; ?> </td> 
         <td> <?php echo $result['ino']; ?> </td> 		 
	 </tr>
	
	<?php 
	}
	 
	?>
 <br/>
 <a href="login.php">login page </a>
 
 </tbody>
</table>

</body>
</html>
