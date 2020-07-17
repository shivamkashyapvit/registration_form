<?php
   include 'dbcon.php';

 if(isset($_POST['submit'])){	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$cno=$_POST['cno'];
	$iname=$_POST['iname'];
	$ino=$_POST['ino'];
	
	$insertuery="insert into registration (name,address,cno,iname,ino) values('$name','$address',$cno,'$iname',$ino)";
	$query=mysqli_query($con,$insertuery);
	
	if($query)
	{
		echo "successfully insert";
	}
	
	else{
		echo " not sucessfully insert";
	}
	
	
}

else{
	echo "not sucessfully"; 
}
?>

<a href="form.php"> BACK </a>