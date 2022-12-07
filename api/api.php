<?php
 //資料庫連線
 $dsn = "mysql:host=localhost;charset=utf8;dbname=local";
 $pdo = new PDO($dsn,'root','');
 
 //行政區域查詢
 if(isset($_POST['county'])){
  $county = $_POST['county'];
  $res = "";
  $city = "SELECT `cityname` FROM `city` WHERE `county_id` = '$county'";
  $results = $pdo->query($city)->fetchAll(PDO::FETCH_ASSOC);
  foreach($results as $result){
    foreach($result as $area){
       echo $res="<option value='$area'>$area</option>";
     }
  }
 }
 ?>
 