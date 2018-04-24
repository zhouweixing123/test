<ol class="breadcrumb" style="margin-bottom: 0px;">
    <?php
        $this->breadcrumbs = $crumbs;
        $this->widget('zii.widgets.CBreadcrumbs', array(
        'homeLink' => CHtml::link('首页', $this->createUrl('/site/index')), //设置顶级导航Home为中文 "首页"
        'htmlOptions' => array('class' => 'lnk'), //添加样式  
        'separator' => '->', //breadcrumbs中链接之间的分隔符。默认是‘ » ’。  
        'links' => $this->breadcrumbs,));
    ?>
</ol>