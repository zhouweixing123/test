<!-- <link href="mouth4/YII/web/style/admin/css/table-style.css" rel="stylesheet" type="text/css" /> -->
 <style>

  ul li{
    font-size: 16px;


  }
 </style>
<div class="left-content">
    
        <!-- <a href='?r=theme/index'>首页</a> -->
 
 <ul>
    <a href="?r=news/Add"><li id="dd">-----

    </li></a>
    <?php foreach ($cate as $key => $value) { ?>
        <li id="dd"><?=$value['news_name1']?></li>

   <?php }?>
</ul>



</div>
<script src="http://code.jquery.com/jquery-1.4.1.min.js"></script>
<script>
    $(function(){
        $.ajax({
            url:'http://localhost/mouth4/YII/web/index.php?r=home/cate',
            type:'get',
            dataType:'json',
            success:function(res){
               if(res.code == 1){
                   alert(res.msg);return;
               }
               //alert(res.cate);return;
               //$('#dd').after('<li >'+res.cate[i].news_name1+'</li>');

                for(var i=0;i<res.cate.length;i++){
                    //alert(res.cate[i].news_name1);
                  $('#dd').after('<li >'+res.cate[i].news_name1+'</li>');
                }
            }
        })
    })
</script>