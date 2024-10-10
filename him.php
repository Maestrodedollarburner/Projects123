<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>My Project</title>
</head>
<body>
    <h1>My Project</h1>

    <div class="container mt-3">

<form method="post" action="./him.php">
 <div class="mb-3 mt-3"> <label for="staff_Id">Staff ID:</label>
  <input class="form-control" type="text" id="staff_Id" name="staffId" placeholder="enter your staff id"> <br><br>
 </div>

<div class="mb-3">
  <label for="password">Password:</label>
  <input class="form-control" type="password" id="password" name="password" placeholder="enter your password"> <br><br>
</div>

<div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> 
        Remember me</label>
      
    </div>
     <div class="display-flex >
  <button type="submit" class="btn btn-primary btn-block" value="Login">login</button>
  <button type="submit" class="btn btn-primary btn-block" value="signup"><a href="signup.php">signup</a></button>
    </div>
  
</form>
    </div>


</body>
</html>
