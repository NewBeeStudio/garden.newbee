<?php
class CommandAction extends CommonAction{
	public function index(){
		layout('layout');
		$this->display();
	}
}
?>