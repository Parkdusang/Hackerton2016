<meta charset="utf-8">
<?php
  	// require( dirname( __FILE__ ) . '/../assets/class/Database.class.php');
  	// $pdo = Database::getInstance()->getPdoObject();

	// $query = $pdo->prepare('SELECT * FROM `lectruelist`;');
	// $query->execute();

	// $items = $query->fetchAll( PDO::FETCH_OBJ );
	// foreach( $items as $item ):
	// 	// $nickname = $item->nickname;
	// 	// $id = $item->id;
	// 	// $password = $item->password;
	// 	echo "f";
	// 	echo $item->lectruename
	// 	echo $nickname.$id.$password;
	// endforeach;
	$dbConn = mysql_connect("localhost", "root", "1q2w3e4r") or die("connection failed");
	mysql_select_db("Lectwell", $dbConn);

	mysql_query("set session character_set_connection=utf8;");
	mysql_query("set session character_set_results=utf8;");
	mysql_query("set session character_set_client=utf8;");

	$nickname = $_REQUEST['nickname'];
	$id = $_REQUEST['id'];
	$password = $_REQUEST['password'];
	$lectrue1 = $_REQUEST['lectrue1'];
	$lectrue2 = $_REQUEST['lectrue2'];
	$lectrue3 = $_REQUEST['lectrue3'];
	$lectrue4 = $_REQUEST['lectrue4'];
	$lectrue5 = $_REQUEST['lectrue5'];
 
	$checkid = mysql_query("SELECT * FROM userlist where id='$id'");
	$testid = mysql_fetch_assoc($checkid);
	$str = strcmp($id,$testid["id"]);

	//echo $lectrue1.$lectrue2.$lectrue3.$lectrue4.$lectrue5."이게 떠야한다.".$testid["id"]."그래이거!";
	if(!$_REQUEST['password']){
		$txt = "ids";
		echo "패스워드가 없습니다..";
	}
	if(!$_REQUEST['nickname']){
		$txt = "ids";
		echo "닉네임이 없습니다.";
	}
	if(!$_REQUEST['id']){
		$txt = "ids";
		echo "아이뒤가 없습니다.";
	}
	else{
		$list1 = mysql_query("SELECT * FROM lectruelist where lectruename='$lectrue1'");
		$lectruelist1 = mysql_fetch_assoc($list1);

		$list2 = mysql_query("SELECT * FROM lectruelist where lectruename='$lectrue2'");
		$lectruelist2 = mysql_fetch_assoc($list2);

		$list3 = mysql_query("SELECT * FROM lectruelist where lectruename='$lectrue3'");
		$lectruelist3 = mysql_fetch_assoc($list3);

		$list4 = mysql_query("SELECT * FROM lectruelist where lectruename='$lectrue4'");
		$lectruelist4 = mysql_fetch_assoc($list4);

		$list5 = mysql_query("SELECT * FROM lectruelist where lectruename='$lectrue5'");
		$lectruelist5 = mysql_fetch_assoc($list5);



		//echo $lectruelist1['lectruenumber'].$lectruelist2['lectruenumber'].$lectruelist3['lectruenumber'].$lectruelist4['lectruenumber'].$lectruelist5['lectruenumber'];
		

		$sql = "INSERT INTO userlist(id,password,nickname,lectrue1,lectrue2,lectrue3,lectrue4,lectrue5) VALUES ('".$_REQUEST['id']."', '".$_REQUEST['password']."','".$_REQUEST['nickname']."', '".$lectruelist1['lectruenumber']."','".$lectruelist2['lectruenumber']."','".$lectruelist3['lectruenumber']."','".$lectruelist4['lectruenumber']."','".$lectruelist5['lectruenumber']."')";
		$txt;
		$query_result = mysql_query($sql) or die(mysql_error());
		if ($query_result) {
		    echo("<script>location.replace('http://ec2-52-79-147-113.ap-northeast-2.compute.amazonaws.com/');</script>");
		} else {
		  	
		}
	}

?>
