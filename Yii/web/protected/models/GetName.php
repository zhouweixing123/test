<?php

class GetName extends CActiveRecord
{
    public static function type($id){
        $sql='select type_name from type where type_id ='.$id;
        $res=Yii::app()->db->createCommand($sql)->queryAll();
        echo $res[0]['type_name'];
    }
    public static function theme($id){
        $sql='select t_name from theme where t_id = '.$id;
        $res=Yii::app()->db->createCommand($sql)->queryAll();
        echo $res[0]['t_name'];
    }
    public static function plat($id){
        $sql='select p_name from plat where p_id = '.$id;
        $res=Yii::app()->db->createCommand($sql)->queryAll();
        echo $res[0]['p_name'];
    }
}