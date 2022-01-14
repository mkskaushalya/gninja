<?php include("php/header.php"); ?>

<body>
	<?php
if(isset($_SESSION['user_id'])){
	include("php/nav.php");
}
?>
<div class="container">
	<?php 



if(!isset($_SESSION['user_id'])){
	
	
	
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		if($page == 'signup'){
			include("php/signup-form.php");
		}elseif($page == 'login'){
			include("php/login-form.php");
		}else{
			include("php/login-form.php");
		}
	}else{
		include("php/login-form.php");
	}
}

	?>
</div>
</body>
<script type="text/javascript" src="js/script.js"></script>

</html>