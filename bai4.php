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
    $arr[] = new Student('Hoàng Văn Nguyên','java10','80','100','80');
    
    // print_r($arr);
    echo "<hr>";

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

    foreach ($arr as $a) {
        if ($a->css == $max) {
            print_r($a);
            break;
        }
    }

    echo "<hr>";
    for ($i=0; $i < count($arr)-1; $i++)
    for ($j=0; $j < count($arr)-1-$i; $j++) { 
        if ($arr[$j]->php > $arr[$j+1]->php) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
    print_r($arr);
?>
