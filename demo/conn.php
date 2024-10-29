<?php


define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASS', 'root');
try{

       	$conn = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME, DB_USER, DB_PASS);
       	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //  $link->exec("SET CHARACTER SET utf-8");
      //  $this->pdo  =  $link;
//return $link;
      } catch (PDOException $e) {
        die("Connection error...".$e->getMessage());
//return  null;
      

    
}

	
?>