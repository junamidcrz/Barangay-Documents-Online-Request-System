<html>
<html lang="en">  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> BDORS </title>
  <link rel="stylesheet" type="text/css" href="signupstyle.css"/>
  <script src="https://kit.fontawesome.com/b0811c54d0.js" crossorigin="anonymous"></script>
  
</head>
<body>
 	<div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="signup.php" class="sign-in-form" method="POST">
		<div class="backhome">
		   <ul>
           <li><a href="index.php">Back to Home</a></li>
		   </ul>
	    </div>
          <h2 class="title"> Sign in </h2>
		  
          <div class="input-field"> 
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="Username">
        </div>
        <div class="input-field"> 
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="Password">
        </div>
          <input type="submit" value="Login" class="btn solid">
		  
          <p class="social-text">or sign in with social platform</p>
		  
          <div class="social-media">
            <a href="#" class="social-icon"> 
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon"> 
              <i class="fab fa-google"></i>
            </a>
          </div>
        </form> 

        <form action="reg.php" class="sign-up-form" method="POST"> 
          <h2 class="signup-title"> Sign up </h2>
		   
		  <div class="signup-input"> 
            <i class="fas fa-user"></i>
            <input type="text" placeholder="First Name" name="FirstName">
        </div>
		<div class="signup-input"> 
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Last Name" name="LastName">
        </div>
          <div class="signup-input"> 
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="Username">
        </div>
        <div class="signup-input"> 
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Email" name="Email">
        </div>
        <div class="signup-input"> 
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="Password">
        </div>
		<div class="signup-input"> 
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="CPassword">
        </div>
		
		   <input type="hidden" id="Status" name="Status">
           <script type="text/javascript"> 
		   document.getElementById("Status").setAttribute('value','Active');
		   </script>
	
          <input type="submit" value="Sign up" class="btn solid" name="signup">
		  
          <p class="social-signup">or sign up with social platform</p>

          <div class="social-media">
            <a href="#" class="social-icon"> 
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon"> 
              <i class="fab fa-google"></i>
            </a>
          </div>
        </form> 
      </div>
    </div>

    <div class="panels-container"> 
      <div class="panel left-panel"> 
        <div class="content"> 
		  
          <h3> New here? </h3>
          <p> Create an account and request your documents now.</p>
          <button class="btn transparent" id="sign-up-btn"> Sign up </button><br>
        </div>
        <img src="img/log.svg" class="image">
      </div>
      <div class="panel right-panel"> 
        <div class="content"> 
          <h3> One of us? </h3>
          <p> Login your account and request your documents now.</p>
          <button class="btn transparent" id="sign-in-btn"> Sign in </button>
        </div>
        <img src="img/register.svg" class="image">
      </div>
    </div>
  </div>	
  
  <script src="app.js"></script>

</body>
</html>