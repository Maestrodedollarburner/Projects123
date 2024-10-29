<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project</title>
</head>
<body>
    <h1>My Project</h1>

    
<form method="post" action="login.php">
  <label for="staff_Id">Staff ID:</label>
  <input type="text" id="staff_Id" name="staffId" placeholder="enter your staff id">

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" placeholder="enter your password">

  <input type="submit" value="Login">
  
</form>

<?php 
session_start();
$correct_staffId = 'staff_Id';
$correct_password = 'password';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $staffId = $_POST['staff_Id'];
    $password = $_POST['password'];

    if($staffId == $correct_staffId && $password == $correct_password) {
        // Correct credentials, start a new session
        $_SESSION['staff_Id'] = $staffId;
        echo 'you have successfully logged in';
      } else {
        echo 'Invalid username or password';
    }
  }
  session_start();
unset($_SESSION['username']);
session_destroy();

echo 'You have been logged out';

?>
    
</body>
</html>
<div class="mb-3 mt-3"> <label for="email">email:</label>
  <input class="form-control" type="text" id="" name="email" placeholder="enter your email"> <br>
 </div>

<div class="mb-3">
  <label for="password">Password:</label>
  <input class="form-control" type="password" id="password" name="password" placeholder="enter your password"> <br>
</div>

<div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> 
        Remember me</label>
      
    </div>
     
  <button type="submit" class="btn btn-primary btn-block" value="Login">login</button>
  @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
@import url('https://fonts.googleapis.com/css?family=Quicksand&display=swap');


*{
    margin: 0;
    padding: 0;
    box-sizing:border-box ;
    
    font-family: 'poppins', sans-serif;

}




body{
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
background: #4f3838;

    
}

.container{
    position: relative;
    width: 80%;
    
    background: #6c7e98;
    border-radius: 50px 5px;
    overflow: hidden;
    height: max-content;

}
.container::before{
    content: "";
    position: absolute;
    top: -50px;
    left: -50px;
    width: 370px;
    height: 450px;
    background: linear-gradient(60deg,transparent,#45f3ff, #45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}
.container::after{
    content: "";
    position: absolute;
    top: -50px;
    left: -50px;
    width: 370px;
    height: 450px;
    background: linear-gradient(60deg,transparent,#cf38c5, #cf38c5);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;

}
@keyframes animate
{
    0%
    {
        transform: rotate(0deg);
    }
    100%
    {
        transform: rotate(360deg);
    }
}
form{
    position: absolute;
    inset: 2px;
    border-radius: 50px 5px;
    background: #242121;
    z-index: 10;
    padding: 30px 30px;
    display: flex;
    flex-direction: column;
    width: 100%;
    height: max-content;
}
h2{
    color: #45f3ff;
    font-size: 35px;
    font-weight: 500;
    text-align: center;
}
.form-group{
    position: relative;
    width: 300px;
    margin-top: 35px;

}
.input{
    position: relative;
    width: 100%;
    padding: 20px 10px 10px;
    background: transparent;
    border: none;
    outline: none;
    color: #dcc4c4;
    font-size: 1em;
    letter-spacing: 0.05em;
    z-index: 10;

}
.sink{
    font-size: 20px;
    border: none;
    outline: none;
    background: #45f3ff;
    padding: 5px;
    margin-top: 40px;
    border-radius: 90px;
    font-weight: 600;
    cursor: pointer;

}
 
    