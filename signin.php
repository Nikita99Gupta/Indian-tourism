<!DOCTYPE html>
<html>
<head> 
	<title>Sign in</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./css/styleSignIn.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
  <form id="form1" action="/" method="GET">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <div id="error1"></div>
      <label>
        <span>Email Address</span>
        <input id="email1" type="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input id="password1" type="password" name="password">
      </label>
      <button class="submit" type="submit">Sign In</button>
      <p class="forgot-pass">Forgot Password ?</p>

      <div class="social-media">
        <ul>
          <li><img src="./assets/singInImages/facebook.png"></li>
          <li><img src="./assets/singInImages/twitter.png"></li>
          <li><img src="./assets/singInImages/linkedin.png"></li>
          <li><img src="./assets/singInImages/instagram.png"></li>
        </ul>
      </div>
    </div>
  </form>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great places to visit!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <form id="form2" action="/" method="GET">
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <div id="error"></div>
        <label>
          <span>Name</span>
          <input id="name" type="text">
        </label>
        <label>
          <span>Email</span>
          <input id="email" type="email">
        </label>
        <label>
          <span>Password</span>
          <input id="password" type="password">
        </label>
        <label>
          <span>Phone Number</span>
          <input id="phone" type="tel">
        </label>
        <button type="submit" class="submit">Sign Up Now</button>
      </div>
      </form>
    </div>
  </div>
<script type="text/javascript" src="./js/signIn.js"></script>
</body>
</html>