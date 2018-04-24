
<link href="<?php echo $this->admin_url; ?>css/table-style.css" rel="stylesheet" type="text/css" />
<div class="left-content">
      <center>	  
    <table>
		<th>ID</th>
		<th>标题2</th>
		<th>标题1</th>
		

			<?php foreach ($res as $key => $value): ?>
				<tr><td><?php echo $value['news_id']?></td>
					<td><?php echo $value['news_name1'];?></td>
					<td><?php echo $value['news_name2']?></td></tr>
				<tr>
				</tr>
				<tr></tr>
			<?php endforeach ?>	

	</table>
</center>
</div>