<?php 
	#function: 函数 - 具有某一功能的代码块
	/*
		Camel Case - myFunction() 小驼峰
		Lower Case - my_function() 下划线
		Pascal Case - MyFuncion() 大驼峰
	*/ 
	// 定义函数
	function simpleFunction(){
		echo "Hello World!";
	}
	#调用函数
	SimpleFunction();//php中函数名字大小写不敏感
	echo "<hr>";
	
	#有参数 无返回值
	function buy($money="20"){
		echo $money."给了,但是没给我买东西!拿着钱跑了!";
	}
	buy(30);//不传参数会用默认设置,传参会用参数
	echo "<hr>";
	
	#多参数 有返回值
	function sumValue($num1,$num2){
		$sum=$num1+$num2;
		return $sum;
	}
	$result=sumValue(5,6);
	echo $result;
	echo "<hr>";

	#无参数 有返回值
	function buyDrink(){
		return "饭后的饮料";
	}
	echo buyDrink();
	echo "<hr>";

	#函数传引用
	$myNum=10;
	function addFive(&$num){
		$num += 5;
	}
	addFive($myNum);//15
	echo $myNum; #拿到了myNum的引用,改变了内存中的数值,所以是15;


 ?>