<!DOCTYPE html>
<html>
<head>
	<title>당신이 찾는 모든 강의. Lectwell</title>
	<link rel="stylesheet" href="/assets/css/style.css"/>
	<link rel="stylesheet" href="/assets/css/login.css"/>
</head>
<body>
	<script type="text/javascript">
	  function mySubmit(index) {
	    if (index == 1) {
	      document.myForm.action='/oauth/signin_.php';
	    }
	    if (index == 2) {
	      document.myForm.action='/oauth/signup.html';
	    }
	    document.myForm.submit();
	  }
	</script>
	<div id="main_cover">
			<div style="background-color: #f28080;" class="lt_circle"></div>
			<div style="background-color: #f3cb7a ;" class="lt_circle"></div>
			<div style="background-color: #87c6ac;" class="lt_circle"></div>

		<div id="main_container">
			<div class="main_logo">
				<img src="/assets/img/main_logo.png"/>
			</div>

			<form id="login_form" action="/oauth/signin_.php" name="myForm" method="POST">
				<div class="login_span">
					<span>ID</span>
				</div>
				<input type="text" name="user_id"/>

				<br/>
				<br/>

				<div class="login_span">
					<span>PW</span>
				</div>
				<input type="password" name="user_pw"/>
				<br/><br/>
				<button onclick='mySubmit(1)' >LOGIN</button>
				<img src="/assets/img/menu_deli.png"/>
				<button onclick='mySubmit(2)' >JOIN US</button>
			</form>
		</div>
	</div>
	
</body>
</html>