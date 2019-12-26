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
    <script>
        $(document).ready(function(){
            $('#btnAdd, #btnEdit').on('click',function(){                
                var title = $('#title').val();
                var description = $('#description').val();
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if (title == '' || description == '' || $('#image').val() =='') {
                    alert('xin nhap du cac truong');
                    return false;
                } 
                if(extension != ''){
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','ifjf']) == -1)
                    {
                        alert('image ko hop le');
                        $('#image').val('');
                        return false;
                    }
                }  
                         
            });

            $('#image-default').click(function(){
                $('#image').click();
            });                                
        });
        function changeImg(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#image-default').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }   
    </script>
</head>
<body> 
	<?php
		$action = isset($_GET['action']) ? $_GET['action'] : '';
		$id = isset($_GET['id']) ? $_GET['id'] : '';

		$actions = array(
			'','edit','update', 'delete', 'add','error'
		);
		if (!in_array($action, $actions)) {
		$action = 'error';
		}
		include_once('controllers/new_controller.php');

		$controller = new NewController;
		$controller->handle($action, $id);
	?>
</body>
</html>