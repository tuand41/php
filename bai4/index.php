<?php    
    include 'Student.php';

    showTableStudent($listStudent,"Danh sach các học viên");    
    //tim hoc vien chua từ Nguyễn
    $listNguyenStudents = findNguyenStudents($listStudent);
    showTableStudent($listNguyenStudents,"Danh sach các học viên có chứa từ Nguyễn");    
    //tim hoc vien co diem css cao nhat
    $maxPointCss = findMaxCssPoint($listStudent);
    foreach ($listStudent as $student) {
        if ($student->css == $maxPointCss) {
            showTableStudent($student,"Học viên có điểm Css cao nhất");
            break;
        }
    }
    //danh sach hoc sinh có điẻm php cao nhất
    $listSort = sortPhpPointStudents($listStudent);
    showTableStudent($listSort,"Danh sách học viên theo thứ tự tăng dần điểm PHP");
?>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    function showTableStudent($listStudent, $titleTable)
    {
    ?>    
        <div class="container">
        <h2><?php echo $titleTable ?></h2>
        <table class="table">
            <thead>
                <tr>
                    <th width="30%">Name</th>
                    <th>Lop</th>
                    <th>Diem css</th>
                    <th>Diem php</th>
                    <th>Diem java</th>
                </tr>
            </thead>
            <tbody>
                <?php
        if (is_array($listStudent)) {
            # code...
            foreach ($listStudent as $student)
            {
            ?>
                <tr>
                    <td><?php echo $student->name ?></td>
                    <td><?php echo $student->lop ?></td>
                    <td><?php echo $student->css ?></td>
                    <td><?php echo $student->php ?></td>
                    <td><?php echo $student->java ?></td>
                </tr>
                <?php } 
        }
        else
        { ?>
                <tr>
                    <td><?php echo $listStudent->name ?></td>
                    <td><?php echo $listStudent->lop ?></td>
                    <td><?php echo $listStudent->css ?></td>
                    <td><?php echo $listStudent->php ?></td>
                    <td><?php echo $listStudent->java ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        <hr>
    <?php } ?>
</body>
</html>