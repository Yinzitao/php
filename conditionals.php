<?php 
	# if & switch
	
	# 关系运算符
	/* > < == != >= <= === !=== */

	//$num=2;
	//单个if
	
	/*if ($num<=4) {
		echo "num的值一定是小于等于4";
	}*/
	
	//if  else
	/*if ($num>=4) {
		echo "true";
	}else{
		echo "false";
	}*/

	# nesting if
	/*$num=4;
	if ($num>=4) {
		if ($num<=10) {
			echo "num一定在4和10之间";
		}else{
			echo "num一定大于10";
		}
	}else{
		echo "num一定是小于4";
	}*/


	#逻辑运算符

	/*逻辑与 &&  AND
	逻辑或 ||  OR
	逻辑异或 XOR*/
	/*
	$num=3;
	if ($num>4XOR$num<10) {
		echo "num大于3并且小于10";
	}
	*/

	/*
		AND:一假即假
		OR :一真即真
		XOR:只有一个为真结果才为真
	*/


	# switch
	$favColor="green";
	switch ($favColor) {
		case 'red':
			echo "angry";
			break;
		case 'yellow':
			echo "happy";
			break;
		case 'blue':
			echo "sinlence";
			break;
		case 'green':
			echo "forgive";
			break;	
		
		default:
			echo "GUN";
			break;
	}




 ?>