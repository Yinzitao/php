
<?php 
	// echo "Hello World!";

	//单行注释  快捷键 command+/
	# 单行注释  
	/*
		多行注释
		快简介:option+command+/
	*/

	# variable 变量
	// $output="Hello World!";
	/*
		1,前缀:$
		2,以字母数字下划线组成 数字不能开头 大小写敏感 驼峰命名法
	*/
	// $num=22;
	// $float=22.2;
	// $bool=true;
	// echo $bool;
	# 数据类型
	/*
		String Integer Float Boolean
		Array Object Resource(函数)
	*/

	#运算符  +-*/
	// $num1=10;
	// $num2=20;
	// $num3=$num1+$num2;
	// echo $num3

	#字符串拼接
	// $string1="Hello";
	// $string2="World";
	//在php中加号只是加号 没有拼接功能  在php中 . 有拼接功能
	//$string3=$string1+$string2;
	// $string3=$string1." ".$string2."!";
	// echo $string3;


	#php中引号的区别
	//''中的内容是单纯的字符串
	//$greeting='$greeting $greeting1';
	//""中的变量可以正常被解析
	// $greeting2="$greeting2 $greeting1";
	// echo $greeting2;

	#转义字符
	// $string3='They\'re here';
	// $string4="They're here";
	// echo $string3."<br>";
	// echo $string4; 
	// echo "<hr>" 下划线
	//printf($string3);

	#常量
	define("GREETING", "whatEver!");
	#常量的第三个参数为bool,true为不分大小写
	define("GREETING", "whatEver!",true);
	echo GREETING."<br>";
	echo greeting;
	//var_dump(greeting);

 ?>

