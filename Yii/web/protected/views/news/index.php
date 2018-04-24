
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
                    <th>新闻长标题</th>
                    <th>新闻短标题</th>
                    <th>新闻类别</th>
                    <th>新闻主题</th>
                    <th>平台</th>
                    <th>新闻作者</th>
                    <th>修改时间</th>
                    <th>入库时间</th>
                    <th>是否展示</th>
                    <th>是否删除</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data as $k=>$v){ ?>
                    <tr>
                        <td><?=$v['news_id']?></td>
                        <td><?=$v['news_long_title']?></td>
                        <td><?=$v['news_short_title']?></td>
                        <td><?php GetName::type($v['type_id']) ?></td>
                        <td><?php GetName::theme($v['t_id']) ?></td>
                        <td><?php GetName::plat($v['plat_id']) ?></td>
                        <td><?=$v['autho']?></td>
                        <td><?=$v['news_update_time']?></td>
                        <td><?=$v['time']?></td>
                        <td>
                            <?php if($v['is_show']==1){?>
                                是
                            <?php }else{?>
                                否
                            <?php }?>
                        </td>
                        <td><?php if($v['news_status']==1){?>是<?php }else{?>否<?php }?></td>
                        <td>
                            <button><a href="<?php echo $this->createUrl('news/del')."/id/".$v['type_id']?>">删除</a>
                                <button><a href="<?php echo $this->createUrl('news/show')."/id/".$v['type_id']?>">展示</a></button>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>