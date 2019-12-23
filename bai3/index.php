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
    <div class="container">
        <div class="car col-10">
            <div class="car-header text-center bg-primary p-4 text-white">
                Thay thế chuỗi
            </div>
            <div class="car-body p-4" style="background-color: #F1F1F1;">
                <?php
                    $goc = $tugoc = $thaythe = $ketqua = $error = "";
                    $goc = isset($_POST['goc']) ? $_POST['goc'] : "";
                    $tugoc = isset($_POST['tugoc']) ? $_POST['tugoc'] : "";
                    $thaythe = isset($_POST['thaythe']) ? $_POST['thaythe'] : "";

                    if (isset($_POST['submit'])) 
                    {
                        $error = empty($goc) ? "hãy nhập đoạn văn gốc" : "";
                        $error .= empty($tugoc) ? "<br>hãy nhập từ gốc" : "";
                        $error .= empty($thaythe) ? "<br>hãy nhập từ thay thế" : "";
                        $ketqua = str_replace($tugoc, $thaythe, $goc);
                    }                                         
                ?>
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label for="goc" class=" text-center">Đoạn văn gốc</label>
                        <input type="text" name="goc" id="goc" value="<?php echo $goc;?>" class="form-control">
                    </div>
                    <div class="row">
                        <div class="form-group col-6 row ">
                            <label for="tugoc" class="col-3 text-center">Từ gốc</label>
                            <input type="text" name="tugoc" id="tugoc" value="<?php echo $tugoc;?>" class="col-8 form-control">
                        </div>
                        <div class="form-group col-6 row">
                            <label for="thaythe" class="row col-4 text-center">Từ thay thế</label>
                            <input type="text" name="thaythe" id="thaythe" value="<?php echo $thaythe;?>" class="col-8 form-control">
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="show" class=" text-center"></label>
                        <input type="text" name="ketqua" id="show" value="<?php echo $ketqua;?>" class="form-control">
                    </div>
                    <button type="submit" name="submit" id="submit" class="form-control col-2"> Thực hiện </button>
                </form>                
                <div class="textcenter row"></div>
            </div>
            <p><?php echo $error; ?></p>
        </div>
    </div>
</body>
</html>