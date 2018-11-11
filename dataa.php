<?php

/*include_once('connect.php');*///(title,date)



require("connect.php");
$dsn="mysql:dbname=".BASE.";host=".SERVER;
$stt = $_POST['stt'];
$type= $_POST['type'];
$ddd=date('Y-m-d H:i:s', $stt);


$title = $_POST['titre'];
try{
	$conn=new PDO($dsn,USER,PASSWD);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="insert into rendez_vous (date_rdv,titre,type,patients_id) values  ('$ddd','$title','$type','1') ";
	$conn->exec($sql);
}
catch(PDOException $e){
	printf("echec de la connexion: %s\n",$e->getMessage());
	exit();
}





/*
$date = /*$_POST['date'];'2018-11-07';
$title = $_POST['titre'];
if (isset($title)) {
	mysql_query("insert into tab values ('10','$title','$date') ");

}*/


  ?> 