<link href="<?php echo $this->admin_url; ?>css/table-style.css" rel="stylesheet" type="text/css" />

<?php if (@$crumbs): ?>
    <?php $this->renderPartial('/layouts/_crumbs', array('crumbs' => $crumbs)); ?>
<?php endif; ?>

<div class="left-content">
    <form action="<?php echo $this->createUrl('type/add_do')?>" method="post">
        <table>
            <tr>
                <td>分类名称：</td>
                <td><input type="text" name="type_name"></td>
                <td colspan="2"><input type="submit" value="提交"></td>
            </tr>
        </table>
    </form>

</div>