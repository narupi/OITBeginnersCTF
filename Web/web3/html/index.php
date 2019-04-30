<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>web3</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="./product.css" rel="stylesheet">
<head>
</head>
<body>
 <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2 d-none d-md-inline-block" href="?">Top</a>
      </div>
    </nav>
<?php
if($_GET["page"]){
    $filename =  $_GET["page"].".php";
    $filename = preg_replace('/\x00.*/',"",$filename);
	include($filename);

}else {
    include("top.php"); 
}

?>
</body>
</html>

