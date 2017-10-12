<div class="container">
	
	<?php
	#$_GET 
		# echo $_GET["sbqname"];
		#检查sbqname是否能获取到
		/*
		if (isset($_GET["sbqname"])&&isset($_GET["sbqemail"])) {
			
			#echo $_GET["sbqname"];
			$name=$_GET["sbqname"];
			$email=$_GET["sbqemail"];
			echo $name.":".$email;
		}
		*/
		/*
	#$_POST
		if (isset($_POST["sbqname"])&&isset($_POST["sbqemail"])) {
			
			$name=$_POST["sbqname"];
			$email=$_POST["sbqemail"];
			if (!empty($name)&&!empty($email)) {
				echo $name.":".$email;
			}
			print_r($_POST);
			
		}
		*/

	#$_REQUEST
		//不管是GET 还是POST 都可以获取到
		if (isset($_REQUEST["sbqname"])&&isset($_REQUEST["sbqemail"])) {
			
			$name=$_REQUEST["sbqname"];
			$email=$_REQUEST["sbqemail"];
			if (!empty($name)&&!empty($email)) {
				echo $name.":".$email;
			}
			print_r($_REQUEST);
			
		}
	#查询url地址后面的参数
	//echo $_SERVER['QUWEY_STRING'];
	?>


</div>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET & POST</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="get_post.php" method="GET">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="sbqname">
			</div>
			
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="sbqemail">
			</div>
			<br>
			<input class="btn btn-primary btn-block" type="submit" value="提交">
		</form>
		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=艾琳"; ?>"class="btn btn-success btn-block">艾琳</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?name=浩亮"; ?>"class="btn btn-info btn-block">浩亮</a>
			</li>
				
		</ul>
		<h1>
			<?php if(isset($_GET['name'])){echo $_GET['name'];} ?>
		</h1>
	</div>
</body>
</html>