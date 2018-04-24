<link href="<?php echo $this->admin_url; ?>css/table-style.css" rel="stylesheet" type="text/css" />

<?php if (@$crumbs): ?>
    <?php $this->renderPartial('/layouts/_crumbs', array('crumbs' => $crumbs)); ?>
<?php endif; ?>

<div class="left-content">
    <form action="<?php echo $this->createUrl('news/Zj')?>" method="post">
        <table>
            <tr>
                <td>标题：</td>
                <td><input type="text" name='t_name'></td>
                <td><input type="submit" value='添加'></td>
            </tr>
        </table>
    </form>

</div>