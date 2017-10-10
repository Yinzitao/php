<?php 
	# array :数组  -存储一堆数据的集合 有效的控制资源
 	/*
		下标数组: 下标以0开始
		关联数组: 关联以第一个添加的名字开头
 	*/
	#下表数组
		/*
		$people=array("Kevin","Henry","Hemiah");
		echo $people[1]; //"Henry"
		//echo $people[3]; //报错 数组越界
		$ids=[25,45,65];
		echo $ids[2];
		*/

		/*
		$cars=["Honda","Toyota","BYD"];
		$cars[3]="BWM";
		echo $cars[3];
		$cars[]="Bence";
		print_r($cars)
		*/

		//echo count($cars)//数组中的个数
		
		#打印数组的放法
		//print_r($cars)
		
		#万能打印方法
		//var_dump($cars)

	#关联数组
		/*
		$people=array("Henry"=>35,"Bukcy"=>25,"Emily"=>20);
		echo $people["Emily"];//拿到20

		$ids=[22=>"Henry",25=>"Bukcy"];
		echo $ids[22];//拿到Henry
		$ids[35]="Emily";//添加数组
		echo $ids[35];
		#观察
		$ids[]="john";
		print_r($ids);

		$people[]=55;
		print_r($people)
		*/

	#多维数组
		$cars=array(
			array("Honda",20,10),
			array("dz",20,20),
			array("Ford",15,10)
		);
		echo $cars[2][1];//拿到15
		

 ?>