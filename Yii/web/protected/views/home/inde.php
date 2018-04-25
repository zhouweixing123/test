<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?=Yii::app() -> request -> baseUrl?>/style/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo Yii::app()->request->baseUrl?>/style/admin/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/style/admin/css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="<?php echo Yii::app()->request->baseUrl?>/style/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo Yii::app()->request->baseUrl?>/style/admin/js/jquery-2.1.4.min.js"></script>
<!-- /mouth4/YII/web/style/admin/css/jquery-ui.css -->
<!-- //jQuery -->
<link href='http://fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/style/admin/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="right-content" style='width:1135px;'>
	   <div class="mother-grid-inner">
    	<!--four-grids here-->
	<div class="four-grids">
	<div class="col-md-3 four-grid">
		<div class="four-agileits">
			<div class="icon">
				<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
			</div>
			<div class="four-text">
				<h3>User</h3>
				<h4> 24,420  </h4>
				
			</div>
			
		</div>
	</div>
	<div class="col-md-3 four-grid">
		<div class="four-agileinfo">
			<div class="icon">
				<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
			</div>
			<div class="four-text">
				<h3>Clients</h3>
				<h4>15,520</h4>

			</div>
			
		</div>
	</div>
	<div class="col-md-3 four-grid">
		<div class="four-w3ls">
			<div class="icon">
				<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
			</div>
			<div class="four-text">
				<h3>Projects</h3>
				<h4>12,430</h4>
				
			</div>
			
		</div>
	</div>
	<div class="col-md-3 four-grid">
		<div class="four-wthree">
			<div class="icon">
				<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
			</div>
			<div class="four-text">
				<h3>Old Projects</h3>
				<h4>14,430</h4>
				
			</div>
			
		</div>
	</div>
	<div class="clearfix"></div>
	</div>
<!--//four-grids here-->
<!--photoday-section-->
<div class="col-sm-4 w3-agile-crd">
<div class="card" style='width:1135px;'>
<div class="card-body card-padding">
<div class="widget">
<header class="widget-header">
<h4 class="widget-title">Activities</h4>
</header>
<hr class="widget-separator">
 <style>

  ul li{
    font-size: 21px;


  }
 </style>
<div class="left-content">
    
        <!-- <a href='?r=theme/index'>首页</a> -->
 
<!--  <ul>
    <a href="?r=news/Add"><li id="dd">-----</li></a>
    <?php foreach ($cate as $key => $value) { ?>
        <li id="dd"><?=$value['news_name1']?></li>

   <?php }?>
</ul> -->



</div>
<!-- <div class="widget-body">
<div class="streamline"> -->

	<div class="sl-item sl-primary">

	    <div class="sl-content">

	        <small class="text-muted">5 mins ago</small>

	        <p>  <?php foreach ($cate as $key => $value) { ?>
	        <li id="dd"><a href="https://blog.csdn.net/CSDNedu/article/details/80063505"><?=$value['news_name1']?></a></li>

	   <?php }?></p>
	    </div>
	</div>

<!-- <div class="sl-item sl-danger">
    <div class="sl-content">
        <small class="text-muted">25 mins ago</small>
        <p>Jane has sent a request for access</p>
    </div>
</div>
<div class="sl-item sl-success">
    <div class="sl-content">
        <small class="text-muted">40 mins ago</small>
        <p>Kate added you to her team</p>
    </div>
</div>
<div class="sl-item">
    <div class="sl-content">
        <small class="text-muted">45 minutes ago</small>
        <p>John has finished his task</p>
    </div>
</div>
<div class="sl-item sl-warning">
    <div class="sl-content">
        <small class="text-muted">55 mins ago</small>
        <p>Jim shared a folder with you</p>
    </div>
</div> -->

<!-- </div>
</div> -->

			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
                   
	<!--//photoday-section-->	
	<!--w3-agileits-pane-->	
	 
</div>
			</div>
		  <div class="clearfix"></div>
	  </div>
	  <!--//w3-agileits-pane-->	
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://www.mycodes.net/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
</div>	
<!--COPY rights end here-->
<!-- </div>
</div> -->
  <!--//content-inner-->
			<!--/sidebar-menu-->
<div class="clearfix"></div>		
<!-- </div> -->
<script>
var toggle = true;
		
$(".sidebar-icon").click(function() {                
if (toggle)
{
$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
$("#menu span").css({"position":"absolute"});
}
else
{
$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
setTimeout(function() {
  $("#menu span").css({"position":"relative"});
}, 400);
}
			
			toggle = !toggle;
		});
</script>
<!--js -->
<script src="<?php echo Yii::app()->request->baseUrl?>/style/admin/js/jquery.nicescroll.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo Yii::app()->request->baseUrl?>/style/admin/js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="<?php echo Yii::app()->request->baseUrl?>/style/admin/js/raphael-min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl?>/style/admin/js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
</body>
</html>