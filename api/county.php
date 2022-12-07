<?php
 //資料庫連線
 $dsn = "mysql:host=localhost;charset=utf8;dbname=local";
 $pdo = new PDO($dsn,'root','');

 //撈取所有縣市的資料
  $all = "SELECT * FROM `county`";
  $string = "";
  $gets = $pdo->query($all)->fetchAll(PDO::FETCH_ASSOC);
  foreach($gets as $get){
   echo $string = "<option value='".$get['id']."'>".$get['name']."</option>";
  }
 ?>
 