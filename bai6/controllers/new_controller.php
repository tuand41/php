<?php
require_once('controllers/base_controller.php');
require_once('model/News.php');
require_once('DB.php');

class NewController extends BaseController
{
	public function home()
	{
		$news = News::all();
		$data = array('news' => $news);
		$this->render('home',$data);
	}

	public function error()
	{
		$this->render('error');
	}

	public function add()
	{
		$title = $_REQUEST['title'] ?  $conn->escapeString($_REQUEST['title']) : null;
		$description = $_REQUEST['description'] ? $conn->escapeString($_REQUEST['description']) : null;
		$image = $_FILES['image'] ? $this->upload_image($_FILES['image']) : null;
		echo $title = $_REQUEST['title'];
		$new = new News(null,$title,$description,$image,date('Y-m-d H:i:s'));
		$new->save();
		
	}

	public function edit()
	{
				
	}
	public function delete()
	{
				
	}

	private function upload_image($file)
    {
        if (isset($file))
        {			
            $extension = strtolower(end(explode('.',$file['name'])));
			$extensions= array('gif','png','jpg','jpeg','ifjf');
			$newname = rand().'.'.$extension;
			$destination = 'public/image/'.$newname;
			if (in_array($extension,$expensions) === true)
			{
				move_uploaded_file($file['tmp_name'],$destination);
			}
			return $newname;
        }
    }
}