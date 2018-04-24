 <?php

// /**
// * 
// */
class Api extends CController
{
	 public static function actionGetName()
	{
		$res = Yii::app()->db->createCommand("select * from news")->queryAll();
		return $res;
		// var_dump($res);die;
		// $this->$render('index'); 
	}
// 	public function init()
// 	{
// 		$this->verify($get_type,$head_date,$head_key);
// 		parent::init();
// 	}
// 	public function verify($get_type,$head_date,$head_key){

// 		$key = $this->key;
// 		var_dump($key);
// 		if(md5($head_date.md5($key.base64_encode($key.$get_type)))!=$head_key){
// 			$this->ReturnJson(array('参数错误'),'errcode',403);

// 		}

// 	}
// 	public function ReturnJson($data,$status='success',$errcode = 0){
// 		$value['errcode']=$errcode;
// 		$value['status']=$status;
// 		$value['date']=$data("Y-m-d H:i:s");

// 		echo json_encode($value);exit;

// 	}

// }


}