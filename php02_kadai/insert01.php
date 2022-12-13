<?php

//1. POSTデータ取得
$name01 = $_POST['name01'];
$name02 = $_POST['name02'];
$birthday = $_POST['birthday'];
$born_place = $_POST['born_place'];
$prefecture = $_POST['prefecture'];
$country = $_POST['country'];
$occupation = $_POST['occupation'];
$company = $_POST['company'];
$division = $_POST['division'];
$description = $_POST['description'];
$school = $_POST['school'];
$grade = $_POST['grade'];
$email_ok = $_POST['email_ok'];
$email = $_POST['email'];
$facebook_ok = $_POST['facebook_ok'];
$facebook = $_POST['facebook'];
$instagram_ok = $_POST['instagram_ok'];
$instagram = $_POST['instagram'];
$twitter_ok = $_POST['twitter_ok'];
$twitter = $_POST['twitter'];


//2. DB接続します   try=内容を実行  catch=エラーがあれば処理を止めて以下を実行
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成

// 1. SQL文を用意    【 処理の内容 を記述 】
$stmt = $pdo->prepare("INSERT INTO 
                      selfy_register(id, name01, name02, birthday, born_place, prefecture, 
                                  country, occupation, company, division, description, 
                                  school, grade, email_ok, email, facebook_ok, facebook, 
                                  instagram_ok, instagram, twitter_ok, twitter,date)
                      VALUES(NULL, :name01, :name02, :birthday, :born_place, :prefecture, 
                                  :country, :occupation, :company, :division, :description, 
                                  :school, :grade, :email_ok, :email, :facebook_ok, :facebook, 
                                  :instagram_ok, :instagram, :twitter_ok, :twitter, sysdate() )" 
                      );


//  2. バインド変数を用意    【 SQL injection 攻撃の回避 】
// ※フォームからそのままデータを取り込むのは危険 → :○○と置いてから取り込み処理を実行

// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR

$stmt->bindValue(':name01', $name01, PDO::PARAM_STR);
$stmt->bindValue(':name02', $name02, PDO::PARAM_STR);
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);
$stmt->bindValue(':born_place', $born_place, PDO::PARAM_STR);
$stmt->bindValue(':prefecture', $prefecture, PDO::PARAM_STR);
$stmt->bindValue(':country', $country, PDO::PARAM_STR);
$stmt->bindValue(':occupation', $occupation, PDO::PARAM_STR);
$stmt->bindValue(':company', $company, PDO::PARAM_STR);
$stmt->bindValue(':division', $division, PDO::PARAM_STR);
$stmt->bindValue(':description', $description, PDO::PARAM_STR);
$stmt->bindValue(':school', $school, PDO::PARAM_STR);
$stmt->bindValue(':grade', $grade, PDO::PARAM_STR);
$stmt->bindValue(':email_ok', $email_ok, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':facebook_ok', $facebook_ok, PDO::PARAM_STR);
$stmt->bindValue(':facebook', $facebook, PDO::PARAM_STR);
$stmt->bindValue(':instagram_ok', $instagram_ok, PDO::PARAM_STR);
$stmt->bindValue(':instagram', $instagram, PDO::PARAM_STR);
$stmt->bindValue(':twitter_ok', $twitter_ok, PDO::PARAM_STR);
$stmt->bindValue(':twitter', $twitter, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();


//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{


  //５．index.phpへリダイレクト
header('Location: index01.php');
}


?>
