<?php
	class LoginAction extends Action{
		
		public function index(){
			$this->display();
		}
		
		public function handle_login(){
			if(IS_POST){
				$user = M('user')->where(array('username'=>I('username')))->select();
				if(!$user){
					$this->error('不存在该用户！');
				}
				else if($user[0]['password']!=I('pwd')){
					$this->error('密码错误！');
				}
				else{
					session('uid',$user[0]['id']);
					session('username',$user[0]['username']);
					M('user')->where(array('username'=>I('username')))->save(array(
						'logintime'=>time(),
						'loginip'=>get_client_ip()
					));
					$this->redirect('Index/Index/index');
				}
			}
			else{
				$this->redirect('Index/Login/index');
			}
		}
	}
?>