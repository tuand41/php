<?php    
       Class Student{
        public $name;
        public $lop;
        public $css;
        public $php;
        public $java;

        public function __construct($name, $lop, $css, $php, $java){
            $this->name = $name;
            $this->lop = $lop;
            $this->css = $css;
            $this->php = $php;
            $this->java = $java;
        }
    }

    $arr[] = new Student('Nguyễn Trương Bảo quyết','java10','90','70','98');
    $arr[] = new Student('Nguyễn Quang Đức','php26','80','95','75');
    $arr[] = new Student('Tran nhat vinh','java11','86','80','95');
    $arr[] = new Student('Trần Nguyễn Thành Luân','php27','72','90','71');
    $arr[] = new Student('Trần Văn Công nhất ','php26','100','95','85');
    $arr[] = new Student('Nguyễn Trương Bảo quyết','java10','90','70','98');
    
    // print_r($arr);

    function contain($string, $text)
    {
        return stripos($text, $string) !== false;
    }
    $b = array_filter($arr, function ($ob){
        return contain("Nguyễn", $ob->name);
    });
    echo "<hr>";
    print_r($b);
    echo "<hr>";
    function findmaxcss($arr)
    {
        $max = 0;
        foreach ($arr as $a) {
            if ($max < $a->css) {
                $max = $a->css;
            }
        }
        return $max;
    }
    $max = findmaxcss($arr);

    // echo $max;

    foreach ($arr as $a) {
        if ($a->css == $max) {
            print_r($a);
            break;
        }
    }

    echo "<hr>";

    foreach ($arr as $a){
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    

</body>

</html>
