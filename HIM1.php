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
