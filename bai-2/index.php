<?php
    include 'Calculate.php';
    $num1 = $num2 = $cal = $result = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $cal = $_POST["cals"];    
        $calculate = new Calculate($num1,$num2,$cal);        
    }
   
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="col-6">
            <form action="index.php" method="POST">
                <div class="form-group row">
                    <label class="col-4" for="num1">Số thứ hai</label>
                    <input  type="number" name="num1" class="form-control col-8" id="num1">
                </div>
                <div class="form-group row">
                    <label class="col-4" for="num2">Số thứ hai </label>
                    <input  type="number" name="num2" class="form-control col-8" id="num2">
                </div>
                <div class="form-group row">
                    <label class="col-4" for="cal1">Select list:</label>
                    <select class="form-control col-8" id="cal1" name="cals">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value ="/">/</option>
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <p class="mt-4"><?php echo $calculate->tinh(); ?></p>
        </div>
    </div>
</body>

</html>
