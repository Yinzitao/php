<div class="container">
	<?php 
		#检查是否存在data的name属性
	/*	if (filter_has_var(INPUT_POST, "data")) {
			//echo "data 存在";
			$email=$_POST["data"];
			//echo $email;

			#过滤掉不合法字符
			$email=filter_var($email,FILTER_SANITIZE_EMAIL);//过滤掉输入的email中非法字符
			echo $email;
			#验证是否是一个有效的邮箱
			if (filter_input(INPUT_POST, "data",FILTER_VALIDATE_EMAIL)) {
				echo "邮箱合法";
			}else{
				echo "邮箱不合法";
			}
		}else{
			//echo "data 不存在";
		}*/
	/*
		审核
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证
		FILTER_VALIDATE_BOOLEAN 布尔值 
		FILTER_VALIDATE_EMAIL  email
		FILTER_VALIDATE_FLOAT  浮点 小数
		FILTER_VALIDATE_INT	   整数
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC		
		FILTER_VALIDATE_REGEXP	正则
		FILTER_VALIDATE_URL		路径
	*/
		#练习:验证一个变量中的值,是否是合法的整型
		$arr=23;
		if (filter_var($arr,FILTER_VALIDATE_INT)) {
				echo "合法";
			}else{
				echo "不合法";
			}
		
		#获取字符串中所有的数字
		$var="adas8748745fas74545f7a45454a";
		var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT));

		#特殊字符
		$var ="<script>alert(1)</script>";
		//echo $var;
		echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);
		
		#验证数组中每个元素
		/*
		$filters=array(
			"data"=>FILTER_VALIDATE_EMAIL,
			"data2"=>array(
				'filter'=>FILTER_VALIDATE_INT,
				'options'=>array(
					'min_range'=>1,
					'max_range'=>150
				)
			)
		);
		print_r(filter_input_array(INPUT_POST,$filters));
		*/

		# 验证from表单中input的内容,第一个input是email;第二个input一定是数值<1 >150
		/*
		if (filter_has_var(INPUT_POST, "data")) {
			$email=$_POST["data"];
			if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
				echo $email;
			}else{
				echo " ";
			}
		}else{
			echo " ";
		}

		if (filter_has_var(INPUT_POST, "data2")) {
			$emaill=$_POST["data2"];
			if (filter_var($emaill,FILTER_VALIDATE_INT)>=0) {
				if ($emaill<1||$emaill>150) {
					echo " ";
				}else{
					echo $emaill;
				}
			}else{
				echo " ";
			}
			
		}else{
			echo " ";
		}
		*/

		
		$arr=array(
			"name"=>"henny",
			"age"=>"41",
			"email"=>"hernny@qq.com"
		);
		$filters=array(
			"name"=>array(
				"filter"=>FILTER_CALLBACK,
				"options"=>"ucwords"
			),
			"age"=>array(
				"filter"=>FILTER_VALIDATE_INT,
				"options"=>array(
					'min_range'=>1,
					'max_range'=>100
				)
			),
			"email"=>FILTER_VALIDATE_EMAIL
		);
		print_r(filter_var_array($arr,$filters))
			
		

	?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filters / 过滤器</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<br>
		<input type="text" name="data" class="form-control">
		<input type="text" name="data2" class="form-control">
		<br>
		<button type="submit" class="btn btn-primary btn-block">提交</button>
		</form>
	</div>
</body>
</html>