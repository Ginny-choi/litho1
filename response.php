<?php

$servername = 'localhost';
$username   = 'oiokoo';
$password   = 'Tree3868#';
$dbname     = 'oiokoo';

$conn = mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($conn, 'utf8');

if( !$conn){
    die('database 접속실패');
}


//데이터베이스 헤더문() 

//서버이름(localhost), 
//사용자이름(닷홈아이디), '
//비밀번호(닷홈비번), 
//데이터베이스이름(닷홈이름) 설정


 // 폼 정보를 $변수를 설정 그리고 $변수에 기억
 $email = $_POST['email'];
 $code  = $_POST['code'];

 //DB내에 테이블(email)에 입력하는 SQL 코딩

 $sql = "insert into email_table (email) values('$email')";
$result = mysqli_query($conn,$sql);
 //데이터베이스에 저장 (입력)
 //sql insert into $email

 //서버(server)가 클라이언트(client)에 응답
 echo '<p>축하합니다. 메일 리스트에 저장되었습 니다.</p>'.$email.'<br>'.$code;
 // . 가 문자 연결 연산자

 mysqli_close($conn);
?>
