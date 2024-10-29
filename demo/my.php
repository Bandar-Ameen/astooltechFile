<?php
$pdo=new PDO('sqlite:test.db');
$stament=$pdo->query("select *from groups");
$row=$stament->fetchAll(PDO::FETCH_ASSOC);
var_dump($row);

?>