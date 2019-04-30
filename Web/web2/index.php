<?php
include_once 'dbconnect.php';
if(isset($_POST['login'])) {

	$name = $_POST['name'];
        $password = $mysqli->real_escape_string($_POST['password']);


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
			echo "Congratulation! Flag: oitctf{s!mple_inject!on}";
                }else {
			echo "Name or password is wrong.";
                }
	}
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

