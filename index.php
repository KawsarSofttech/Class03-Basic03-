<?php
for ($i = 1; $i <= 10; $i++) { 
  	for($j = 1; $j <= 10; $j++){
	echo "$i x $j = ".($i*$j).", ";
	}
	echo "<br>";# code...
  }
function greet(){
	echo "Welcome to Bangladesh! <br>";
	// greet();
}
greet();
echo "<br>";
function greetings($count){
	if($count == 7){
		exit();
	}else{
		echo "Welcome Mr. Young Man <br>";
		greetings(++$count);
	}

}
// greetings(0);
echo "<br>";
function hi($count){
	if($count == 7){
		exit();
	}else{
		echo "Welcome Mr. Bokai <br>";
		hi($count+1);
	}

}
// hi(0);
echo "<br>";
// 1+2+3+4+5 = ?(By Recursion function)
function hii($count,$sum){
	if($count == 6){
		echo $sum;
		exit();
	}else{
		$sum = $sum + $count;
		hii($count + 1,$sum);
	}

}
hii(0,0);
 

?>