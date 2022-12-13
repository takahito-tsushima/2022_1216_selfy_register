<?php


// セキュリティ / XSS(クロスサイトスクリプティング)
  // スクリプトを文字列として表示することで、悪意あるスクリプトによる誤作動などを防止
  // ○ブラウザに表示するときに
  // ×データをDB取り込むとき

function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES);
}


//1.  DB接続します
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//２．データ取得SQL作成  【 既にあるものを書き出すだけなのでバインド関数は不要 】
$stmt = $pdo->prepare("SELECT * FROM selfy_register");
$status = $stmt->execute();


//３．データ表示   エラー→if 成功→else の実行
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる resultに配列で格納されている
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
        
    $view .= '<p>' . 
    $result['id'] . ' : ' . 
    h($result['name01']) . ' / ' . 
    h($result['name02']) . ' / ' . 
    h($result['birthday']) . ' / ' . 
    h($result['born_place']) . ' / ' . 
    h($result['prefecture']) . ' / ' . 
    h($result['country']) . ' / ' . 
    h($result['occupation']) . ' / ' . 
    h($result['company']) . ' / ' . 
    h($result['division']) . ' / ' . 
    h($result['description']) . ' / ' . 
    h($result['school']) . ' / ' . 
    h($result['grade']) . ' / ' . 
    h($result['email_ok']) . ' / ' . 
    h($result['email']) . ' / ' . 
    h($result['facebook_ok']) . ' / ' . 
    h($result['facebook']) . ' / ' . 
    h($result['instagram_ok']) . ' / ' . 
    h($result['instagram']) . ' / ' . 
    h($result['twitter_ok']) . ' / ' . 
    h($result['twitter']) . ' / ' . 
    '</p>';
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録へ</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>
