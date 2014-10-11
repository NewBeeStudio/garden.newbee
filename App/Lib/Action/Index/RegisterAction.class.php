<?php
	class RegisterAction extends Action{
		
		public function index(){
			$this->display();
		}

		public function handle_register(){
			if(IS_POST){
				if(M('user')->where(array('username'=>I('username')))->select()){
					$this->assign('jumpUrl','__ROOT__/index.php/Index/Login/index');
					$this->error('账号已经注册，请直接登录或更改注册账号名！');
				}
				else if($_SESSION['verify']!=md5(I('code'))){
					$this->error('验证码错误！');
				}
				else if(I('key')!='omnilab'){
					$this->error('注册码错误！');
				}
				else if(I('pwd1')!=I('pwd2')){
					$this->error('两次密码不一致！');
				}
				else{
					// register success
					$data = array(
						'username' => I('username'),
						'password' => I('pwd1'),
						'logintime' => time(),
						'loginip' => get_client_ip()
						);
					if(M('user')->data($data)->add()){
						$this->assign('jumpUrl','__ROOT__/index.php/Index/Login/index');
						$this->success('注册成功！');
					}
					else{
						$this->error('注册失败！');
					}
				}
			}
			else{
				$this->redirect('Index/Register/index');
			}
		}

		public function verify(){
			import('ORG.Util.Image');
			Image::buildImageVerify(4,1,'png');
		}
	}
?>