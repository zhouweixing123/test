<link href="<?php echo $this->admin_url; ?>css/table-style.css" rel="stylesheet" type="text/css" />
<?php if (@$crumbs): ?>
    <?php $this->renderPartial('/layouts/_crumbs', array('crumbs' => $crumbs)); ?>
<?php endif; ?>
     
<div class="left-content">
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Basic Implementation</h2>
            <button><a href="<?php echo $this->createUrl('type/add')?>">添加</a></button>
            <table id="table">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>分类名称</th>
                    <th>添加时间</th>
                    <th>是否显示</th>
                    <th>是否删除</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($res as $k=>$v){ ?>
                <tr>
                    <td><?=$v['type_id']?></td>
                    <td><?=$v['type_name']?></td>
                    <td><?=$v['type_time']?></td>
                    <td><?php if($v['type_status']==1){?>是<?php }else{?>否<?php }?></td>
                    <td><?php if($v['type_del']==1){?>是<?php }else{?>否<?php }?></td>
                    <td>
                        <button>
                            <a href="<?php echo $this->createUrl('type/del',array('id'=>$v['type_id']))?>">删除</a>
                        </button>

                       <!--  <button> -->
                           <!--  <a href="<?php //echo $this->createUrl(//'type/updates',array('id'=>$v['type_id']))?>">修改</a> -->
                             <!-- <input type="hidden" name="id" value="<?php// echo $v['type_id']?>">
 -->
                   <!--  <input type="hidden" name="type_id" value="<?php //echo $v['type_id']?>">

                        </button> -->
                    </td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
</div>
</div>