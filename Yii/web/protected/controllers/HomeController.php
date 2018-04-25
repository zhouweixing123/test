<?php


/**
* 
*/
class HomeController extends CController
{
	
	public function actionIndex()
	{
		$cate = Api::actionGetName();
		// var_dump($cate);die;
		// echo "string";
		// $this->render('index',['cate'=>$cate]);
		$this->render('inde',['cate'=>$cate]);
	}
	public function actionCate(){
		// echo "string";die;
		// $cate = Api::actionCate();
		$cate = Api::actionGetName();
		//var_dump($cate);die;
		if($cate){
			//echo 111;die;
			echo json_encode(array('code'=>0,'msg'=>'请求成功','cate'=>$cate),JSON_UNESCAPED_UNICODE);
		}
		else{
			echo json_encode(array('code'=>1,'msg'=>'请求失败','cate'=>''),JSON_UNESCAPED_UNICODE);
					# code...
			//die;
		}


	}
	// public function actionInde(){
	// 	$cate = Api::actionGetName();
	// 	// var_dump($cate);die;
	// 	// echo "string";
	// 	$this->render('inde',['cate'=>$cate]);
	// 	// $this->render('Inde'); 
	// }

}