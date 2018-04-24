<?php
class AdController extends Api{
	public function extends actionIndex(){
	
	}
	public function actionGetAd(){

		$alias = $data['alias']!='' ? $data['alias']:flase;

        $select = $data['select']!=''?$data['select']:'*';
        $orderby = $data['orderby']!=''?$data['orderby']:'sort_order desc,strt_time desc';
        if(!$alias){
    	    $this->ReturnJson(array('参数错误'),'errcode',400);
		}
		// $criteria = new CDbCtiteria;
		// $criteria->select = $select;
		// $criteria->order = $order_by;
		// $criteria->addCondition('title= "'.$alias.'"');
		// $criteria->addCondition('status= "Y"');
		// $criteria->addCondition('start_time<='.time());
		// $criteria->addCondition('expired_time>='.time());
		$data = Ad::model()->findAll($criteria);
		if ($data) {
			$this->ReturnJson(array('数据不存在'),'errcode',500);
		}

		foreach ($data as $key => $model) {
			foreach ($model as $key => $value) {
				


			}
			


		}
}