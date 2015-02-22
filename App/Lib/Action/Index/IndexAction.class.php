<?php
class IndexAction extends Action {
	public function index(){
		layout('layout');
		load('extend');
		$this->assign('command', M('command')->order('id desc')->find());
		$this->display();
	}

	public function logout(){
		session_unset();
		session_destroy();
		$this->redirect('Index/Index/index');
	}
} 
?>