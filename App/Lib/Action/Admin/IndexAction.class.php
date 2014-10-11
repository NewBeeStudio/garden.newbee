<?php
class IndexAction extends Action {
	public function index(){
		$this->assign('users',M('user')->select())->display();
	}
} 
?>