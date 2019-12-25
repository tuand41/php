<?php
class News 
{   
    public $id;
    public $title;
    public $description;
    public $image;
    public $create_at;

    function __construct($id, $title, $description, $image, $create_at)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->create_at = $create_at;
    }
    public static function all()
    {
        $list = [];
        $conn = new DB;
        $dataNew = $conn->execute('select * from news');
        while($row = $dataNew->fetch_assoc())
        {
            $list[] = new News($row['id'], $row['title'], $row['description'], $row['image'], $row['create_at']);
        }
        return $list;
    }

    public function save()
    {
        $conn = new DB;
        $conn->execute("INSERT INTO news (id, title, description, image, create_at) 
            VALUES (NULL, ".$this->title.", ".$this->description.", ".$this->image.", ".$this->create_at.")");
    }

    public static function destroy ($id)
    {
        $conn = new DB;
        return $db->query("delete * from news where id = $id ");
    }
 
}
