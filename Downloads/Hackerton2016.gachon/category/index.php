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
	<link rel="stylesheet" href="/assets/css/category.css"/>
	<script>
		var keywords = [];
	</script>
</head>
<body>
	<div class="main_logo">
		<a href="/" ><img src="/assets/img/main_logo.png"/></a>
	</div>

	<div class="main_shortcut"><ul><li><a href="/mypage/mypage.html">MY PAGE</a></li><li><a href="/">LOGOUT</a></li></ul></div>

	<div id="main_cover">
		<div style="background-color: #f28080;" class="lt_circle"></div>
		<div style="background-color: #f3cb7a ;" class="lt_circle"></div>
		<div style="background-color: #87c6ac;" class="lt_circle"></div>



		<div id="main_container">
			<img class="sub_logo" src="/assets/img/category_logo.png"/>
			<h3 class='sub_title'>강의 카테고리 탐색하기</h3>
		</div>
		<div >	
			<form action='/' method="POST">
				<div class="category_select">
					<div class="category_select_box">
						<span><img src="/assets/img/list_deli.png" />분야(이수)</span>
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</div>
					
					<div class="category_select_box">
						<span><img src="/assets/img/list_deli.png" />대학</span>
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</div>

					<div class="category_select_box">
						<span><img src="/assets/img/list_deli.png" />학년</span>
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
						</select>
					</div>
				</div>
				
			</form>


			<table id="result_table">
				<tr>
					<th>학수번호</th><th>교과목명</th><th>영역</th><th>학점</th><th>담당교수</th><th>강의시간</th><th>강의실</th>
				</tr>
				<tr>				<td>11382001</td><td>실용작문</td><td>교양</td><td>2</td><td>주미희</td><td>목5, 목6, 목7, 목8</td><td>아름관 304호</td>
				</tr><tr>
					<td>09512001</td><td>영화와 문화</td><td>교양</td><td>2</td><td>Sara Oh</td><td>수5, 수6, 수7, 수8</td><td>비전타워 304호</td>
				</tr><tr>
					<td>09512002</td><td>영화와 문화</td><td>교양</td><td>2</td><td>Sara Oh</td><td>금5, 금6, 금7, 금8</td><td>새롬관 204호</td>
				</tr><tr>
					<td>11380003</td><td>주제발표와 보고서쓰기</td><td>교양</td><td>2</td><td>한명섭</td><td>목5, 목6, 목7, 목8</td><td>비전타워 305호</td>
				</tr><tr>
					<td>11380003</td><td>실용글쓰기/td><td>교양</td><td>2</td><td>한명섭</td><td>목5, 목6, 목7, 목8</td><td>세종관 305호</td>
				</tr><tr>
					<td>11380003</td><td>현대사회의 성</td><td>교양</td><td>2</td><td>유주은</td><td>목5, 목6, 목7, 목8</td><td>비전타워 305호</td>
				</tr><tr>
					<td>11380003</td><td>사회역사개론</td><td>교양</td><td>2</td><td>김원</td><td>목5, 목6, 목7, 목8</td><td>공학관 305호</td>
				</tr><tr>
					<td>11380003</td><td>회의론</td><td>교양</td><td>2</td><td>이복기</td><td>목5, 목6, 수7, 수8</td><td>비전타워 305호</td>
				</tr><tr>
					<td>11380003</td><td>소프트웨어 공학 개론</td><td>교양</td><td>2</td><td>최혁</td><td>목5, 목6, 목7, 목8</td><td>비전타워 305호</td>
				</tr><tr>
					<td>11380003</td><td>개발자의 이론</td><td>교양</td><td>2</td><td>정웅란</td><td>목5, 금6, 금7, 목8</td><td>공학관2 305호</td>
				</tr><tr>
					<td>11380003</td><td>그래픽스</td><td>교양</td><td>2</td><td>로웅기</td><td>목5, 목6, 목7, 목8</td><td>비전타워 305호</td>
				</tr><tr>
					<td>11380003</td><td>디자인과 사회</td><td>교양</td><td>2</td><td>김지우</td><td>목5, 목6, 화7, 목8</td><td>가름관 305호</td>
				</tr><tr>
					<td>11380003</td><td>순수미술1</td><td>교양</td><td>2</td><td>김찬수</td><td>목5, 화6, 목7, 목8</td><td>비전타워 305호</td>
				</tr><tr>
					<td>11380003</td><td>순수미술2</td><td>교양</td><td>2</td><td>김용수</td><td>목5, 목6, 목7, 수8</td><td>아름관 305호</td>
				</tr><tr>
					<td>11380003</td><td>미래창조경제사회</td><td>교양</td><td>2</td><td>이복문</td><td>수5, 목6, 수7, 목8</td><td>비전타워 305호</td>
				</tr><tr>
					<td>11380003</td><td>의료기술과 VR</td><td>교양</td><td>2</td><td>김문복</td><td>목5, 목6, 월7, 목8</td><td>비전타워 305호</td>
				</tr><tr>
					<td>11380003</td><td>의료학의 기술</td><td>교양</td><td>2</td><td>한명섭</td><td>목5, 월6, 목7, 목8</td><td>비전타워 305호</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>