<?php
class CommandAction extends CommonAction{
	public function index(){
		layout('layout');
		load('extend');
		import('ORG.Util.Page');

		$data = M('command');

		$cnt = $data->count();
		$page = new Page($cnt, 5);
		$page->setConfig('fisrt','<<');
		$page->setConfig('last','>>');
		$page->setConfig('theme','<li>%first%</li> <li>%linkPage%</li> <li>%end%</li>');
		$show = $page->show();

		$command = $data->order('id DESC')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('commands', $command);
		$this->assign('page', $show);
		$this->display();
	}

	public function handle_command(){
		if(IS_POST){
			if(!I('content'))
				$this -> error("No Command to be sent!");
			else{
				if(!$title = I('title')){
					$title = "No title";
				}
				$data = array(
					'title' => $title,
					'username' => $_SESSION['username'],
					'content' => I('content'),
					'time' => time(),
					);
				if(M('command')->data($data)->add()){
					$this->assign('jumpurl', '__URL__/index');
					$this->success('发表成功！');
				}
				else{
					$this->assign('jumpurl', '__URL__/index');
					$this->error('发布失败！');
				}

			}

		}
		else{
			echo('<script>alert("No Command to be sent!")</script>');
			// 
		}
	}
}
?>