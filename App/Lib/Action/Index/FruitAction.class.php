<?php
class FruitAction extends CommonAction {
	public function index(){
		layout('layout');
		$this->display();
	}
} 
?>