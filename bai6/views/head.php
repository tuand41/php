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
    <script src="public/js/4977667528.js"></script>
    <script>
        $(document).ready(function(){
            $('#btnAdd').click(function(event){
                var fd = new FormData();
                var files = $('#file')[0]
                var title = $('#title').val();
                var description = $('#description').val();
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(extension != ''){
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','ifjf']) == -1)
                    {
                        alert('image ko hop le');
                        $('#image').val('');
                        return false;
                    }
                }
                if (title != '' && description != '') {
                    $.ajax({
                        url: "?controller=new&action=add",
                        method:'post',
                        data: fd,
                        contentType: false,
                        processData: false,
                        success:function(){
                            $(this)[0].reset();
                            // location.reload();
                            alert('oke');
                        }
                    });
                } else {
                    alert('nhap title va mo ta');
                }
            });
        });
    </script>
</head>
<body> 