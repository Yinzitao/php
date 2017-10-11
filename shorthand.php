<?php  
	
	$loggedIn=true;
	$values=["Henry","Bucky","Emily"]
	/*	
		if ($loggedIn) {
			echo "U r Logged In";
		}else{
			echo "U r NOT Logged In";
		}
		echo "<hr>";

	#三目运算符
		echo($loggedIn)?"U r Logged In":"U r NOT Logged In";
		echo "<hr>";

	#简写得到 true 或者 false
		$isRegistered=($loggedIn==true)?true:false;
		echo $isRegistered;
		echo "<hr>";

	#三目嵌套
		$age=18;
		$score=60;
		echo "Your score is ".($score>70?($age<20?"优秀":"一般"):($age<20?"一般":"差等"));
*/


?>
<!-- html + php 嵌套语法糖 -->
<div>
	<?php if ($loggedIn){?>
	<p>Welcome to beijing</p>
	<?php }else{ ?>
	<p>Welcome to zhengzhou</p>
	<?php } ?>

</div>
<!-- 优化 -->
 <div>
	<?php if ($loggedIn):?>
	<p>Welcome to beijing</p>
	<?php else: ?>
	<p>Welcome to zhengzhou</p>
	<?php endif; ?>

</div> 

<!-- 遍历数组 -->
 <div>
	<?php foreach ($values as $val): ?>
		<p><?php echo $val; ?></p>
	<?php endforeach; ?>
</div> 
<!-- 遍历数组(使用for) -->
<div>
	<?php for ($i=0; $i < count($values) ; $i++): ?>
	<?php echo $values[$i];?>
	<?php endfor; ?>

</div>




