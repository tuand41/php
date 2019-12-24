<?php
class DB  
{   
    // private $result  = null;
    private static $conn = null;

    public static function connect()
    {
        if (!isset(self::$conn)) 
        {
            self::$conn = new mysqli('localhost', 'root', '', 'news');
            if (self::$conn->connect_error) {
                die("Connection failed: ".self::$conn->connect_error);
            }
            self::$conn->set_charset('utf8');
        }
        return self::$conn ;
    }
    // public function execute($sql)
    // {
    //     # code...
    //     return ($this->result = $this->conn->query($sql));
    // }

    // public function getData()
    // {
    //     if ($this->result) 
    //         $data = $this->result->fetch_assoc();
    //     else
    //         $data = 0;
    //     return $data;
    // }

    // public function getAllData()
    // {
    //     if ($this->result) 
    //     {
    //         while ($datas = $this->getData())
    //         {
    //             $data[] = $datas;
    //         }
    //     } 
    //     else
    //         $data = 0;
    //     return $data;           
    // }

    // public function insertData($title, $description, $image, $created_at)
    // {
    //     $sql = "INSERT INTO news VALUES($title, $description, $image, $created_at)";
    //     return $this->execute($sql);
    // }
    // public function updateData($id, $title, $description, $image, $created_at)
    // {
    //     $sql = "UPDATE news SET title = $title, description = $description, image = $image, 
    //     create_at = $created_at WHERE id = $id";
    //     return $this->execute($sql);
    // }
    // public function deletaData($id)
    // {
    //     $sql = "DELETE * FROM news WHERE id = $id ";
    //     return $this->execute($sql);
    // }
}
