<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Form</h3>

<div class="container">
  <form action="actionpage.php" method="POST">
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." required>

    <label for="lname">address</label>
    <input type="text" id="lname" name="address" placeholder="Your address" required>

   <label for="lname">contact number</label>
    <input type="text" id="lname" name="cno" placeholder="contact number" required>

   <label for="lname">item name</label>
    <input type="text" id="lname" name="iname" placeholder="item name" required>
	 <label for="lname">item number</label>
    <input type="text" id="lname" name="ino" placeholder="number of item" required>
	
    <input type="submit" name="submit" value="submit"><br/><br/>
	
	<a href="login.php"> BACK </a>
  </form>
</div>

</body>
</html>
