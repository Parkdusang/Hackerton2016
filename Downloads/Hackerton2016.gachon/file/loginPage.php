<?php
$dbConn = mysql_connect("localhost", "root", "1q2w3e4r") or die("connection failed");
mysql_select_db("Lectwell", $dbConn);
//require("./dbConn.php");


$_id = $_REQUEST['id'];
$password = $_REQUEST['password'];
$retval;
$checkid = mysql_query("SELECT * FROM userlist where id='$_id'");
$testid = mysql_fetch_assoc($checkid);


$str = strcmp($_id,$testid["id"]);
if($str){
	$retval = "failedID";
}
else{
	$str = strcmp($password,$testid["password"]);
	if($str){
		$retval = "failedpassword";
	}
	else{
		echo("<script>location.replace('http://ec2-52-79-147-113.ap-northeast-2.compute.amazonaws.com/');</script>"); 
		//$retval = "success";
	}
}
echo $retval;

// $stx = $gettype.$retval.$type." dbId , type ,password:".$testid["id"]
//   							." ".$testid["type"]." ".$testid["password"];

// header('Content-type: application/json;charset=utf-8');
// echo json_encode($stx);

//http://ec2-52-79-99-1.ap-northeast-2.compute.amazonaws.com/lecture/index.php
?>
