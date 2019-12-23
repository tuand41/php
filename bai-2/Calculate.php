<?php
class Calculate 
{
    public $num1;
    public $num2;
    public $cal;

    public function __construct($num1, $num2, $cal) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->cal = $cal;
    }

    public function tinh() 
    {
        $flag = true;
        if (!is_numeric($this->num1) || !is_numeric($this->num2)) 
        {
            $result = "Yều cầu điền số"; 
            $flag = false;           
        }
        if (($this->num1 == "") || ($this->num2 == "")) 
        {
            $result = "Điền cả 2 số";   
            $flag = false;       
        }
        
        if ($flag == true)
        {                   
            switch ($this->cal) 
            {
                case '+':
                    $result = $this->num1 + $this->num2;
                    break;
                case '-':
                    $result = $this->num1 - $this->num2;
                    break;
                case '*':
                    $result = $this->num1 * $this->num2;
                    break;
                case '/':
                    $result = ($this->num2 == 0) ? "không xác định" : $this->num1 / $this->num2;
                    break;
                default:
                    $result = "Phép tính không hợp lệ";
                    break;  
            }
        }
        return $result;
    }
}
