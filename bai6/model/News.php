<?php
class News 
{   
    public $id;
    public $title;
    public $description;
    public $image;
    public $create_at;

    public function __construct($id,$title, $description, $image, $create_at)
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
        $conn = DB::connect();
        $dataNew = $db->query('select * from news');
        while($row = $dataNew->fetch_assoc())
        {
            $list[] = new News($row['id'], $row['title'], $row['description'], $row['image'], $row['create_at']);
        }
        return $list;
    }

    public static function destroy ($id)
    {
        $conn = DB::connect();
        return $db->query("delete * from news where id = $id ");
    }

    // public static function find($id)
    // {
    //     $conn = DB::connect();
    //     $dataNew = $db->query('SELECT * FROM posts WHERE id = :id');
    //     $req->execute(array('id' => $id));

    //     $item = $req->fetch();
    //     if (isset($item['id'])) {
    //         return new Post($item['id'], $item['title'], $item['content']);
    //     }
    //     return null;
    // }
    public function save()
    {
        # code...
    }

}
