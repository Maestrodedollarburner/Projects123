<!Doctype html>
<html lang="en">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width", initial-scale=1.0, maximum-scale=1.>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="herbert.css">

    
    <title>sherp meter storage</title>
    <body>

    <div class="container" id="shep">
        <form action="sherp.php">
        <h2 class="sign-head">Shep Information</h2>

            <div class="form-container">
                <label class="control-labe"l>Name</label>

                <div class="input">
                <input type="text" class="form-control" id="name" placeholder="enter the full name of the customer">
                </div>

                
                 <label class="control-label">Address</label>
                 <div class="input">
                 <input type="text" class="form-control" id="address" placeholder="enter gps, example, AO-256-1457">
                 </div>
                 
                 <label class="control-label">Meter Number</label>

                 <div class="input">
                 <input type="text" class="form-control" id="meter" placeholder="example, 120147589">
                 </div>

                 <label class="control-label">Meter Name</label>

                 <div class="input">
                 <input type="text" class="form-control" id="meterName" placeholder="example, Hong">
                 </div>

                 <label class="control-label">Meter Readings</label>

                 <div class="input">
                 <input type="text" class="form-control" id="meterReadings" placeholder="example, 318kwh">
                 </div>
                  <div class="form-group">
                 <button type="submit" class="btn btn-primary">Save</button>
                 </div>
                 
            </div>
            <div>

            </div> 

                
                 
                

        </form>


    </div>








    </body>
</html>