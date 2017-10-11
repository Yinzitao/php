<?php  

	//echo date(); 至少要给一个参数;
	echo date('d');# day
	echo date('m');# month
	echo date('Y');# Year 2017 year 17
	echo date('l');# day of week

	echo date('Y/m/d');# 年 月 日
	echo date('d-m-Y');# 日 月 年
	echo "<hr>";

	#时分秒
	echo date('h');# hour
	echo date('i');# minutes
	echo date('s');# seconds
	echo date('a');# AM or PM 上午 下午
	echo "<hr>";

	#设置时区
	 date_default_timezone_set("Asia/Shanghai");
	 echo date('h:i:sa');
	 echo "<hr>";
	#mktime
	 $timestamp=mktime(07,00,12,1,24,1988);
	 echo $timestamp;
	 echo "<hr>";

	#完整事件
	 echo date("m/d/Y h:i:sa",$timestamp);
	 echo "<hr>";
	#字符串转时间
	$timestamp2=strtotime("7:00pm March 22 2016");
	echo date("m/d/Y h:i:sa",$timestamp2);

	echo "<hr>";
	
	$timestamp3=strtotime("tomorrow");
	echo date("m/d/Y h:i:sa",$timestamp3);
	echo "<hr>";
	
	$timestamp4=strtotime("next sunday");
	echo date("m/d/Y h:i:sa",$timestamp4);
	
	echo "<hr>";
	$timestamp5=strtotime("+2 Days");
	echo date("m/d/Y h:i:sa",$timestamp5);

?>