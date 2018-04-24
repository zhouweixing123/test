<?php
    header('Content-Type: text/html; charset=utf-8');

    //var_dump($data);die;
?>
<base href="<?php echo $this->admin_url; ?>">
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $this->createUrl('index'); ?>">Home</a> <i class="fa fa-angle-right"></i></li>
    <li class="breadcrumb-item"><a href="<?php echo $this->createUrl('class'); ?>"><?php echo $data[0]; ?></a> <i class="fa fa-angle-right"></i></li>
    <li class="breadcrumb-item"><a href="<?php echo $this->createUrl('class_add'); ?>"><?php echo $data[1]; ?></a> <i class="fa fa-angle-right"></i></li>   
</ol>



<div class="grid-form1">
           <h3>新闻图片添加</h3>
             <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                            <form class="form-horizontal" action="<?php echo $this->createUrl('news_imgDo'); ?>" method="post" enctype='multipart/form-data'>
                                <div class="form-group">
                                    <label for="disabledinput" class="col-sm-2 control-label">选择图片</label>
                                    <input type="file" name="news_map">
                                </div>
                                <input type="hidden" name="news_id" value="<?php echo $_GET['id']; ?>">
                                <button type="submit" class="btn btn-default">添加图片</button>
                            </form>
                        </div>