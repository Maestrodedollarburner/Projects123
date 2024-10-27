<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="herbert.css">
    <link rel="stylesheet" href="overlay.css">

    <title>Confirmation</title>
</head>

<body>

    <div class="container">

        <form class="conf-form" method="post" action="./confirmation.php">
            <select name="confirm" id="confirm">
                <option value="m-read" placeholder="enter customer's meter readings">Meter Readings</option>
                <option value="m-num" placeholder="enter customer's meter number">Meter Number</option>
            </select>
            <div class="m-num">
                <label class="control-label">Meter Number</label>

                <div class="input">
                    <input type="text" class="form-control" id="meter" placeholder="example, 120147589">
                </div>
            </div>
            <div class="m-read">
                <label class="control-label">Meter Readings</label>

                <div class="input">
                    <input type="text" class="form-control" id="meter" placeholder="example, 120147589">
                </div>
            </div>
        </form>
    </div>
    <button type="button" class="btn save btn-primary">Save</button>

    <div class="overlay">
        <div class="pop-win">
            <button class="cls-btn">
                close
            </button>
            <p class="">overlay</p>
        </div>

    </div>
    <script src="protected.js"></script>

</body>

</html>