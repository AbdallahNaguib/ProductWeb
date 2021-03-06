<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">

	<style type="text/css">
		form.form
		{
		background-color:#12063f;
		width:400px;
		border:2px solid #2a357f;
		border-radius:10px;
		padding:20px;
		box-shadow:10px 10px 20px #2a357f;
		margin: 50px auto;
		}

		form.form input{
			margin:10px;
			border:2px solid #1d1ce9;
			border-radius:5px;
			width: 300px;
			padding: 5px 10px;
		}

		form.form span
		{
		color:#3b48f6;
		font-size:30px;
		text-transform:capitalize;
		text-shadow:3px 3px 3px #224269
		}

		form.form textarea
		{
		margin:10px;
		border:2px solid #1d1ce9;
		border-radius:5px;
		width:300px;
		height:100px
		}

		form.form select
		{
		margin:10px;
		width:100px;
		height:30px;
		border:2px solid #1d1ce9;
		border-radius:5px
		}

		form.form select option
		{
		text-align:center
		}

		form.form button
		{
		margin:10px;
		background-color:#1e16c2;
		color:#FFF;
		border:none;
		border-radius:5px;
		font-size:25px
		}

		h1{
			color: #FFF;
			text-align: center;
			margin-top: 50px;
			margin-bottom: 50px;
			font-size: 40px;
		}

		.container{
			width: 1140px;
			margin: auto;
		}

		.clearfix{
			clear: both;
		}

		body{
			background: #729bbe;
		    perspective: 1000px;
		}
	</style>
	<!-- jQuery library -->
	<script src="../js/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="../js/bootstrap.min.js"></script>
	<title>signup</title>
</head>
<body>
	<form class="form" action="http://localhost:8080/PHPWork/ITProject/Controllers/SignUpController.php" method="Post" enctype="multipart/form-data" onsubmit="return validation()">
		<span>Username:</span><br>
		<input id="username" name="username" placeholder="Enter Username..."><br>
		<span>Password:</span><br>
		<input id="password" name="password" type="password" placeholder="Enter Password..."><br>
		<span>Email:</span><br>
        <?php if(isset($_GET['emailExist']))echo '<p style="color:red">email already exists</p>'?>
		<input id="email" name="email" type="email" placeholder="Enter Email..."><br>
        <span>Profile image:</span><br>
		<input id="image" name="file" type="file"><br>
        <?php if(isset($_GET['errorUploading']))echo '<p style="color:red">error with uploading the file</p>'?>
        <button type="submit" name="submit">Sign Up</button>
	</form>
	
	<script type="text/javascript">
    	function validation(){
    		var username = document.getElementById('username').value;
    		var password = document.getElementById('password').value;
    		var email = document.getElementById('email').value;
    		var image = document.getElementById('image').value;

    		if(username == ""){
    			alert("you should enter username.");
    		}else if(password == ""){
    			alert("you should enter password.");
    		}else if(email == ""){
    			alert("you should enter email.");
    		}else if(image == ""){
    			alert("you should enter profile image.");
    		}
    	}
    </script>
</body>
</html>