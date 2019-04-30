<html>
  <meta charset="UTF-8">
  <head>
    <title>ログイン処理</title>
  </head>
  <body>
<?php

$mysqli = new mysqli("mysql", "root", "pass", "web2");

 
$uid = $_POST['uid'];
$pass = $_POST['password'];
 
if($mysqli->connect_errno){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query = "SELECT * FROM users WHERE name = ? AND password = ?";
echo $query;
if($stmt = $mysqli->prepare($query)){
    $stmt->bind_param("is",$uid, $pass);
    $stmt->execute();
    $stmt-bind_result($uid, $pass);
    $stmt->store_result();
    for ($i = 1; $i <= $stmt->num_rows;$i++){
        echo "Login Success. ID=$uid"; 
	if($row['user'] == 'admin')print('oitctf{Not_escaped_query}');
        
    }
}else{
    echo "ユーザ名または、パスワードに誤りがあります。";
    exit;
}
 
 
$mysqli->close()
?>
  <a href="index.html">ログイン画面に戻る</a>
  </body>
</html>
