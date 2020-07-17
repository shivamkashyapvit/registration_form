<html>
<head>
<style>

:root {
	--main-bg-color: #ecf0f3;
}

* {
	box-sizing: border-box;
}

html,
body {
	height: 100%;
	width: 100%;
	display: flex;
	background-color: var(--main-bg-color);
}

.container {
	margin: auto;
	padding: 2rem;
	border-radius: 2.5rem;
	background-color: var(--main-bg-color);
	box-shadow: 13px 13px 20px #cbced1,
							-13px -13px 20px #ffffff;
}

.logo {
	display: flex;
	width: 100%;
	margin-bottom: 3rem;
}

.logo__circle {
	margin: auto;
	width: 6.25rem;
	height: 6.25rem;
	display: flex;
	border-radius: 9999px;
	background-color: #E9D985;
/* 	border: 1px solid black; */
	box-shadow: 
		0px 0px 2px #5F5F5F,
		0px 0px 0px 5px #ECF0F3,
		8px 8px 15px #A7AAAF,
		-8px -8px 15px #FFFFFF;
}

.logo__svg {
	margin: auto;
	width: calc(6.25rem / 3);
	height: calc(6.25rem / 3);
	opacity: 0.4;
}

.form__group {
	width: 18rem;
	margin-bottom: 2rem;
	position: relative;
}

.form__icon {
	position: absolute;
	left: 0;
	height: 100%;
	display: flex;
	width: 3rem;
}

.form__icon svg {
	margin: auto;
	weight: 0.75rem;
	height: 0.75rem;
	opacity: 0.35;
}

.form__control {
	appearance: none;
	border: none;
	background-color: transparent;
	font-size: 0.875rem;
	padding: 1rem;
	padding-left: 2.5rem;
	width: 100%;
	border-radius: 1.5rem;
	box-shadow: 
		inset 8px 8px 8px #CBCED1,
		inset -8px -8px 8px #FFFFFF;
}

.form__control:focus {
	outline: none;
	box-shadow: 
		inset 8px 8px 8px #c5c5c5,
		inset -8px -8px 8px #FFFFFF;
}

.form__control:focus::placeholder {
	color: #d3d3d3;
	letter-spacing: 0.15em;
}

.form__control::placeholder {
	color: #CCCCCC;
}

.form__button {
	text-transform: uppercase;
	letter-spacing: 0.15em;
	border: none;
	font-size: 0.875rem;
	color: #FFFFFF;
	background-color: #BCD8C1;
	width: 100%;
	display: block;
	padding: 0.875rem 1rem;
	border-radius: 1.5rem;
	box-shadow: 
		3px 3px 8px #B1B1B1,
		-3px -3px 8px #FFFFFF;
}

.form__button:focus {
	outline: none;
	box-shadow: 
		3px 3px 20px #B1B1B1,
		-3px -3px 20px #FFFFFF;
}

.form__button:hover {
	opacity: 0.85;
}


</style>
</head>
<body>
<div class="container">
	<div class="logo">
		<div class="logo__circle">
			<svg class="logo__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 9v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8c0-1.1.9-2 2-2h13.8L.74 1.97 1.26.03 20 5.06V9zm-5 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM2 8v2h16V8H2zm1.5 10a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm5 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm6.5-1a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
		</div>
	</div>
	<form class="form" method="POST">
		<div class="form__group">
			<div class="form__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z"/></svg></div>
			<input class="form__control" type="text" name="uname" placeholder="username">
		</div>
		<div class="form__group">
			<div class="form__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"/></svg></div>
			<input class="form__control" type="password" name="psw" placeholder="password">
		</div>
		<div>
			<button class="form__button" type="submit" name="submit">
				submit
			</button>
		</div>
	</form>
</div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$un=$_POST['uname'];
	$pw=$_POST['psw'];
	
	if ($un=='uname' && $pw=='psw')
	{
		header("location:form.php");
		exit();
	}
	
	else if($un=='result' && $pw=='result')
	{
		header("location:result.php");
		exit();
	}
	
	else{
		echo "wrong password";
}
}

?>