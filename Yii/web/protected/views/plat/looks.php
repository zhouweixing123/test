<link href="<?php echo $this->admin_url; ?>css/table-style.css" rel="stylesheet" type="text/css" />
<div class="left-content">

	<table>
		<th>编号</th>
		<th>类型</th>&nbsp&nbsp&nbsp&nbsp&nbsp
		<th>标题</th>&nbsp&nbsp&nbsp&nbsp&nbsp
		<th>内容</th>&nbsp&nbsp&nbsp&nbsp&nbsp

 <?php foreach($data as $k=>$v){ ?>

 	<tr>
		<td><?php echo $v['id']?></td>
 		<td><?php echo $v['type'];?></td>
 		<td><?php echo $v['type_name'];?></td>
 		<td><?php echo $v['connect'];?></td>
 	</tr>
 	
 	


 <?php }?>
</table>
</div>