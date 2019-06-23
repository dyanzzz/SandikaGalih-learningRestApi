<?php
	for( $a=10;$a>0;$a--){
		for($a1=10;$a1>$a;$a1--){
			echo"x";
		}
		echo"<br>";
	}
?>

<hr>

<?php
	for( $a=10;$a>0;$a--){
		for($i=1; $i<=$a; $i++){
			echo "_";
		}
		for($a1=10;$a1>$a;$a1--){
			echo"x";
		}
		echo"<br>";
	}
?>

<hr>

<?php
	for( $a=10;$a>0;$a--){
		for($i=1; $i<=$a; $i++){
			echo "_";
		}
		for($a1=10;$a1>$a;$a1--){
			echo"x";
		}
		for($a2=10;$a2>$a;$a2--){
			echo"x";
		}
		echo"<br>";
	}
?>

<hr>

<?php
	for( $a=10;$a>0;$a--){
		for($i=1; $i<=$a; $i++){
			echo "_";
		}
		for($a1=10;$a1>$a;$a1--){
			echo"x";
		}
		for($a2=10;$a2>$a;$a2--){
			echo"x";
		}
		echo"<br>";
	}
	for($b=0; $b<=10;$b++){
		for($j=1;$j<=$b;$j++){
			echo"_";
		}
		for($b1=10; $b1>$b;$b1--){
			echo"x";
		}
		for($b2=10; $b2>$b;$b2--){
			echo"x";
		}
		echo"<br>";
	}
?>

<hr>

<?php
	for($i=1; $i<=10; $i++){
		if($i%2==1){
			echo ("Ganjil = $i<br>");
		}
	}
?>

<hr>

<?php
	for($i=1; $i<=10; $i++){
		if($i%2==0){
			echo ("Genap = $i<br>");
		}
	}
?>

<hr>

<?php
	echo "2 <br>";
	echo "3 <br>";
	for($i=4;$i<=10;$i++){
		if($i%2 !=0 && $i%3 !=0){
			echo "Prima = $i<br>"." ";
		}
	}
?>

<hr>

<?php
	$N = 8;
	$a = 1;
	$b = 1;
	echo "$a <br> $b <br> ";
	for ($i=0;$i<=$N;$i++){
		$sNow = $a + $b;
		echo "Fibonachi = $sNow<br> ";
		$a = $b;
		$b = $sNow;
	}
?>