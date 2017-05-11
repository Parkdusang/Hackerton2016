<?php
	// require( dirname( __FILE__ ) . '/../assets/class/Database.class.php');
	//  $pdo = Database::getInstance()->getPdoObject();
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>당신이 찾는 모든 강의. Lectwell</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/assets/css/style.css"/>
	<link rel="stylesheet" href="/assets/css/recommend.css"/>
	<script>
		var keywords = [];
	</script>
</head>
<body>
	<div class="main_logo">
		<a href="/" ><img src="/assets/img/main_logo.png"/></a>
	</div>

	<div class="main_shortcut"><ul><li><a href="">MY PAGE</a></li><li><a href="">LOGOUT</a></li></ul></div>

	<div id="main_cover">
		<div style="background-color: #f28080;" class="lt_circle"></div>
		<div style="background-color: #f3cb7a ;" class="lt_circle"></div>
		<div style="background-color: #87c6ac;" class="lt_circle"></div>



		<div id="main_container">
			<img class="sub_logo" src="/assets/img/recommend_logo.png"/>
			<h3 class='sub_title'>나와 꼭 맞는 강의는 무엇일까요?</h3>
		</div>
		<div id="main_content">	
			<table id="progress_bar">
				<tr>
					<td style="font-size: 20px; border-bottom: 9px solid #7a919d">STEP 1</td>
					<td style="font-size: 20px; border-bottom: 9px solid #053b4e">STEP 2</td>
					<td style="font-size: 20px; border-bottom: 9px solid #7a919d">STEP 3</td>
				</tr>
				<tr>
					<td></td><td>강의검색</td><td></td>
				</tr>

			</table>

			<form id="select_feature" action="" method="POST">

				<div id="lecture_selector">
					<span>선호 교수</span>
					<select id="select_box">
						<option value="0">전공</option>
						<option value="1">교양</option>
					</select>
				</div>
				<div id="lecture_selector">
					<span>선호 위치</span>
					<select id="select_box">
						<option value="0">전공</option>
						<option value="1">교양</option>
					</select>
				</div>
				<div id="lecture_selector">
					<span>선호 시간</span>
					<select id="select_box">
						<option value="0">전공</option>
						<option value="1">교양</option>
					</select>
				</div>
				

				<button onload="summit()">다음</button>
			</form>
			
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.js" integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA=" crossorigin="anonymous"></script>
	<script>
		var features = document.querySelectorAll('#feature_table td')[0].getAttribute('name');
		


	</script>
</body>
</html>