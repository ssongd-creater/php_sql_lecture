<?php

  echo '배열 페이지 입니다.<br>';
  echo '---------------------- <br>';

  $arr = [1, 2, 3, 4, 5, 6, 7, '철수'];
  //배열은 대괄호를 열어준다 []
  echo var_dump($arr).'<br>';
  //var_dump 내부 로직을 보여주는 것
  echo $arr[0].'<br>';
  echo $arr[1].'<br>';

  echo '---------------------- <br>';
  //배열의 개수 확인 count()
  echo count($arr).'<br>';

  echo '---------------------- <br>';

  //함수로 선언하는 배열
  $earth = array();
  echo gettype($earth).'<br>';

  $earth[0] = "Korea";
  $earth[1] = "America";

  echo var_dump($earth).'<br>';
  echo  $earth[0].'<br>';

  //배열에 여러 값을 한꺼번에 삽입하는 함수 : array_push(배열이름, [값1, 값2,...]);

  $contry=array();
  array_push($contry, 'korea', 'china', 'russia', 'spain', 'paris');

  echo var_dump($contry).'<br>';
  echo $contry[2].'<br>';

  echo '---------------------- <br>';

  $fruit = array('f_1' => 'apple', 'f_2' => 'banana');
  echo $fruit['f_1'];
  
?>