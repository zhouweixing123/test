
<link href="<?php echo $this->admin_url; ?>css/table-style.css" rel="stylesheet" type="text/css" />
<div class="left-content">
    <div class="agile-tables">
        <div class="w3l-table-info">
            <h2>Basic Implementation</h2>
            <button><a href="<?php echo $this->createUrl('news/add')?>">添加</a></button>
            <table id="table">
                <thead>
               <!-- <button><a href="<?php echo $this->createUrl('news/Cj')?>">抓取</a>  -->  
                <tr>
                    <th>序号</th>
                    <th>主题</th>
                    <th>操作</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $k=>$v){ ?>
                    <tr>
                        <td><?=$v['t_id']?></td>
                        <td><?=$v['t_name']?></td>
                        <td>
                            <button><a href="<?php echo $this->createUrl('news/del')."/id/".$v['t_id']?>">删除</a>
                                <button><a href="<?php echo $this->createUrl('news/show')."/id/".$v['t_id']?>">展示</a></button>
                             
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>