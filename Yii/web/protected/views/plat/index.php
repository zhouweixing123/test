
<link href="<?php echo $this->admin_url; ?>css/table-style.css" rel="stylesheet" type="text/css" />
<div class="left-content">
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Basic Implementation</h2>
            <button><a href="<?php echo $this->createUrl('news/add')?>">添加</a></button>
           
            <table id="table">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>名称</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $k=>$v){ ?>
                    <tr>
                        <td><?=$v['p_id']?></td>
                        <td><?=$v['p_name']?></td>

                        <td>
                            <button><a href="<?php echo $this->createUrl('type/dels')."/id/".$v['p_id']?>">删除</a>
                                <button><a href="<?php echo $this->createUrl('news/show')."/id/".$v['p_id']?>">展示</a></button>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>