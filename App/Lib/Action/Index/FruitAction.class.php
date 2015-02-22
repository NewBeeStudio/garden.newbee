<?php
class FruitAction extends CommonAction {
	public function index(){
		layout('layout');
		load('extend');
		import('ORG.Util.Page');
		$data = new FruitModel("fruit");

		$cnt = $data->count();
		$page = new Page($cnt, 5);
		$page->setConfig('fisrt','<<');
		$page->setConfig('last','>>');
		$page->setConfig('theme','<li>%first%</li> <li>%linkPage%</li><li>%end%</li>');
		$show = $page->show();

		$fruits = $data->relation(true)->order('id DESC')
				->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('fruits', $fruits);
		$this->assign('page', $show);
		$this->display();
	}



	public function handle_fruit() {
    import('ORG.Net.UploadFile');
    $upload = new UploadFile();
    $upload->maxSize  = 3145728000;
	$fruit_id = M('fruit')->max('id') + 1;
    $upload->savePath =  './Public/Uploads/file/'.$fruit_id.'/';

    if(!$upload->upload()){
    	$this->error($upload->getErrorMsg());
    }
    else{
    	$info = $upload->getUploadFileInfo();
    	for ($i = 0; $i < count($info); $i+=1){
			$data = array(
				"fruit_id"	=>	$fruit_id,
				"storename"	=>	$info[$i]['savename'],
				"filename"	=>	$info[$i]["name"],
				"size"		=>	$info[$i]["size"]
				);
			M("file")->data($data)->add();
			}

	    $data = array(
	    	'time' => time(),
	    	'username' => $_SESSION['username'],
	    	'content'  => I('file_description'),
	    	);	    
	    M('fruit')->data($data)->add();
	   	$this->success("上传成功！");
    }}
} 
?>