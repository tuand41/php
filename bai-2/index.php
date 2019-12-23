<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    
</head>
<body>
    <div class="container mt-5">
        <div class="col-6">
            <?php
                include 'Calculate.php';

                $result = "";
                $num1 = isset($_POST["num1"]) ? $_POST["num1"] : "";
                $num2 = isset($_POST["num2"]) ? $_POST["num2"] : "";
                $cal = isset($_POST["cals"]) ? $_POST["cals"] : "";

                if (isset($_POST['submit'])) 
                {
                    $calculate = new Calculate($num1,$num2,$cal);
                    $result = $calculate->tinh();
                }
            ?>
            <form action="index.php" method="POST">
                <div class="form-group row">
                    <label class="col-4" for="num1">Số thứ hai</label>
                    <input  type="text" name="num1" class="form-control col-8" id="num1" value="<?php echo $num1; ?>">
                </div>
                <div class="form-group row">
                    <label class="col-4" for="num2">Số thứ hai </label>
                    <input  type="text" name="num2" class="form-control col-8" id="num2" value="<?php echo $num2; ?>">
                </div>
                <div class="form-group row">
                    <label class="col-4" for="cal1">Select list:</label>
                    <select class="form-control col-8" id="cal1" name="cals">
                        <option value="+" <?php if (isset($_POST['cals']) && $_POST['cals'] == '+') { ?>selected="true" <?php }; ?>>+</option>
                        <option value="-" <?php if (isset($_POST['cals']) && $_POST['cals'] == '-') { ?>selected="true" <?php }; ?>>-</option>
                        <option value="*" <?php if (isset($_POST['cals']) && $_POST['cals'] == '*') { ?>selected="true" <?php }; ?>>*</option>
                        <option value="/" <?php if (isset($_POST['cals']) && $_POST['cals'] == '/') { ?>selected="true" <?php }; ?>>/</option>
                    </select>
                  </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
            <p class="mt-4"><?php echo $result; ?></p>
        </div>
    </div>
</body>
</html>
