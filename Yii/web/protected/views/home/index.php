
<meta charset="UTF-8">
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->admin_url?>css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="<?php echo $this->admin_url?>css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="<?php echo $this->admin_url?>css/morris.css" type="text/css"/>
    <!-- Graph CSS -->
    <link href="<?php echo $this->admin_url?>css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo $this->admin_url?>js/jquery-2.1.4.min.js"></script>
    <!-- //jQuery -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="<?php echo $this->admin_url?>css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
</head>
<div class="sidebar-menu">
          <header class="logo1">
            <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
          </header>
            <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
                  <ul id="menu" >
                    <li><a href="<?php echo Yii::app()->request->baseUrl ?>"><i class="fa fa-tachometer"></i> <span>首页</span><div class="clearfix"></div></a></li>


                     <li id="menu-academico" ><a href="<?php echo Yii::app()->request->baseUrl ?>/?r=type/index"><i class="fa fa-envelope nav_icon"></i><span>分类管理</span><div class="clearfix"></div></a></li>
                  <li><a href="<?php echo Yii::app()->request->baseUrl ?>/?r=plat/index"><i class="fa fa-picture-o" aria-hidden="true"></i><span>平台管理</span><div class="clearfix"></div></a></li>
                  <li id="menu-academico" ><a href="<?php echo Yii::app()->request->baseUrl ?>/?r=theme/index"><i class="fa fa-bar-chart"></i><span>主题管理</span><div class="clearfix"></div></a></li>
                   <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> 新闻管理</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><a href="<?php echo Yii::app()->request->baseUrl ?>/?r=news/look">新闻列表</a></li>
                      <li id="menu-academico-avaliacoes" ><a href="<?php echo Yii::app()->request->baseUrl ?>/?r=news/add">标题录入</a></li>
                      <li id="menu-academico-avaliacoes" ><a href="<?php echo Yii::app()->request->baseUrl ?>/?r=news/cj">新闻抓取</a></li>
                      </ul>
                    </li>
                  
                    <li id="menu-academico" >
                      <a href="#"><!-- <i class="fa fa-cogs" aria-hidden="true"></i> -->
                        <span>广告位</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                       <ul id="menu-academico-sub" >
                       <li id="menu-academico-avaliacoes" ><a href="<?php echo Yii::app()->request->baseUrl?>/?r=plat/views">广告</a></li>
                      <li id="menu-academico-avaliacoes" ><a href="<?php echo Yii::app()->request->baseUrl?>/?r=plat/vie">广告位</a></li>
                      </ul>
                    </li>
                  
          
                  
                  </ul>
                </div>
                </div>
