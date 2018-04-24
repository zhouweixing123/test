<link href="<?php echo $this->admin_url; ?>css/table-style.css" rel="stylesheet" type="text/css" />
	<div class="left-content">
	<form action="<?php echo $this->createUrl('plat/views_add')?>" method='post' enctype='multipart/form-data'>
	   <center>	
		 <table>
			<tr>
				<td>广告标题：</td>
				<td><input type="text" name='type_name'></td>
			</tr>
			<tr>
				<td>广告主题：</td>
				<td>
					<input type="text" name='type'>
					
				</td>
			</tr>
			<tr>
				<td>内容：<textarea name="connect" id="" cols="30" rows="10"></textarea></td>
				<!-- <td></td> -->
			</tr>
		<tr>
			<td></td>
			<td><input type="submit" value='提交'></td>
		</tr>
	<!-- 	<tr>
			<td></td>
			<td></td>
		</tr> -->
		</table>
	</cebter>
</form>
	</div>

