<?php

?>


<html>

<head>
  <meta charset="utf=8">
  <title>SQL</title>
</head>

<body>
  <a href="insert_form.php">돌아가기</a>

  <?php

    //echo "hello php";
  //get : 보내는 데이터의 양이 적고, '입력 데이터가 아닌' 조회나 업데이트할 데이터를 전달할 때 주로 사용한다.
  //post : 보내는 데이터의 양이 많고, 특히 데이터베이스에 '입력해야 할 데이터'를 보낼 때 사용한다.
  //참조 https://noahlogs.tistory.com/35

  //get 으로 데이터를 받을때 : $_GET['name data'];
  //post 로 데이터를 받을 때 : $_POST['name data'];
  //둘 다 받을 수 있는 방식 : $_REQUEST['name data'];

  $member_id=$_POST['id'];
  $name=$_POST['name'];
  $member_pass=$_POST['pass'];
  $phone=$_POST['phone'];
  $nati=$_POST['nati'];

  // echo $id.'<br>';
  // echo $name.'<br>';
  // echo $pass.'<br>';
  // echo $phone.'<br>';
  // echo $nati.'<br>';

  include_once $_SERVER['DOCUMENT_ROOT'].'/php_sql/connect/db_conn.php';

  // $sql = "INSERT INTO members(id, name, pass, phone, nationality) VALUES ('$member_id', '$name', '$member_pass', '$phone', '$nati')";

  //1. 데이터 조회 : SELECT [FIELD](*) FROM [TABLE_NAME]
  //데이터 조회 시 특정 필드만을 조회하는 경우도 있지만, 대체적으로 * 마크를 사용해 전체 데이터를 조회한 후 필요한 데이터를 추출해 사용하는 것이 일반적이다.
  //$sql = "SELECT * FROM members";

  //2. 데이터 조건 필터링 조회 : SELECT [FIELD](*) FROM [TABLE_NAME] WHERE [조건필드명] = [조건값]
  //$sql = "SELECT * FROM members WHERE idx = 4";

  
  //3. 데이터 정렬 : SELECT [FIELD](*) FROM [TABLE_NAME] ORDER BY [정렬 기준 필드명] DESC(역순) or ASC(정순 default값)
  //$sql = "SELECT * FROM members ORDER BY idx DESC";
  //* 은 테이블의 전체를 선택하고 field명을 입력하면 그 값만 선택된다

  //4. 데이터 조회 갯수 지정 : SELECT [FIELD](*) FROM [TABLE_NAME] LIMIT [number]([start(index)],[count/갯수])
  //테이블 데이터 중에서 1번째부터 6개의 데이터를 역순으로 조회
  //$sql = "SELECT * FROM members ORDER BY idx DESC LIMIT 0,6";

  //5. 데이터 값 변경 : UPDATE [TABLE NAME] SET [변경할 필드명] = [변경 값] WHERE [변경할 필드 조건]
  //8번 인덱스 데이터의 이름을 김철수로 변경
  //$sql = "UPDATE members SET name = '김철수' WHERE idx=8";

  //6. 데이터 삭제 : DELETE FROM [TABLE_NAME] WHERE [삭제 필드 조건]
  //name이 김철수인 필드 삭제

  $sql = "DELETE FROM members WHERE name='김철수'";

  $result = mysqli_query($db_conn, $sql);
 //mysqli_query(); : PHP에서 데이터 베이스에 특정 작업을 요청하는 함수
 //첫 번째 파라미터로 접속 정보를, 두 번째 파라미터로 요청 작업을 전달한다.
  //조회 데이터를 배열 형태로 추출 : mysqli_fetch_array()
  // while($row = mysqli_fetch_array($result)){
  //   $mem_idx = $row['idx'];
  //   $mem_id = $row['id'];
  ?>

  <div>
    <!-- <p>번호 :<?=$mem_idx?></p>
    <p>아이디 :<?=$mem_id?></p> -->
  </div>

  <?php
  // }
  ?>
</body>

</html>