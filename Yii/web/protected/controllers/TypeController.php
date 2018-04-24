<?php



class TypeController extends Admin
{
    public function actionIndex()
    {
        $sql='select * from type where type_del=0';
        $res=Yii::app()->db->createCommand($sql)->queryAll();
        
        $crumbs = array(
            '专题'=>$this->createUrl('/site/index'),
            '专题列表'
        );
//        echo $this->createUrl('');
       $this->render('index', array('crumbs' => $crumbs,'res'=>$res));
    }
    public function actionAdd(){
        $this->render('add');
    }
    public function actionAdd_do(){

        $data=$_POST;
        $data['type_time']=time();
        $res=Yii::app()->db->createCommand()->insert('type',$data);
        if($res){
            $this->redirect('?r=type/index');
        }else{
            $this->redirect('?r=type/index');
        }
    }
    public function actionDel(){

        $id=$_GET['id'];
        // var_dump($id);die;
        $model = new Type();
        $data=array('id'=>$id,'type_del'=>'1');
        $res=$model->upd($data);
        // var_dump($res);die;
        if($res){
            $this->redirect('?r=type/index');
        }else{
            $this->redirect('?r=type/index');
        }
    }
      public function actionDels(){

        $id=$_GET['id'];
       // var_dump($id);die;
        $model = new Type();
        $data=array('id'=>$id,'type_del'=>'1');
        $res=$model->upd($data);
        // var_dump($res);die;
        if($res){
            echo "string";
            $this->redirect('?r=plat/index');
        }else{
             echo "str";
            $this->redirect('?r=plat/index');
        }
    }
    public function actionShow(){
        $id=$_GET['id'];
        $model = new Type();
        $data=array('id'=>$id,'type_status'=>'1');
        $res=$model->upd($data);
        if($res){
            $this->redirect('?r=type/index');
        }else{
            $this->redirect('?r=type/index');
        }
    }

    public function actionUpdates(){

       $id=$_GET['id'];
        $type_name=isset($_POST['type_name'])?$_POST['type_name']:"";

        $type_name=isset($_POST['type_status'])?$_POST['type_status']:"";
       
        $sql="update type set type_name='{$type_name}',type_name='{$type_name}' where type_id=$id";
        $bloon=Yii::app()->getDb()->createCommand($sql)->execute();
          if($bloon){
          echo "<script>alert('修改成功');</script>";
            $this->redirect('?r=type/index');
        }
        else{
          echo "<script>alert('修改失败');</script>";
                  $this->redirect('?r=site/index');
        }


    }

     public function actionZj(){
        // echo "string";die;
            $post = $_POST['t_name'];
            var_dump($post);die;
            // var_dump($post);die;
            // $sql = Yii::app()->db->createCommand()->insert('xinwen',$post);
            // $res = Yii::app()->db->createCommand()->insert('xinwen',$post);
            $db=\Yii::app()->db ->createCommand() ->insert('xinwen',['t_name'=>$post]);
            var_dump($db);die;
            if ($res) {
                echo "string";
                # code...
            }

    }
}