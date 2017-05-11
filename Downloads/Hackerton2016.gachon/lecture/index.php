<meta charset="utf-8">
<?php
  	$dbConn = mysql_connect("localhost", "root", "1q2w3e4r") or die("connection failed");
	mysql_select_db("Lectwell", $dbConn);

	mysql_query("set session character_set_connection=utf8;");
	mysql_query("set session character_set_results=utf8;");
	mysql_query("set session character_set_client=utf8;");

	$LectureName = $_REQUEST['lectureName'];
	$checkname = mysql_query("SELECT * FROM lectruelist where lectruename='$LectureName'");
	$resultname = mysql_fetch_assoc($checkname);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>당신이 찾는 모든 강의. Lectwell</title>
	<link rel="stylesheet" href="/assets/css/style.css"/>
	<link rel="stylesheet" href="/assets/css/lecture.css"/>
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

	<br />
	<form id="login_form" action="/lecture/" method="GET">
				<div class="login_span">
				<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>"/>
				</div>
				<input type="text" name="lectureName"/>
				<br/><br/><br/><br/>
				
			</form>
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
				<div id="lectestimate">
					<img src="/assets/img/pyunga.png">
				</div>
			<div id="lecture_status">
				<div class="lecture_left">
					<h1><?php echo $LectureName; ?></h1>
				</div>

				<div class="lecture_right_set">
					<div class="lecture_right">
						<span><b><?php echo $resultname["professor"]; ?></b> 교수님</span>
					</div>
					<div class="lecture_right">
						<span><?php echo $resultname["lectruetime"]; ?></span>
					</div>
					<div class="lecture_right">
						<span>학수번호 : <?php echo $resultname["lectruenumber"]; ?></span>
					</div>
				</div>
				
				
			</div>

			<div id="lecture_features">
				<h2>KEYWORD</h2>
				<table id="feature_table">
					<tr>
						<?php if($resultname["feature1"] == 0){ ?>
							<td style="background-color:#7a919d;" name="01">퀴즈</td>
						<?php }else{  ?>
							<td name="01">퀴즈</td>
						<?php } ?>
						<?php if($resultname["feature2"] == 0){ ?>
							<td style="background-color:#7a919d;" name="02">중간고사</td>
						<?php }else{  ?>
							<td name="02">중간고사</td>
						<?php } ?>
						<?php if($resultname["feature3"] == 0){ ?>
							<td style="background-color:#7a919d;" name="03">기말고사</td>
						<?php }else{  ?>
							<td name="03">기말고사</td>
						<?php } ?>
						<?php if($resultname["feature4"] == 0){ ?>
							<td style="background-color:#7a919d;" name="04">필기시험</td>
						<?php }else{  ?>
							<td name="04">필기시험</td>
						<?php } ?>
						<?php if($resultname["feature5"] == 0){ ?>
							<td style="background-color:#7a919d;" name="05">실기시험</td>
						<?php }else{  ?>
							<td name="05">실기시험</td>
						<?php } ?>
					</tr>
					<tr>
						<?php if($resultname["feature6"] == 0){ ?>
							<td style="background-color:#7a919d;" name="01">조별과제</td>
						<?php }else{  ?>
							<td name="06">조별과제</td>
						<?php } ?>
						<?php if($resultname["feature7"] == 0){ ?>
							<td style="background-color:#7a919d;" name="02">발표</td>
						<?php }else{  ?>
							<td name="07">발표</td>
						<?php } ?>
						<?php if($resultname["feature8"] == 0){ ?>
							<td style="background-color:#7a919d;" name="03">리포트 대체</td>
						<?php }else{  ?>
							<td name="08">리포트 대체</td>
						<?php } ?>
						<?php if($resultname["feature9"] == 0){ ?>
							<td style="background-color:#7a919d;" name="04">원어강의</td>
						<?php }else{  ?>
							<td name="09">원어강의</td>
						<?php } ?>
						<?php if($resultname["feature10"] == 0){ ?>
							<td style="background-color:#7a919d;" name="05">토론</td>
						<?php }else{  ?>
							<td name="10">토론</td>
						<?php } ?>
					</tr>
					<tr>
						<?php if($resultname["feature11"] == 0){ ?>
							<td style="background-color:#7a919d;" name="11">원서활용</td>
						<?php }else{  ?>
							<td name="11">원서활용</td>
						<?php } ?>
						<?php if($resultname["feature12"] == 0){ ?>
							<td style="background-color:#7a919d;" name="12">필수서적</td>
						<?php }else{  ?>
							<td name="12">필수서적</td>
						<?php } ?>
						<?php if($resultname["feature13"] == 0){ ?>
							<td style="background-color:#7a919d;" name="13">자격증 강의</td>
						<?php }else{  ?>
							<td name="13">자격증 강의</td>
						<?php } ?>
						<?php if($resultname["feature14"] == 0){ ?>
							<td style="background-color:#7a919d;" name="14">사이버강의</td>
						<?php }else{  ?>
							<td name="14">사이버강의</td>
						<?php } ?>
						<?php if($resultname["feature15"] == 0){ ?>
							<td style="background-color:#7a919d;" name="15">대형강의</td>
						<?php }else{  ?>
							<td name="15">대형강의</td>
						<?php } ?>
					</tr>
				</table>				
			</div>

			<h2>HASHTAG</h2>
			<div id="lecture_hashTag"></div>
<div id="comments">
			<h2>COMMENTS</h2>
			<div id="comment_container">
				<div class="write_comment">
					<form action="/lecture/cmt_write.php" method="POST">
						<input type="text" placeholder="해쉬태그로 당신의 의견을 남겨보세요! #꿀잼" name="comment" />
						<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>"/>
						<input type="hidden" name="lecturenumber" value="<?php echo $resultname["lectruenumber"];?>"/>
						<input type="hidden" name="lectureName" value="<?php echo $resultname["lectruename"];?>"/>
						<button onload="submit()">한마디 남기기</button>
					</form>
				</div>




				

				<?php 
					header("Content-Tpye:text/html;charset=utf-8");
					$tablename = "lecture_".$resultname["lectruenumber"];
					$result = mysql_query("SELECT * FROM $tablename");
					//$result = mysql_query("SELECT * FROM lecture_thisisjava");
					$memberListCount = mysql_affected_rows() ? mysql_affected_rows() : 0;
					for($i=0; $i<$memberListCount; $i++) {
						$member = mysql_fetch_assoc($result);

						echo "<p>".$member['name']." | ".$member['comment']."</p>";
					}

				?>
					    
				</div>

			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.slim.js" integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA=" crossorigin="anonymous"></script>
	<script src="/assets/js/wordcloud2.js"></script>
	<script>
		keywords = [['#대형강의', 100], ['#조별과제', 90], ['#실기시험', 80], ['#토론', 40], ['#원어강의', 30], ['#기말고사', 100]];

		WordCloud(document.getElementById('lecture_hashTag'), { 
			list: keywords,
			fontFamily: 'Youth',
  			color: function (word, weight) {
    			return (weight > 0) ? '#FFF' : '#c2c2c2';
  			},
  			rotateRatio: 0
  		} );
	
	</script>
</body>
</html>