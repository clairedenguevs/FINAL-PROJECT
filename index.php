<!DOCTYPE html>

<html>


	<head>

 
		 <meta charset="UTF-8">

  
	<title>BABY RECORD</title>

 
	<link rel="stylesheet" href="css/reset.css">

 
   	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />


	</head>


<body>

  
<form method="post" action="CheckLogin.php" name="aform" target="_top">
<input type="hidden" name="action" value="submit">
<input type="hidden" name="hide" value="">
	<div class="wrap">
		
	<div class="avatar">
      
	<img src="images.jpg">

		</div>
		
	<input type="text" placeholder="myusername" id="myusername" name="myusername" required>
		
	<div class="bar">
			
		<i></i>
		</div>
		
	<input type="password" placeholder="mypassword" id="mypassword" name="mypassword" required>
		
	<a href="" class="forgot_link">forgot ?</a>
		
	<button>Sign in</button>
	</div>

 	
	 <script src="js/index.js">
	</script>



</form>
</body>


</html>