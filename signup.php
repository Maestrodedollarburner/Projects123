<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="herbert.css">
    <title>signup</title>
    <style>
      .container {
        padding-top: 100px;
      }
     
    </style>
</head>
<body>

    <div class="container" id="signup">
    
    <form action="signup.php">
    <h2 class="sign-head">Sign Up</h2>
        <div class="mb-3 mt-3">
            <label for="FirstName" class="form-label">First Name</label>

            <div class="input">
            <input   type="text" class="form-control" id="username" name="username" placeholder="enter your first name"><br>
            </div>

            <label for="SurName" class="form-label">SurName</label>
            
            <div class="input">
            <input class="form-control" type="text" class="form-control" id="username" name="username" placeholder="enter your surname"><br>
            </div>

            <label for="staffID" class="form-label">Staff ID:</label>

            <div class="input">
            <input type="text" class="form-control" id="staffID" name="staffID" placeholder="enter your staff ID"><br>
            </div>
            
            <div class="form-group">
                <label>Gender</label><br>
                <input type="radio" id="male" name="gender" value="Male" required>

                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="Female" required>

                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="Other" required>

                <label for="other">Other</label>
            </div>

           
            <label for="password" class="form-label">Password</label>
           
            <div class="input">           
            <input type="password" class="form-control" id="password" name="password" placeholder="enter your password" required><br>
            </div>

            <label for="confirm password" class="form-label">confirm password</label>
           
            <div class="input">
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="confirm your password" required><br>
            </div>

           <div class="form-group">


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            
            </div>
            <div class="links">
   
   <span><a href="him.php">Already have an account?</a></span>
   

          
           
            

      
        </div>


            
           
    </form>
    </div>
    <script lang="en" type="text/javascript">
        

    </script>
    

    
</body>

</html>