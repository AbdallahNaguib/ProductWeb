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
	<title>update existed product</title>
</head>
<body>
	<form class="form" action="http://localhost:8080/PHPWork/ITProject/Controllers/UpdateProductController.php" method="post" onsubmit="return validation()">
		<span>Product name:</span><br>
		<input id="pName" name="name" placeholder="Enter name..."><br>
        <span>Description:</span><br>
		<textarea id="desc" name="des" placeholder="Enter Description..."></textarea><br>
		<span>Quantity:</span><br>
		<input id="q" name="quantity" type="number" placeholder="Enter quantity..."><br>
		<span>Price:</span><br>
		<input id="price" name="price" type="number" placeholder="Enter price..."><br>
		<input name="id" style="display: none" value="<?php echo $_GET['id']?>">
		<button>Update</button>
    </form>
    <script type="text/javascript">
    	function validation(){
    		var pname = document.getElementById('pName').value;
    		var desc = document.getElementById('desc').value;
    		var q = document.getElementById('q').value;
    		var price = document.getElementById('price').value;

    		if(pname == ""){
    			alert("you should enter product name.");
    		}else if(q == ""){
    			alert("you should enter quantity.");
    		}else if(price == ""){
    			alert("you should enter price.");
    		}
    	}
    </script>
</body>
</html>