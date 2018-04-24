
<link href="<?php echo $this->admin_url; ?>css/table-style.css" rel="stylesheet" type="text/css" />
<div class="left-content">
      <center>	  
    <table>
		<th>ID</th>
		<th>、、、</th>
		<th>标题</th>
		

			<?php foreach ($res as $key => $value): ?>
				<tr><td><?php echo $value['id']?></td>
					<td><?php echo $value['title'];?></td>
					<td><?php echo $value['title_alias']?></td></tr>
				<tr>
				</tr>
				<tr></tr>
			<?php endforeach ?>	

	</table>
</center>
</div>