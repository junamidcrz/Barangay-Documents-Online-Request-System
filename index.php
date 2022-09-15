<html>
<html lang="en">  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> BDORS </title>
  <script src="https://kit.fontawesome.com/b0811c54d0.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"charset="utf-8"></script>
</head>


<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

* {
	margin: 0;
	padding: 0;
	font-family: "Roboto", sans-serif;	
}

.container {
	width: 100%;
	min-height: 100vh;
	padding-left: 8%;
	padding-right: 8%;
	box-sizing: border-box;
	overflow: hidden; 
}

.navbar {
	width: 100%;
	display: flex;
	align-items: center;
}

.logo h3 {
	color: #000;
    font-size: 22px;
    font-weight: 900;
	width: 50px;
	cursor: pointer;
	margin: 30px 0;
}

.logo span {
	color: #5995fd;
}

.menu-icon {
	width: 22px;
	cursor: pointer;
	display: none;
}

.menu-icon:hover {
	color: #5995fd;
}

nav {
	flex: 1;
	text-align: right;
}

nav ul li {
	list-style-type: none;
	display: inline-block;
	margin-right: 30px;
}

nav ul li a {
	text-decoration: none;
	text-transform: uppercase;
	color: #000;
	font-size: 17px;
	font-weight: 400;
	transition: 0.3s;
}

nav ul li a:hover {
	color: #4481eb;
	border-bottom: 2px solid #5995fd;
}

.row {
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin: 25px 0;
}

.col-1 {
	flex-basis: 40%;
	position: relative;
	margin-left: 50px;
}

.col-1 h2 {
	font-size: 43px;
	font-weight: 500;
}

.col-1 h3 {
	font-size: 28px;
	color: #707070;
	font-weight: 100;
	margin: 20px 0 10px;
}

.col-1 p {
	font-size: 18px;
	color: gray;
	font-family: 'Open Sans', sans-serif;
	padding-top: 10px;
	font-weight: 300;
}

.col-1 h4 {
	margin: 30px 0;
	font-size: 20px;
}

button {
	width: 140px;
	border: 0;
	padding: 12px 10px;
	outline: 500;
	color: #fff;
	font-weight: 500;
	background-image: linear-gradient( -45deg, #4d84e2 0%, #04befe 100%);
	border: 1px solid #e0e4e8;
	border-radius: 6px;
	cursor: pointer;
	transition: width 0.5s;
}

button a {
	text-decoration: none;
	color: #fff;
	font-weight: 400;
	text-transform: uppercase;
}

button img {
	width: 30px;
	display: none;
}

button:hover img {
	display: block;
}

button:hover {
	width: 170px;
	display: flex;
	align-items: center;
	justify-content: space-between;
}

.col-1::after {
	content: '';
	width: 10px;
	height: 60%;
	background-image: linear-gradient(-45deg, #4d84e2 0%, #04befe 100%);
	position: absolute;
	left: -40px;
	top: 8px;
}

.col-2 {
	position: relative;
	flex-basis: 60%;
	display: flex;
	align-items: center; 
}

.col-2 .vector {
	width: 90%;
	margin-top: -10px;	
}

.color-box {
	position: absolute;
	right: 0;
	top: -10;
	background-image: linear-gradient(-45deg, #4d84e2 0%, #04befe 100%);
	border-radius: 20px 0 0 20px;
	height: 100%;
	width: 80%;
	z-index: -1;
	transform: translateX(150px);
}

.signup-btn img {
	width: 35px;
	margin-bottom: 5px;
	color: #fff;
}

.signup-btn p {
	color: #fff;
	font-weight: 500;
}
.signup-btn {
	text-align: center;
	color: #fff;
	cursor: pointer;
}

.social-links {
	padding-top: 30px;
	text-align: center; 
}

.social-icon {
	font-size: 20px;
	margin-right: 50px;
	cursor: pointer;
    text-decoration: none;
	color: #000;
	transition: 0.5s;
	transition-property: color;
}

.social-icon:hover {
	color: #5995fd;
}


/*Responsive part*/

@media only screen and (max-width: 780px){
nav ul {
	width: 100%;
	background: linear-gradient(90deg, rgba(4,190,254,1) 0%, rgba(47,50,58,0.6474964985994398) 0%);
	opacity: 10;
	position: absolute;
	top: 75px;
	right: 0;
	z-index: 2;
}
	
nav ul li {
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
}
	
nav ul li a {
    color: #fff;
}
	
.menu-icon {
	display: block;
}	
	
#menulist {
	overflow: hidden;
	transition: 0.5s;
}
	
.row {
	flex-direction: column-reverse;
	margin: 50px 0;
}
	
.col-2 {
	flex-basis: 100%;
	margin-bottom: 50px;
}
	
.col-2 .vector {
    width: 77%;
}
	
.color-box {
	transform: translateX(75px);
}
	
.col-1 {
	flex-basis: 100%;
	margin-top: -10px;
}
	
.col-1 h2 {
	font-size: 30px;
}
	
.col-1 p {
	font-size: 15px;
}
	
.social-links {
	margin-top: 10px;
}
}
</style>


<body>
 	<div class="container">
 		<div class="navbar">
 			<div class="logo">
  		    <h3>BD<Span>ORS</Span></h3>
  	        </div>   
 			<nav> 
			  <ul id="menuList">
 				<li><a href="index.php"> Home </a></li>
 				<li><a href=""> About </a></li>
 				<li><a href=""> Contact </a></li>
 				<li><a href="login.php"> Login </a></li>
			  </ul>
 			</nav>
 			<img src="img/menu.png" class="menu-icon" onclick="togglemenu()">
 		</div>
		
		<div class="row"> 
			<div class="col-1">
				<h2> BARANGAY DOCUMENTS <br> ONLINE REQUEST SYSTEM</h2>
				<p>  a website where you can request barangay documents 24/7</p>
				<h4> </h4>
				<button type="button"><a href="login.php">Request Now!</a><img src="img/arrow.png"></button>
			</div>
			<div class="col-2">
				<img src="img/vector.png" class="vector">
				<div class="color-box"> </div>
				<div class="signup-btn">
				    <a href="login.php"><img src="img/add.png"></a>
				    <p> <small> Sign in </small></p>
			    </div>
			</div>
		</div>

		<div class="social-links">
			<a href="#" class="social-icon"> 
              <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon"> 
              <i class="fab fa-instagram"></i>
            </a>
		</div>
 	</div>

 	<script>
 		function togglemenu() {
        var x = document.getElementById("menuList");
        if (x.style.display === "none") 
		{
        x.style.display = "block";
        } 
		else 
		{
        x.style.display = "none";
        }
        }
 	</script>
</body>
</html>