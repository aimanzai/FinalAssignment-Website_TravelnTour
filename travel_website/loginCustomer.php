<html lang="en" dir="ltr">
 <head>
<meta charset="utf-8">
<title>TravelnTour-Login Customer</title>
<style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background: linear-gradient(120deg,#2980b9, #8e44ad);
  height: 100vh;
  overflow: hidden;
  background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(pic/bglogin.jpg);
  background-position:center;
  background-size:cover;
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
.center h1{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}

input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background: black;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover{
  background: grey;
  transition: .5s;
}
.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}
.signup_link a{
  color: black;
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}

</style>
</head>
<body>
    <div class="center">
      <h1>Login</h1>
	  
      <form name="form" method="post" action="login1.php">
	  
        <div class="txt_field">
          <input name="username" type="text" required id="username">
          <span></span>
          <label>Username</label>
        </div>
		
        <div class="txt_field">
          <input name="password" type="password" required id="password">
          <span></span>
          <label>Password</label>
        </div>
		
        <input type="submit" name="Submit" value="Login">
        <div class="signup_link">
          Don't have an account? <a href="signupCustomer.php">Signup</a>
        </div>
		
      </form>
    </div>
	
  </body>
</html>