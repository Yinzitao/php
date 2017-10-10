<?php 
	#loops:循环 - 让项目制作的更高效
	
	#根据某个条件,重复执行某段代码
	
	/*
		for
		while
		do while
		foreach
	*/
	
	#for 循环
		#@params - init,condition,inc
		// for($i=0;$i<10;$i++){
		// 	echo ($i+1)."<br>";
		// }
	
	#while 循环
		#@params -condition
		// $i=0;
		// while ($i<10) {
		// 	echo $i."<br>";
		// 	$i++;
		// }
	#do while
		#@params -condition
		// $i=0;
		// do{
		// 	echo $i."<br>";
		// 	$i++;
		// }while($i<10);
		
	#foreach 循环 下标数组
		// $people=array("Henry","Bucky","Emily");
		// foreach($people as $person){
		// 	echo $person;
		// 	echo "<br>";
		// }

	#foreach 循环  关联数组
		$people=array(
			"Henry"=>"Henry@gmail.com",
			"Bucky"=>"Bucky@gmail.com",
			"Emily"=>"Emily@gmail.com"
		);
		foreach ($people as $key => $value) {
			echo $key.":".$value;
			echo "<br>";
		}


			
		
 ?>