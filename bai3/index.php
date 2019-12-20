<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $goc = $tugoc = $thaythe = $ketqua = "";
        if (empty($_POST['tugoc'])) {
            $ketqua ="";
        } else {
            $goc = $_POST['goc'];
            $tugoc = $_POST['tugoc'];
            $thaythe = $_POST['thaythe'];
            $ketqua = str_replace($tugoc, $thaythe, $goc);        
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="car col-10">
            <div class="car-header text-center bg-primary p-4 text-white">
                Thay thế chuỗi
            </div>
            <div class="car-body p-4" style="background-color: #F1F1F1;">
                <form action="index.php"  method="POST">
                    <div class="form-group">
                        <label for="goc" class=" text-center">Đoạn văn gốc</label>
                        <input type="text" name="goc" id="goc" class="form-control">
                    </div>
                    <div class="row">
                        <div class="form-group col-6 row ">
                            <label for="tugoc" class="col-3 text-center">Từ gốc</label>
                            <input type="text" name="tugoc" id="tugoc" class="col-8 form-control">
                        </div>
                        <div class="form-group col-6 row">
                            <label for="thaythe" class="row col-4 text-center">Từ thay thế</label>
                            <input type="text" name="thaythe" id="thaythe" class="col-8 form-control">
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="show" class=" text-center"></label>
                        <input type="text" name="ketqua" id="show" value="<?php echo $ketqua;?>" class="form-control">
                    </div>
                    <button type="submit" name="submit" id="submit" class=" form-control col-2"> Thực hiện </button>
                </form>
                <div class="textcenter row"></div>

            </div>
        </div>
    </div>
</body>

</html>
