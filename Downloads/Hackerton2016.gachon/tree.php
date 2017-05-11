<?php
 	$dbConn = mysql_connect("localhost", "root", "1q2w3e4r") or die("connection failed");
	mysql_select_db("Lectwell", $dbConn);

	$retval = array();
	$retval['rescode'] = '00';
	$retval['data'] = null;

	$stx = "SELECT * FROM treelist"
	$result = mysql_query($stx);
	$memberListCount = mysql_affected_rows() ? mysql_affected_rows() : 0;
	for($i=0; $i<$memberListCount; $i++) {
		$member = mysql_fetch_assoc($result);
		//$member['reg_date'] = date("Y/m/d", $member['reg_tm']);
		$retval['treedata'][$i] = $member;
	}

	header('Content-type: application/json');
	echo json_encode($retval);
?>
