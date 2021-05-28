<?php

  session_start();
  //세션을 삭제할 때는 unset() 함수를 사용한다
  unset($_SESSION['userid']);

  // echo "
  // <script>
  // location.href='loop.php';
  // </script>
  // ";

?>


<p>넘어온 세선 : <?=$userid?>입니다.</p>;