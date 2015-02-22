<?php
class ChatAction extends CommonAction{
	public function index(){
		layout('layout');
		load('extend');
		import('ORG.Util.Page');

		$data = new ChatModel("chat");
		$cnt = $data->count();
		$page = new Page($cnt, 5);
		$page->setConfig('fisrt','<<');
		$page->setConfig('last','>>');
		$page->setConfig('theme','<li>%first%</li> <li>%linkPage%</li><li>%end%</li>');
		$show = $page->show();

		$chats = $data->relation(true)->order('id DESC')
				->limit($page->firstRow.','.$page->listRows)->select();

		$data2 = new ChatReplyModel();
		$right = $data2->where('id='.$test['id'])->find();

		$this->assign('reply_list', $data2);
		$this->assign('chats', $chats);
		$this->assign('page', $show);
		$this->display();
	}

	public function handle_chat(){
		if(IS_POST){
			if(!I('chat_content'))
				$this -> error("No Content to be sent!");
			else{
				$data = array(
					'title' 	=> 	I('chat_title'),
					'username' 	=> 	$_SESSION['username'],
					'content' 	=> 	I('chat_content'),
					'time' 		=> 	time(),
					);
				if(M('chat')->data($data)->add()){
					$this->success('发表成功！');
				}
				else{
					$this->error('发布失败！');
				}
			}
		}
	}

	public function handle_chat_reply(){
		if(IS_POST){
			if(!I('reply_content')){
				$this->error("No comment to be sent!");
			}
			else{
				$data = array(
					'time'		=>	time(),
					'chat_id'	=>	I('chat_id'),
					'from_user'	=>	$_SESSION['username'],
					'to_user'	=>	I('to_user'),
					'content'	=>	I('reply_content'),
					);
				if(M('chat_reply')->data($data)->add()){
					$this->success('发表成功！');
				}
				else{
					$this->error('发布失败！');
				}
			}	
		}
	}

	public function handle_chat_reply2(){
		if(IS_POST){
			if(!I('reply_content')){
				$this->error("No comment to be sent!");
			}
			else{
				$reply_id = I('reply_id');
				var_dump($reply_id);
				$to_user = M('chat_reply')->where('id='.$reply_id)->find()['from_user'];
				var_dump($to_user);
				$data = array(
					'time'		=>	time(),
					'reply_id'	=>	I('reply_id'),
					'from_user'	=>	$_SESSION['username'],
					'to_user'	=>	$to_user,
					'content'	=>	I('reply_content'),
					);
				if(M('chat_reply2')->data($data)->add()){
				$this->success('发表成功！');
				}
				else{
					$this->error('发布失败！');
				}
			}	
		}
	}
}
?>