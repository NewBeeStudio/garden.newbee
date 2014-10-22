<?php
class IndexAction extends Action {
	public function index(){
		layout('layout');
		$this->display();
	}

	public function logout(){
		session_unset();
		session_destroy();
		$this->redirect('Index/Index/index');
	}
} 
?>