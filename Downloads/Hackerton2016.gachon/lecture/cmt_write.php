<?php
	$dbConn = mysql_connect("localhost", "root", "1q2w3e4r") or die("connection failed");
	mysql_select_db("Lectwell", $dbConn);

	mysql_query("set session character_set_connection=utf8;");
	mysql_query("set session character_set_results=utf8;");
	mysql_query("set session character_set_client=utf8;");

	$id = $_REQUEST['id'];
	$lecturenumber= $_REQUEST['lecturenumber'];
	$comment= $_REQUEST['comment'];
	$lectureName= $_REQUEST['lectureName'];
	$tablename = "lecture_".$lecturenumber;

	$checkname = mysql_query("SELECT * FROM userlist where id='$id'");
	$resultname = mysql_fetch_assoc($checkname);

	$sql = "INSERT INTO $tablename(name,comment) VALUES ('".$resultname["nickname"]."', '".$_REQUEST['comment']."')";
	$txt;
	$query_result = mysql_query($sql) or die(mysql_error());
	if ($query_result) {
	    echo("<script>location.replace('http://ec2-52-79-147-113.ap-northeast-2.compute.amazonaws.com/lecture/index.php?id=".$id."&lectureName=".$_REQUEST['lectureName']."');</script>");
	} else {
	  	
	}
?>