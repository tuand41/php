<?php
class Calculate {
    public $num1;
    public $num2;
    public $cal;
    public function __construct($num1, $num2, $cal) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->cal = $cal;
    }
    public function tinh() {
        if ( $this->num1 == 0 && $this->num2 == 0) {
            $result = "";
        } elseif ( $this->num1 == 0 || $this->num2 == 0){
            $result = "Điền cả 2 số";
        }
        else {
            switch ($this->cal) {
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
                    $result = $this->num1 / $this->num2;
                    break;
                default:
                    $result = "Phép tính không hợp lệ";
                    break;
            }
        }
        return $result;
    }
}
 ?>
