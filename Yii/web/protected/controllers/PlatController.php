<?php

Class PlatController extends Admin
{
    public function actionIndex()
    {
        $model = new Plat();
        $data = $model->selectall();
        $this->render('index',array('data'=>$data));
    }

    public function actionView(){

    	$this->render('view');

    }
    public function actionView_add(){
    	$data = $_POST;
        // var_dump($data);
        // $id=$_POST['id'];
        // var_dump($id);die;
        $data = $_FILES['imgs'];
        if ((($_FILES["imgs"]["type"] == "image/gif")||($_FILES["imgs"]["type"] == "image/jpeg")|| ($_FILES["imgs"]["type"] == "image/pjpeg"))&& ($_FILES["imgs"]["size"] < 20000))
        {
            $time = time();
            $ul = $this->admin_url.'images/';
            // var_dump($ul);die;
            //$url = explode('/',$ul);
            $rr = realpath('../../../');
            //$ul = $rr.$url[0].'/'.$url[1].'/'.$url[2].'/images'.'/';
            //echo $ul;die;
            //echo $ul;
            $chr = explode('.',$_FILES["imgs"]["name"]);
            // var_dump($chr);die;
            $wei = $chr[1];
            $shu = rand('10000','99999');
            $mz = $time.$shu.'.'.$wei;
            //echo $mz; 
            move_uploaded_file($_FILES["imgs"]["tmp_name"],$rr.$ul.$mz);
            $data = $ul.$mz;
            // echo $data;die;

            $post  = yii::app()->db->createCommand()->insert('img',array('imgs'=>$data));
            // var_dump($post);die;
           
        }
      $this->redirect('?r=plat/vie');

    }
    public function actionVie(){
        $data = $_POST;

       $sql = "select * from img";
       $data = Yii::app()->db->createCommand($sql)->queryAll();
       // var_dump($data);die;
        $this->render('show',array('data' => $data));
    }

    public function actionViews(){

        $this->render('views');
   
    }
    public function actionViews_add(){

        $data = $_POST;
        // var_dump($data);die;
        
        $db=Yii::app()->db ->createCommand()->insert('connect',$data);
       
        // var_dump($db);
       $this->redirect('?r=plat/sele');
    }
    public function actionSele(){
        $sql = "select * from connect";
        $data = Yii::app()->db->createCommand($sql)->queryAll();
        // var_dump($data);
        $this->render('looks',array('data'=>$data));
    }
    public function actionApi(){
        // echo "string";
        $alias = $data['alias']!='' ? $data['alias']:flase;

        $select = $data['select']!=''?$data['select']:'*';
        $orderby = $data['orderby']!=''?$data['orderby']:'sort_order desc,strt_time desc';
        if(!$alias){

            $this->ReturnJson(array('参数错误'),'errcode',400);

        }



    }



}