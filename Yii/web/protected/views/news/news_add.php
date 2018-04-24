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
  	       <h3>新闻添加</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="<?php echo $this->createUrl('news_addDo'); ?>" method="post" enctype='multipart/form-data'>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">新闻主标题</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="news_name1" id="focusedinput" placeholder="新闻分类名称">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">新闻副标题</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="news_name2"  id="disabledinput" placeholder="新闻分类介绍">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">新闻上传人</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="news_issuer"  id="disabledinput" placeholder="新闻分类介绍">
									</div>
								</div>
								<div class="form-group">
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">新闻分类</label>
									<input type="file" name="news_map">
								</div>

								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">新闻分类</label>
									<div class="col-sm-8">
										<select name="class_id">
											<?php foreach ($class as $k => $v) { ?>
												<option value="<?php echo $v['class_id']?>"><?php echo $v['class_name']?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">新闻专题</label>
									<div class="col-sm-8">
										<select name="subject_id">
											<?php foreach ($subject as $k => $v) { ?>
												<option value="<?php echo $v['subject_id']?>"><?php echo $v['subject_name']?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">新闻展示平台</label>
									<div class="col-sm-8">
										<select name="terrace_id">
											<?php foreach ($terrace as $k => $v) { ?>
												<option value="<?php echo $v['terrace_id']?>"><?php echo $v['terrace_name']?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">新闻内容</label>
									<div class="col-sm-8">
										<textarea name="news_text" cols="50" rows="8"></textarea>
									</div>
								</div>
								<button type="submit" class="btn btn-default">添加专题</button>
							</form>
						</div>