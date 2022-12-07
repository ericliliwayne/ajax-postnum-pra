<?php
 //資料庫連線
 $dsn = "mysql:host=localhost;charset=utf8;dbname=local";
 $pdo = new PDO($dsn,'root','');

 //行政區域郵遞號碼查詢
 $county = $_POST['county'];
 $city = $_POST['city'];
 $postnum = "SELECT `postnum` FROM `city` WHERE `county_id` = '$county' AND `cityname`='$city'";
 $results = $pdo->query($postnum)->fetch(PDO::FETCH_ASSOC);
 foreach($results as $result){
    echo "該地區的郵遞區號為 : ".$result;
 }
 ?>