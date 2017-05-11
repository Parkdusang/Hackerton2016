<!DOCTYPE html>

<?php 

?>
<html>
<head>
	<title>당신이 찾는 모든 강의. Lectwell</title>
	<link rel="stylesheet"  href="/assets/css/style.css"/>
	<link rel="stylesheet"  href="/assets/css/search.css"/>

</head>
<body>
	<div class="main_shortcut"><ul><li><a href="/mypage/mypage.html">MY PAGE</a></li><li><a href="/">LOGOUT</a></li></ul></div>

	<div id="main_cover">
			<div style="background-color: #f28080;" class="lt_circle"></div>
			<div style="background-color: #f3cb7a;" class="lt_circle"></div>
			<div style="background-color: #87c6ac;" class="lt_circle"></div>

		<div id="main_container">
			<div>
				<tr>
					<td>
					<div id="cate1"> <img src="/assets/img/cate1.png"></div></td>
					<td>
					<div id="cate2"><img src="/assets/img/cate2.png"></div>
					</td>
					<td>
					<div id="cate3"><a href="/category/index.php"><img src="/assets/img/cate3.png"></a></div>
					</td>
				</tr>
					
				</div>
			<div class="main_logo">
				<img src="/assets/img/main_logo.png"/>
			</div>

			<form id="login_form" action="/lecture/" method="GET">
				<div class="login_span">
				<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>" />
				</div>
				<input type="text" name="lectureName"/>
				<br/>
				<br/>
				<br/>
				<br/>
				
			</form>
		</div>
	</div>
	
</body>
</html>