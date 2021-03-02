<?php
require_once('app/PromocodeGenerator.php');
require_once('app/db.php');

$PromocodeGenerator = new PromocodeGenerator();
$dbconnect = new db();
$pdo = $dbconnect->connect();
 $stmt = $pdo->query('SELECT code  FROM promocode.promocodes');
 $oldcodes = $stmt->fetch();
 $newcodes = [];
 $str ='';
 while(count($newcodes) < 1000){
    $code = $PromocodeGenerator->PromocodeGeneratorion();
    if(!in_array($code, $oldcodes) && !in_array($code, $newcodes)){
        $newcodes[] = $code;
        $str = $str."('".$code."'), ";
    }
 }
 $str = mb_substr($str, 0, -2);
$sql = 'INSERT INTO promocode.promocodes (code) VALUES '.$str.'';
print_r($sql);
$stmt = $pdo->query($sql);
?>