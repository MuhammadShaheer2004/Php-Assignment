<?php
	$a=4;
	$b=8;
	$c=5;
	$greater;
	if($b>$a && $b>$c){
	 $greater=$b;
	}else if($c>$b && $c>$a){
	  $greater=$c;
	  	}
	  	else{
	  	  $greater=$a;
	  	}
	  	echo $greater;
?>