<?php

Class NewsController extends Admin
 {
//     public function actionIndex(){
// //        echo 111;
//         $model = new News;
//         $data=$model->selectall();


//        // var_dump($data);die;
//         $this->render('index',array('data'=>$data));
//     }
public function actionIndex(){
  echo "12";
}
    public function actionAdd(){
    return $this->render('add');

    }
   
    public function actionZj(){
       $data = $_POST['t_name'];
       // var_dump($data);die;
         $db=\Yii::app()->db ->createCommand() ->insert('theme',['t_name'=>$data]);

           if ($db) {
              $this->redirect('?r=news/bt');
             
      }
    }
    public function actionBt(){
          $sql='select * from theme';
          // var_dump($sql);die;
        $res=Yii::app()->db->createCommand($sql)->queryAll();
        // var_dump($res);die;
        $this->redirect('?r=theme/index');



    }
    public function actionUpdate(){
        echo "string";
    }
    public function actionNews_add(){

      return $this->render('news_add');

    }


    public function actionCj()
    {
        $html = new simple_html_dom();
        $html = file_get_html("https://www.csdn.net/");
       
        foreach ($html->find('h2 a') as $e) {
            // $links[] = $e->plaintext . '<br>';
            Yii::app()->db->createCommand()->insert('bage_special',['title'=>substr(trim($e->plaintext),0,5),'title_alias'=>substr(trim($e->plaintext),0,50),'intro'=>trim($e->plaintext),'wzurl'=>trim($e->href)]);
            $lastid[] = Yii::app()->db->getLastInsertID();
        }
        // print_r($links);
        $lastid = implode($lastid,',');
        $sql = "select id,wzurl from bage_special where id in ($lastid)";
        $data = Yii::app()->db->createCommand($sql)->queryAll();
        foreach ($data as $key => $value) {
            $ht = file_get_html($value['wzurl']);
            foreach ($ht->find('#article_content') as $e)
            {
                // $a = $e->plaintext;
                // $sql2 = "update bage_special set content='$a' where id = $lastid";
                $res = Yii::app()->db->createCommand()->update('bage_special',['content'=>trim($e->plaintext)],'id='.$value['id']);
                // $res = Yii::app()->db->createCommand($sql2)->execute();
            }
        }
        if($res)
        {
            $this->redirect('?r=news/look');

          }

      }



      // public function actionCjs(){
      //     $url = "style/admin/simple_html_dom.php";
      // // echo $url;die;
      // include("$url");
      // $html = file_get_html('https://www.csdn.net/nav/career');
      // // var_dump($html);die;
      // foreach($html->find('h2 a') as $k=>$e){
      
      //   // echo "string";die;
      //   $data[$k]['news_name1'] =  trim($e->plaintext);
      //   $data[$k]['news_name2'] =  trim($e->plaintext);
      //   $app = $e->href;
      //   $html1 = file_get_html("$app");
      //   // var_dump($html);die;
      //   //echo $k.'<br>';
      //   //echo $app.'<br>' ;
      //   if($html1->find('main'))
      //   {
      //     // echo "string";die;
      //     foreach($html1->find('main') as $x=>$z)
      //     {
      //       // echo "string";die;
      //       $data[$k]['news_text'] = trim($z->plaintext);
      //       // var_dump($data);die;
      //     }
      //     $data[$k]['news_time'] = time();
      //     $data[$k]['news_del'] = 1;
      //     $post  = yii::app()->db->createCommand()->insert('news',$data[$k]);
      //   }else
      //   {
      //     unset($data[$k]);
      //   }
        
        
      // }

      
//         $this->redirect("?r=news/looks"); 

// }
      

      public function actionLook(){
        $sql='select * from bage_special';
        $res=Yii::app()->db->createCommand($sql)->queryAll();
        // var_dump($res);die;
        $this->render('look', array('res' => $res));

      }
      public function actionLooks(){
        $sql = 'select * from news';
        $res = Yii::app()->db->createCommand($sql)->queryAll();
        // var_dump($res);
        $this->render('looks',array('res'=>$res));
      }

      public function actionTheme(){


        $sql='select * from theme';
        // var_dump($sql);die;
        // return 
        // $as = Yii::app()->db->createCommand($sql)->queryAll();
        $res=Yii::app()->db->createCommand($sql)->queryAll();
        // var_dump($res);die;
        $this->render();

      }




 }

