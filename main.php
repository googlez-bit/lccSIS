<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | LCC-SIS</title>
    <link rel="stylesheet" href="style/mainStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="icon" href="images/lcclogo.png" type="image/icon">
</head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="subtitle">
            <div class="logintxt">LOGIN<br>
            <img class="loginicon" src="images/lcclogo.png" alt="lcc-logo">
            <p class="subtxt">Hello LCCIan! Please login to your account.</p>
        </div>
        </div>
        <form action="#">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email or Phone" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" required>
          </div>
          <!--div class="pass"><a href="#">Forgot password?</a></-div-->
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
        </form>
      </div>
    </div>

  </body>
</html>
