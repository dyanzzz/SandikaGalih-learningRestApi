<?php
  for($awal=1;$awal<=10;$awal++){
    if($awal % 2 == 0){
      echo $awal."<br/>";
    }
  }

  echo "<hr/>";

  for($awal2=1;$awal2<=10;$awal2++){
    if($awal2 % 2 == 1){
      echo $awal2."<br/>";
    }
  }

  echo "<hr/>";

  for($awal3=1;$awal3<=10;$awal3++){
    $a = 0;
    for($j=1; $j<=$awal3; $j++){
      if($awal3 % $j == 0){
        $a++;
      }
    }
    if($a == 2){
      echo $awal3."<br/>";
    }
  }

  echo "<hr/>";

  for($awal4=1;$awal4<=5;$awal4++){
    for($j=1;$j<=$awal4;$j++){
      echo "*";
    }
    echo "<br/>";
  }

  echo "<hr/>";

  for($awal5=5;$awal5>=1;$awal5--){
    for($j=1;$j<=$awal5;$j++){
      echo "*";
    }
    echo "<br/>";
  }

  echo "<hr/>";

  for($a6=5;$a6>=1;$a6--){
    for($j=1;$j<=$a6;$j++){
      echo "&nbsp;";
    }

    for($k=5;$k>=$a6;$k--){
      echo "*";
    }
    echo "<br/>";
  }

  echo "<hr/>";

  for($a7=5;$a7>=1;$a7--){
    for($j=1;$j<=$a7;$j++){
      echo "&nbsp;";
    }
    for($k=5;$k>=$a7;$k--){
      echo "*";
    }
    echo "<br/>";
  }
  for($a8=1;$a8<=5;$a8++){
    for($m=1;$m<$a8;$m++){
      echo "&nbsp;";
    }
    echo "&nbsp;";
    for($l=5;$l>=$a8;$l--){
      echo "*";
    }

    echo "<br/>";
  }

  echo "<hr/>";

  for($a9=1;$a9<=5;$a9++){
    for($j=1;$j<=20;$j++){
      echo "*";
    }
    echo "<br/>";
  }

  echo "<hr/>";

  for($a9=1;$a9<=5;$a9++){
    for($j=1;$j<=10;$j++){
      echo "*";
    }
    echo "<br/>";
  }

  echo "<hr/>";

  for($a10=5;$a10>=1;$a10--){
    for($j=1;$j<=$a10;$j++){
      echo "&nbsp;";
    }
    for($k=10;$k>=$a10;$k--){
      echo "*";
    }
    for($l=1;$l<=10;$l++){
      echo "*";
    }
    for($m=10;$m>=$a10;$m--){
      echo "";
    }

    echo "<br/>";
  }

  echo "<hr/>";

  for($a10=5;$a10>=1;$a10--){
    for($j=1;$j<=$a10;$j++){
      echo "&nbsp;";
    }
    for($k=10;$k>=$a10;$k--){
      echo "*";
    }

    for($m=1;$m<=$a10;$m++){
      echo "*";
    }

    echo "<br/>";
  }

  echo "<hr/>";

  for($a11=1;$a11<=100;$a11++){
    if(($a11 % 3==0)&&($a11 % 5==0)){
      echo "--, ";
    }else if($a11 % 3==0){
      echo "Fizz, ";
    }else if($a11 % 5==0){
      echo "Buzz, ";
    }else{
      echo $a11.", ";
    }
  }

?>
