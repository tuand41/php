<?php
Class Student
{
    public $name;
    public $lop;
    public $css;
    public $php;
    public $java;

    public function __construct($name, $lop, $css, $php, $java)
    {
        $this->name = $name;
        $this->lop = $lop;
        $this->css = $css;
        $this->php = $php;
        $this->java = $java;
    }
}
$listStudent[] = new Student('Nguyễn Trương Bảo quyết','java10','90','70','98');
$listStudent[] = new Student('Nguyễn Quang Đức','php26','80','75','75');
$listStudent[] = new Student('Tran nhat vinh','java11','86','80','95');
$listStudent[] = new Student('Trần Nguyễn Thành Luân','php27','72','90','71');
$listStudent[] = new Student('Trần Văn Công nhất ','php26','100','95','85');
$listStudent[] = new Student('Hoàng Văn Nguyên','java10','80','1','80');

// tìm kiếm học sinh có họ nguyễn
function findNguyenStudents($listStudent)
{
    return array_filter($listStudent, function ($student){
        return isStringInText("Nguyễn", $student->name);
    });
}
//Kiểm tra đoạn text có chứa kí tự ko?
function isStringInText($string, $text)
{
    return stripos($text, $string) !== false;
}

//Tìm điểm Css cao nhất
function findMaxCssPoint($listStudent)
{
    $maxPointCss = 0;
    foreach ($listStudent as $student) 
    {
        if ($maxPointCss < $student->css)             
            $maxPointCss = $student->css;            
    }
    return $maxPointCss;
}

//Sắp sếp Học viên theo điểm php
function sortPhpPointStudents($listStudent){
    for ($i=0; $i < count($listStudent)-1; $i++)
    for ($j=0; $j < count($listStudent)-1-$i; $j++) { 
        if ($listStudent[$j]->php > $listStudent[$j+1]->php) {            
            $temp = $listStudent[$j];
            $listStudent[$j] = $listStudent[$j+1];
            $listStudent[$j+1] =  $temp;
        }
    }
    return $listStudent;
}