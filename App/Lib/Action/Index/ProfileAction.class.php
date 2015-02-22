<?php
	class ProfileAction extends Action{
		public function index(){
			$username = $_SESSION['username'];
			$this->assign('username',$username);
			$this->display();
		}

		public function handle_modify(){
			$user = M('user')->where('username="%s"',$_SESSION['username'])->find();
			var_dump($user);
			$ori_pwd = $user['password'];
			if($ori_pwd == I('ori_pwd')){
				if( I('new_pwd') == I('new_pwd2')){
					$user['password'] = I('new_pwd');
					M('user')->where('username="%s"',$_SESSION['username'])->save($user);
					$this->success('修改成功！');
				}
				else{
					$this->error("两次密码不符！");
				}
			}
			else{
				$this->error("密码错误！");

			}
		}

		public function image_upload(){
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();
		    $upload->savePath =  './Public/Uploads/user_img/';
		    $upload->saveRule = $_SESSION['username'];
		    $upload->uploadReplace = TRUE;

			if(!$upload->upload()){
    			$this->error($upload->getErrorMsg());
    		}
    		else{
				$targ_w = $targ_h = 200;
				$jpeg_quality = 90;
				// var_dump($_FILES['image_file']);
				$image_ext = pathinfo($_FILES['image_file']['name'], PATHINFO_EXTENSION);
				$src = './Public/Uploads/user_img/'.$_SESSION['username'].'.'.$image_ext;
				switch($image_ext) {
                    case 'gif':
                        echo "string";
                        $img_r = imagecreatefromgif($src);
                        break;
                    case 'jpg': 
                    case 'jpeg':
                        $image_ext = '.jpg';
                        $img_r = imagecreatefromjpeg($src);
                        break;
                    case 'png':
                        $image_ext = '.png';
                        $img_r = imagecreatefrompng($src);
                        break;
                    default:
                        return;
                }

				$dst_r = ImageCreateTrueColor($targ_w, $targ_h);
				imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'],
				    $targ_w,$targ_h,$_POST['w'],$_POST['h']);				
				$output_name = './Public/Uploads/user_img/'.$_SESSION['username'].'.jpg';
				imagejpeg($dst_r, $output_name, $jpeg_quality);
				$this->success("上传成功！");	
			}
		}
	}

?>