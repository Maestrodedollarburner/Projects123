<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="herbert.css">
</head>
<body>
    
    <div class="container">

  
<form method="post" action="./him.php">
  <h2 class="sign-head">Sign In</h2>

  
  <div class="form-group">
 <label for="email"> Email:</label>

    <div class="input">
    <input type="email" class="form-control value" placeholder="enter your email address" name="email">
  </div> 



  <label for="password">Password:</label>
  <div class="input">
  <input class="form-control" type="password" id="password" name="password" placeholder="enter your password">
  </div>
</div>


<div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> 
        Remember me</label>
      
    </div>
    
    <div class="sink">
  <button type="submit" class="btn btn-primary">Log In</button>
  </div> 
  <p class="fog-link"><a  href="#">Forgot Password?</a></p>
  
  <div class="links">
   
    <span>Don't have an account?</span>
    <a href="signup.php">Sign Up</a>
  </div>

 
    
  
</form>








</div>
  


</body>
</html>
