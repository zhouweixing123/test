<link href="<?php echo $this->admin_url; ?>css/table-style.css" rel="stylesheet" type="text/css" />
<div class="left-content">
 <?php foreach($data as $k=>$v){ ?>
              <!-- <img src="<?php //echo $v['img'];?>" alt=""> -->
              <td><img src="<?php echo $v['imgs'];?>" style='width:300px;height:300px;' alt=""> </td>
          <?php }?>
</div>