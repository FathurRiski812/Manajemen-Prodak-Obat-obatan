<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="icon" href="assets/icon.png" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
	href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
			rel="stylesheet"
		/>
  <link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="container">
     <header>
	  <nav>
	    <div class="logo">
		 <!-- <label>PURE PHARMACY MEDICA CENTRE</label> -->
	    </div>
	    <input type="checkbox" id="click" />
	    <label for="click" class="menu-btn">
	       <i class="fas fa-bars"></i>
	    </label>
	    <ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="login.php" class="btn_login">Login</a></li>
		<li><a href="register.php" class="btn_register">Register</a></li>
	    </ul>
        </nav>
	</header>
	<main>
	  <div class="center">
	    <div class="form-login">
			<div>
				<img src="dsglogo/PPMC.png" alt="" style="height : 125px; widht : 125px; margin-top :10px;"/>
			</div>
		 <h3>Login</h3>
		 <form action="login-proses.php" method="post">
		   <input class="input" type="text" name="username"
			    placeholder="Username" />
	         <input class="input" type="password" name="password"
			    placeholder="Password" />
		   <button type="submit" class="btn_login" name="login"  
                      id="login"> Login
		   </button>
		 </form>
		 <a href="register.php" class="link-register">
                  Register Disini</a>
	    </div>
	  </div>
	</main>
   </div>
</body>
</html>
