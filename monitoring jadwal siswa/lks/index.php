<!DOCTYPE html>
<html>
<head>
	<title>form login</title>
	  
	  <style>
	 #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }
    body {
       background-image: url(img/bg4.jpeg);
       background-repeat: no-repeat;
       background-size: 100%;
   }
  	 #card-content {
      padding: 12px 44px;
}
	#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
}
	.underline-title {
      background:#656C68;
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
}
	a {
    text-decoration: none;
}
	label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
}
	#forgot-pass {
    color: #484F4E;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 3px;
    text-align: right;
}
	.form {
    align-items: left;
    display: flex;
    flex-direction: column;
}
	.form-border {
    background: #656C68;
    height: 1px;
    width: 100%;
}
	.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
}
	#signup {
    color: #484F4E;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-top: 16px;
    text-align: center;
}
	#submit-btn {
    background: #484F4E;
    border: none;
    border-radius: 21px;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 50px;
    transition: 0.25s;
    width: 153px;
    text-align: center;
}
	


	  </style> 
</head>
<body>
		<div id="card">
			<div id="card-content">
  		<div id="card-title">
    	<h2>LOGIN</h2>
    	<div class="underline-title"></div>
  </div>
</div>
	<form method="post" class="form"> </form>
	<label for="user-email" style="padding-top:13px">&nbsp;Username</label>
  	<input
   id="user-email"
   class="form-content"
   type="email"
   name="email"
   autocomplete="on"
   required />
   <br>
   <br>
   <br>

  	<div class="form-border"></div>
	<label for="user-password" style="padding-top:22px">&nbsp;Password</label>
  	<input
   id="user-password"
   class="form-content"
   type="password"
   name="password"
   required />
   <br>
   <br>
   <br>

  	<div class="form-border" align="center"></div>
	<a href="#"><legend id="forgot-pass">Forgot password?</legend></a>
	<input id="submit-btn" type="submit" name="submit" align="center" value="Login" />
	<input id="submit-btn" type="submit" name="submit" align="center" value="Register" />
	
		 </form>
</div> 
</body>
</html>