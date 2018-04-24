<?php
	class IndexController extends Web{

		public function actionIndex(){

			$data['alias'] = 'mobile_banner';
			$data['select']='link_url,attach_file,intro';
			$info=json_decode($info,true);
			if($info['errcode'] == '0'){
				echo "string";
		}




		} 




	}




?>

