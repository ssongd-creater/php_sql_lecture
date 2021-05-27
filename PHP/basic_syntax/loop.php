<?php

  //1. for
  //for($i = 0(초기식); $i<10(반복 횟수 조건);$i++(증가식)){};
  
  $arr = [2, 4, 6, 8, 0, 3];
  
  //count() 배열의 개수를 확인하여 반복문으로 표현 JS의 .length와 같음
  // for($i = 0; $i < count($arr); $i++){
  //   //echo $i." Hello world<br>";
  //   echo $i." ".$arr[$i].'<br>';
  // };
  echo '---------------------- <br>';
  
  //2. foreach
  //참조 : https://www.w3schools.com/php/php_looping_foreach.asp
  foreach ($arr as $value) {
    //index : 
  echo "$value <br>";
  }


  //javascript 로 100까지 더하는 것
  //  const sum = 0;
  //  for(let i=0; i<=100; i++){
  //    sum+=i;
  //  };


  //3. while
  $sum = 0;
  $num = 1;
  while($num <= 100){
    $sum += $num;
    $num++;
  }

  echo $sum.'<br>';
?>