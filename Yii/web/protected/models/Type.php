<?php

class Type extends CActiveRecord
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
    public function dels($res){
        return $this->deleteAll("p_id=$res");
    }
    
    public function upd($data){
        $id=$data['id'];
        return $this->updateAll($data,"type_id=$id");
    }
    public function select($key=1,$where=1){
        return $this->find()->where("$key=$where")->asarray()->all();
    }
    public function page($offset,$size){
        return Yii::$app->db->createCommand("select * from user limit $offset,$size")->queryAll();
    }
    public function log($where){
        return Yii::$app->db->createCommand("select * from user where $where")->queryAll();
    }
}