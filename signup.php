<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>signup</title>
    <style>
      .container {
        padding-top: 100px;
      }
     
    </style>
</head>
<body>
    <div class="container">
    <form action="signup.php">
        <div class="mb-3 mt-3">
            <label for="FirstName" class="form-label">First Name</label>
            <input   type="text" class="form-control" id="username" name="username" placeholder="enter your first name"><br>

            <label for="SurName" class="form-label">SurName</label>
            <input class="form-control" type="text" class="form-control" id="username" name="username" placeholder="enter your surname"><br>

            <label for="staffID" class="form-label">Staff ID:</label>
            <input type="text" class="form-control" id="staffID" name="staffID" placeholder="enter your staff ID"><br>

            <label for="dateOfBirth" class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth"><br>
            
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
            <input type="password" class="form-control" id="password" name="password" placeholder="enter your password" required><br>

            <label for="confirm password" class="form-label">confirm password</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="confirm your password" required><br>

           <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary"><a href="him.php">Back</a></button>
            </div>

          
           
            

      
        </div>


            
           
    </form>
    </div>
    <script lang="en" type="text/javascript">
        

    </script>
    

    
</body>

</html>