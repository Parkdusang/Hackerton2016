<?php
	$dbConn = mysql_connect("localhost", "root", "1q2w3e4r") or die("connection failed");
	mysql_select_db("Lectwell", $dbConn);

	$login = $_POST["login"];
	$id = $_POST["user_id"];
	$pw = $_POST["user_pw"];

	$checkid = mysql_query("SELECT * FROM userlist where id='$id'");
	$resultid = mysql_fetch_assoc($checkid);

	$str = strcmp($id,$resultid["id"]);
	if($str){
		echo("<script>location.replace('http://ec2-52-79-147-113.ap-northeast-2.compute.amazonaws.com/');</script>");
	}
	else{
		$str = strcmp($pw,$resultid["password"]);
		if($str){
			echo("<script>location.replace('http://ec2-52-79-147-113.ap-northeast-2.compute.amazonaws.com/');</script>"); 
		}
		else{
			echo("<script>location.replace('http://ec2-52-79-147-113.ap-northeast-2.compute.amazonaws.com/search/1105.php?id="."$id"."');</script>"); 
			//$retval = "success";
		}
	}

	
	// if(!empty($_POST['user_id'])) {
	// 	echo $id." ".$pw;
	// } else {
	// 	echo "n";
	// }

?>
<!-- 
<script>
	setTimeout(function(){
		location.href = "/lecture/";
	}, 1000);
</script> -->