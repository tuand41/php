<?php
class DB  
{   
    // private $result  = null;
    public $conn = null;
    function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'news');
        if ($this->conn->connect_error) {
            die("Connection failed: ".$this->conn->connect_error);
        }
        $this->conn->set_charset('utf8');
    }
    public function execute($sql)
    {
        return  $this->conn->query($sql);
    }

    public function escapeString($data)
    {
        return $this->conn->real_escape_string($data);
    }
    

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
