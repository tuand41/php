<?php
require_once('model/News.php');

class NewController 
{

	private $modelNews;

	public function __construct() {
		$this->modelNews = new News();
	}

	public function handle($action, $id)
	{
		switch ($action) 
		{
			case '':
				$this->home();
				break;
			case 'add':
				$this->add();
				break;
			case 'edit':
				$this->edit($id);
				break;
			case 'update':
				$this->update($id);
				break;
			case 'delete':
				$this->delete($id);
				break;
			default:
				echo "Trang không tồn tại!";
				break;
			}
	}
	public function home()
	{
		$lists = $this->modelNews->getAllNews();
		include_once("views/home.php");
	}

	
	public function error()
	{
		$this->render('error');
	}

	public function add()
	{
		$news = $this->modelNews->insertNews();
		header("location: index.php");
	}

	public function edit($id){
		
		if ($id) {
			$detail = $this->modelNews->getNewsDetail($id);
			if ($detail) {
				include_once("views/edit.php");
			} else {
				echo "Không tìm thấy thông tin!";
			}
			 die();
		} else {
			echo "Trang không tồn tại!";
		}
	}

	public function update($id)
	{
		$news = $this->modelNews->updateNews($id);
		header("location: index.php");
	}

	public function delete($id)
	{		
		if ($id) {
			$detail = $this->modelNews->deleteNews($id);
			header("location: index.php");
		} else {
			echo "Trang không tồn tại!";
		}
	}
}