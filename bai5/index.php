<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>    
    <div class="container mt-4">
        <div class="col-4">
            <h3>Chọn sản phẩm</h3>
            <?php        
                include 'connect.php';

                $sql = "SELECT * FROM products";
                $selectResult = $conn->query($sql);
            ?>
            <form class="form" method="POST">
                <select name="" id="target">
                    <option selected value="">Chọn vật phẩm</option>
                    <?php
                        while ($row = $selectResult->fetch_array())
                        {
                            echo "<option value=".$row["id"].">".$row["name"]."</option>";
                        }
                    ?>
                </select>
            </form>
            <div class="content mt-4">
                <p id="name"></p>
                <p id="price"></p>
                <p id="img"></p>        
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#target').change(function() {
                var id = $(this).val();
                if (id != '') {
                    $.ajax({
                        url: "select.php",
                        method: "POST",
                        data: {id: id},
                        dataType: "JSON",
                        success: function(data) {
                            $(".content").css('display','block');
                            $("#name").text(data.name);
                            $("#price").text(data.price);
                            $("#img").html("<img src='image/"+data.img+"'  />");
                        }
                    })
                }
                else {
                    $(".content").css('display','none');
                }
            });
        });
    </script>
</body>
</html>