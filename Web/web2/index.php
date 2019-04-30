<?php
include_once 'dbconnect.php';
// ログインボタンがクリックされたときに下記を実行
if(isset($_POST['login'])) {

	$name = $_POST['name'];
        $password = $mysqli->real_escape_string($_POST['password']);


	// クエリの実行
	$query = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
	$result = $mysqli->query($query);
	if (!$result) {
		print('クエリーが失敗しました。' . $mysqli->error);
		$mysqli->close();
		exit();
	}else {
		while ($row = $result->fetch_assoc()) {
			$email = $row['password'];
			$user_id = $row['name'];
		}
		if(strcmp($user_id, "admin") == 0){
			echo "Congratulation! Flag is oitctf{s!mple_inject!on}";
                }else {
			echo "The name or the password is wrong.";
                }
	}
	// データベースの切断
	$result->close();
}

?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>web2</title>
<link rel="stylesheet" href="style.css">
<!-- Bootstrap読み込み（スタイリングのため） -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
</head>
<body>
<div class="col-xs-6 col-xs-offset-3">

<form method="post">
  <h1>ログインフォーム</h1>
  <div class="form-group">
    <input type="name"  class="form-control" name="name" placeholder="ユーザーネーム" required />
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="パスワード" required />
  </div>
  <button type="submit" class="btn btn-default" name="login">ログインする</button>
</form>

</div>
</body>
</html>

