<?php
	header('Content-Type: text/html; charset=utf-8');

	//var_dump($data);die;
?>
<base href="<?php echo $this->admin_url; ?>">
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $this->createUrl('index' ); ?>">Home</a> <i class="fa fa-angle-right"></i></li>
    <li class="breadcrumb-item"><a href="<?php echo $this->createUrl('class' ); ?>"><?php echo $data[0]; ?></a> <i class="fa fa-angle-right"></i></li>	
</ol>

				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>新闻</h2>
					  <a href="<?php echo $this->createUrl('news_add' ); ?>">添加新闻</a>
					  <a href="<?php echo $this->createUrl('news_cai' ); ?>">采集新闻</a>
					    <table id="table">
						<thead>
						  <tr>
							<th>新闻id</th>
							<th>新闻主标题</th>
							<th>新闻略缩图</th>
							<th>新闻分类</th>
							<th>新闻专题</th>
							<th>新闻展示平台</th>
							<th>新闻内容简介</th>
							<th>操作</th>
						  </tr>
						</thead>
						<tbody>
						<?php foreach ($post as $k => $v) {?>
						<tr>
							<td><?php echo $v['news_id']; ?></td>
							<td><?php echo $v['news_name1']; ?></td>
							<td><img src="<?php echo $v['news_map']; ?>" alt=""> </td>
							<td><?php echo $v['class_name']; ?></td>
							<td><?php echo $v['subject_name']; ?></td>
							<td><?php echo $v['terrace_name']; ?></td>
							<td><?php echo $v['news_text']; ?></td>
							<td>
								<a href="<?php echo $this->createUrl('class_update')."&id=".$v['class_id']; ?>">修改</a>
								<a href="<?php echo $this->createUrl('class_delete')."&id=".$v['class_id']; ?>">删除</a>
								<a href="<?php echo $this->createUrl('news_img')."&id=".$v['news_id']; ?>">添加图片</a>
							</td>
						 </tr>
						<?php } ?>
						</tbody>
					  </table>
					</div>
				  </div>