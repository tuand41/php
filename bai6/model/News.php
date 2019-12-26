<?php
require('dbConnect.php');

class News extends Connect
{
	protected $conn;

	public function __construct() {
		$this->conn = $this->dbConnect();
	}
    public function getAllNews ()
	{
        $sql = "SELECT * FROM news";
		$list = $this->conn->query($sql);
		return $list;
	}

	public function insertNews ()
	{
		$title = $_REQUEST['title'];
		$description = $_REQUEST['description'];
		// echo $_FILES["img"];
		// exit;
		$image = time().$_FILES["image"]["name"];
		$time = date("Y-m-d H:i:s");
		$target_dir = "public/images/";
		$target_file = $target_dir . basename($image);
		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		$sql = "INSERT INTO news (title, description, image, created_at) value ('$title', '$description', '$image', '$time')";
		if ($this->conn->query($sql) !== TRUE) {
			echo "Error: " . $sql . "<br>" . $this->conn->error;
		}
	}

	public function getNewsDetail($id)
	{
		$sql = "SELECT * FROM news where id = " . $id;
		$data = $this->conn->query($sql);
		$detail = $data->fetch_assoc();
		return $detail;
	}

	public function updateNews ($id)
	{        
		$detail = $this->getNewsDetail($id);
		$title = $_REQUEST['title'];
		$description = $_REQUEST['description'];
		if($_FILES['image']['name'] == '') {
			$sql = "UPDATE news SET title = '$title', description = '$description' WHERE id = '$id'";
		} else {
			$oldImage = 'public/images/' . $detail['image'];
			if (file_exists($oldImage)) {
				unlink($oldImage);
			}
			$image = time().$_FILES['image']['name'];
			$target_dir = "public/images/";
			$target_file = $target_dir . basename($image);
			move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
			$sql = "UPDATE news SET title = '$title', description = '$description', image = '$image' WHERE id = '$id'";
		}
		if ($this->conn->query($sql) !== TRUE) {
			echo "Error: " . $sql . "<br>" . $this->conn->error;
		}
	}

	public function deleteNews($id)
	{
		$detail = $this->getNewsDetail($id);
		$sql = "DELETE FROM news where id = " . $id;
		if ($this->conn->query($sql)) {
			$oldImage = 'public/images/' . $detail['image'];
			if (file_exists($oldImage)) {
				unlink($oldImage);
			}
		} else {
			echo "Error: " . $sql . "<br>" . $this->conn->error;
		}
	}
}
?>
 
