<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    
</head>
<body>
    <div class="container">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Hình tròn</div>
                <div class="panel-body">
                    <?php
                        $pi = 3.14;
                        $error = "";
                        $flag = true;
                        $dientich = isset($_POST['dientich']) ? $_POST['dientich'] : "";
                        $bankinh = isset($_POST['bankinh']) ? $_POST['bankinh'] : "";

                        if (isset($_POST['submit'])) 
                        {
                            if ($dientich == "" && $bankinh == "")
                            { 
                                $error = "Xin nhập bán kính hoặc diện tích<br>";
                                $flag = false;
                            }
                            if ($dientich !== "" && $bankinh !== "") 
                            {
                                $error .= "Chỉ được 1 trong 2 trường <br>";
                                $flag = false;

                            }
                            if ( (!is_numeric($dientich) && $dientich !== "") || (!is_numeric($bankinh) && $bankinh !== "") ) 
                            {    
                                $error .= "Chỉ được nhập số";
                                $flag = false;
                            }
                            if ($flag) 
                            {
                                if ($bankinh == "")
                                    $bankinh = number_format(sqrt($dientich/$pi),2);
                                else
                                    $dientich = number_format(pow($bankinh,2)*$pi,2);
                            }       
                        }
                    ?>
                    <form class="form-horizontal" method="POST" action="index.php">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="dientich">Diện tích:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="dientich" name="dientich" value="<?php echo $dientich; ?>" placeholder="Nhập diện tích">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="bankinh">Bán kính:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="bankinh" name="bankinh" value="<?php echo $bankinh; ?>" placeholder="Nhập bán kính">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-4">
                                <button id="btn-tinh" type="submit" name="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
            <p id="alert-err"> 
                <?php echo $error; ?>
            </p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
