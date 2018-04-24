<?php

Class ThemeController extends Admin
{
    public function actionIndex(){
        $model = new Theme();
        $data = $model->selectall();
        // var_dump($data);die;
        $this->render('index',array('data'=>$data));
    }
    
}