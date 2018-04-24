<?php

class News extends CActiveRecord
{
    public $verifyCode;
    public function add($data){
        foreach($data as $k=>$v){
            $this -> $k = $v;
        }
        return $this -> save();
    }
    public function del($where){
        return $this->deleteAll("brand_id=$where");
    }
    public function upd($data){
        $id=$data['id'];
        return $this->updateAll($data,"type_id=$id");
    }
    



    }
    public function select(){
        return $this->find();
    }
    public function selectall(){
        $data= $this->findAll();
        foreach ($data as $model) {
            $res[] = $model->attributes;
        }
        return $res;
    }
    public function page($offset,$size){
        return Yii::$app->db->createCommand("select * from user limit $offset,$size")->queryAll();
    }
    public function log(){
        return Yii::$app->db->createCommand("select * from news")->queryAll();
    }
}