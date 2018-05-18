<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
  <head profile="http://www.w3.org/2005/10/profile">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="国际关系，中国外交，地缘政治，世界经济，世界历史">
    <meta name="description" content="美中新视角基金会于2016年在美国洛杉矶成立，已完成美国的所有注册审批手续，是具备在海内外募集基金的全球性公募基金会。基金会邀请中外知名专家共同开展国际课题研究项目与交流活动，以加强中美互信合作，提升中国的软实力和国际影响力。基金会致力于架起中外交流的民间桥梁，以国际化的视角表述中国，以全球化的视野建言中国。">    
	<link rel="icon" href="../images/shared/favicon.png" type="image/png" />
    <title>美中新视角基金会 - 首页</title>

    <!-- Framework CSS -->
    <link rel="stylesheet" href="/css/blueprint/screen.css" type="text/css" media="screen, projection, print">

    <!-- Import fancy-type plugin for the sample page. -->
    <link rel="stylesheet" href="/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
  	
  	<!-- Common js -->
	<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/cookie.js"></script>
   <script type="text/javascript" src="/js/common.js"></script>

	<!-- Import for global files -->
	<link rel="stylesheet" href="/css/global.css" type="text/css" media="screen, projection, print">
  	<link rel="stylesheet" href="/zh-cn/css/global.css" type="text/css" media="screen, projection, print">
  	<link rel="stylesheet" href="/css/home.css" type="text/css" media="screen, projection, print">
  	<link rel="stylesheet" href="/zh-cn/css/home.css" type="text/css" media="screen, projection, print">
  	
  	
<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen, projection, print">
<link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen, projection, print">


  	<!--Import for page specific file-->
  	<!-- Import for slide show style sheet -->
  	<!--
  	<script type="text/javascript" src="/js/swfobject.js"></script>
  	<script type="text/javascript" src="/js/mp3player.js"></script>
  	-->
  	<link rel="stylesheet" href="../css/slideshow.css" type="text/css" media="screen, projection, print">
  	<script type="text/javascript" src="/js/s3Slider.js"></script>
  	<script type="text/javascript" src="/js/home.js"></script>
	
	<!--Import for page specific style-->
	
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28968258-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  <style type="text/css">
<!--
.STYLE2 {color: #FFFFFF}
.STYLE3 {font-size: 12px}
.STYLE4 {font-size: 14px}
.STYLE5 {font-size: 13px; }
-->
  </style>
</head>
  <body>
  	
    <div class="container"	style="width:950px;">
      	<div class="span-12">
      		<a id="headerlogo" href="index.html"><img src="/images/shared/logo.png"/><span>美中新视角基金会</span></a>
      	</div>
      	<div id="internal_email" class="span-12 last">
      	<div class="acts fr clearfix" style="margin-top:27px;">
          <div class="dropdownmenu-p lang-select fl"> <a href="javascript:void(0);"><i class="ico ico-lang"></i>Languages<i class="btn btn-tria"></i></a>
           <div class="dropdownmenu-sub lang-options" style="display: none;">
            <dl>
              <dt><a href="/zh-cn/">中文</a></dt>
              <dt><a href="/en/">English</a></dt>
            </dl>
           </div>
          </div> 
        <div class="clear"></div>
        <div class="search-box mt5">
					<form name="searchform" method="post" action="/e/search/index.php" target="_blank">
					<input type="hidden" name="show" value="title,smalltext,newstext,writer">
					<input type="hidden" name="tbname" value="news">
					<input type="hidden" name="tempid" value="1">
               <input name="keyboard" type="text" style="border-radius: 50px;line-height:30px;">
					<input type="submit" name="submit" value="" class="btn btn-srh" style="right: 68px;top:10px;"/>
					</form>
          
          </div>
          
      </div>
     </div>
     
      	<div class="span-24 globalnavi">
      		<ul class="main_nav">
				<li class="active"><a href="/zh-cn/" class="navi">首页</a></li>
				<li><a href="/zh-cn/introduction.html" class="navi">关于我们</a></li>
				<li><a href="/zh-cn/policy.html" class="navi">项目</a></li>
				<li><a href="/zh-cn/magazine.html" class="navi">新视角杂志</a></li>
			  <li><a href="/zh-cn/view/" class="navi">钝角网</a></li>
				<li><a href="/zh-cn/contact.html" class="navi">联系我们</a></li>
			</ul>
      	</div>

<div class="clear"></div>
<div class="container-max cont_top clearfix" style="min-width:950px;max-width:950px;">
            <div class="wid-full fl">
                <div>
                <style>
                		.block01.large .img{
								width:720px;                		
                		}
                </style>
                    <div class="block block01 large banner">
                        <div class="banner-news">
                            <ul class="fade">
                     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where firsttitle='1' order by newstime desc limit 3",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
							<li style="display: none;"><span class="tags" style="display:none"></span> <a class="img relative" href="<?=$bqsr[titleurl]?>"><img src="<?=$bqr[titlepic]?>" alt="<?=$bqr[title]?>"></a>
                                <div class="text-box fl">
                                    <h2 class="title"><a href="<?=$bqr[titleurl]?>"><?=$bqr[title]?></a></h2>
                                    <p class="text"><?=esub($bqr[smalltext],280,'...')?></p>
                                </div>
                            </li> 
                            <?php
}
}
?>                       
                            </ul>
                            <ul class="fade-pages">
							<li class=""></li><li class=""></li><li class=""></li></ul>
                        </div>
                    </div>
                </div>
            </div>
</div>
        
        
<div class="wid-full fl" style="height:250px">
                <div>
                    <div class="block dynamic">
                      	<div class="dynamic-hd" style="width:100px;">
                            <h2 class="dynamic-title fz24">运 营 项 目</h2>
                            <a class="more dynamic-more" href="/zh-cn/fankong.html">了解更多<em>&gt;</em></a>
                    	</div>
                      	<div class="dynamic-bd" style="width:auto;">
                            <ul>
                            
                     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where id='26'",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>                             
							<li class="fl clearfix" style="width:250px;height:230px">
                                <dl>
                                <dd class="text-box">
      										<h2 style="padding-bottom:15px"><a href="/zh-cn/jiaoliu.html"><?=$bqr[title]?></a></h2>
   				  							<div class="left" ><img src="<?=$bqr[titlepic]?>" width="250px" height="187px"></div>
                                </dd>
                                </dl>
                            </li>                          
                      <?php
}
}
?> 
                       
                     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where id='25'",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>                             
							<li class="fl clearfix" style="width:250px;height:230px">
                                <dl>
                                <dd class="text-box">
      										<h2 style="padding-bottom:15px"><a href="/zh-cn/fankong.html"><?=$bqr[title]?></a></h2>
   				  							<div class="left" ><img src="<?=$bqr[titlepic]?>" width="250px" height="187px"></div>
                                </dd>
                                </dl>
                            </li>                          
                      <?php
}
}
?> 
                      
                     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where id='24'",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>                             
							<li class="fl clearfix" style="width:250px;height:230px">
                                <dl>
                                <dd class="text-box">
      										<h2 style="padding-bottom:15px"><a href="/zh-cn/jiuri.html"><?=$bqr[title]?></a></h2>
   				  							<div class="left" ><img src="<?=$bqr[titlepic]?>" width="250px" height="187px"></div>
                                </dd>
                                </dl>
                            </li>                          
                      <?php
}
}
?>     
                                             
                            </ul>
                      	</div>
                    </div>
                </div>
</div>



<div class="clear"></div>




      	<div id="main_content" class="span-24">
      		<!--Column 1-->
      		<div id="column1" class="span-10 border">
      			<h4 style="margin-bottom:17px;  margin-top: 17px;padding-bottom: 9px;border-bottom: 1px solid #cccccc"><img src="/images/shared/blue_arrow.jpg" alt="标示"/>新闻动态</h4>
      			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where id='16' ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<div class="bottomborder">
      				<h2 style="padding-bottom:1em;"><a href="<?=$bqr[titleurl]?>"><?=$bqr[title]?></a></h2>
   				  <div class="left" ><img style="padding-right:1em;"src="<?=$bqr[titlepic]?>" width="169px" height="128px"></div>
                  <div>
                    <p align="left" style="line-height:1.5em"><span class="STYLE2">1111</span><?=esub($bqr[smalltext],140,'...')?></p>               
   				  </div>
   			  </div>
   			  <?php
}
}
?> 
   			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where id='51'",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
			<div class="bottomborder">
      				<h2 style="padding-bottom:1em;"><a href="<?=$bqr[titleurl]?>"><?=$bqr[title]?></a></h2>
   				  <div class="left" ><img style="padding-right:1em;"src="<?=$bqr[titlepic]?>" width="169px" height="128px"></div>
                  <div>
                    <p align="left" style="line-height:1.5em"><span class="STYLE2">1111</span><?=esub($bqr[smalltext],140,'...')?></p>               
   				  </div>
   			  </div>
   			  <?php
}
}
?> 
   	  <div class="morebutton right" style="margin-bottom:30px;"><a href="/zh-cn/news/"><img src="/images/shared/blue_btn_arrow.gif"/><dfn>更多</dfn></a></div>
				</div>
      		<!--Column 2-->
      		<div id="column2" class="span-8 border">
      			<!--News Reports-->
      			<div id="news_report_section">     			
      			<!--Work Updates-->
      			<div id="work_updates_section">
      				<!--Header-->
      				<h4><img src="/images/shared/blue_arrow.jpg" alt="标示"/>观点分享</h4>
      				<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where id='52' ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<!--Row 1-->
					<div class="work_updates_row">
						<div class="left"><a href="<?=$bqr[titleurl]?>"><img class="bordered_image" width="126" height="101" src="<?=$bqr[titlepic]?>" alt="<?=$bqr[title]?>"/></a></div>
					    <p  style="line-height:1.5em"><a href="<?=$bqr[titleurl]?>"><strong></a> </p>
						<p  style="line-height:1.5em"><?=$bqr[title]?></strong><br><?=esub($bqr[smalltext],90,'...')?></p>
				      </div>
					
					<div class="clear"></div>
					<?php
}
}
?>		
					<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where id='18' ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<!--Row2-->
					<div class="work_updates_row">
						<div class="left"><a href="<?=$bqr[titleurl]?>"><img class="bordered_image" width="126" height="101" src="<?=$bqr[titlepic]?>" alt="<?=$bqr[title]?>"/></a></div>
					    <p  style="line-height:1.5em"><a href="<?=$bqr[titleurl]?>"><strong></a> </p>
						<p  style="line-height:1.5em"><?=$bqr[title]?></strong><br><?=esub($bqr[smalltext],90,'...')?></p>
				      </div>
					
					<div class="clear"></div>
					<?php
}
}
?>				
      				<div class="morebutton right"><a href="/zh-cn/view/"><img src="../images/shared/blue_btn_arrow.gif"/><dfn>更多</dfn></a></div>
      				
   			  </div>
      		</div>
      		

      	</div>
      		<!--Column 3-->
      		<div id="column3" class="span-6 last">
      			<!--Featured Video-->
      			<div id="featured_video">
      				<div class="boxheader"><h4>影像资料</h4></div>
      				<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_flash where classid='24' order by newstime desc limit 1",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      		   <div  class="work_updates_row" id="work_updates_row02">
						<div><span class="left"><a href="/zh-cn/video/"><img  style=" margin-left:2.5em;" src="<?=$bqr[titlepic]?>" width="169" height="132"></a></span></div>
				  </div>
				  	<?php
}
}
?>
      			</div>
      			<!--Annaul Report-->
      			<div id="annualreport">
      				<div class="boxheader"><h4>出版物</h4></div>
      				<div class="annualreport_pic"><img width="208" height="200" src="/images/shared/pub1.jpg" alt="出版物"/></div>
      			</div>
      		</div>
      	</div>
<div class="clear"></div>
      	<!--Footer-->
  <div class="footer2" style="width:950px;clear: both;margin:0 auto;">
    <div class="container clearfix" style="width:950px;">
      <div class="copyright fl" style="margin-left:25px;">
        <div class="contact"> <a href="">版权声明</a><b>|</b><a href="/zh-cn/contact.html">联系方式</a> </div>
        <p>美中新视角基金会版权所有 Copyright &copy; The U.S.-China New Perspectives Foundation</p>
        <p style="text-indent:0em;">电话TEL：+1（626）656-3512（美国）；+86（10）6496-1765（中国）</p>
      </div>
      <div class="scan-links" style="margin-right: 25px;"> 
          <a class="forum-link" href="#"><img src="/images/shared/weixin.png" alt="微信公众号"/><span>微信公众号</span></a> 
      </div>
    </div>
  </div>
      	
      	<div id="lanuagetextbar" class="prepend-17 span-5"><div class="right push-1"><a href="/zh-cn/"  onClick="setCookie('userlang','zh-cn', 30)">中文简体</a> |  <a href="/en/"  onClick="setCookie('userlang','en', 30)">ENGLISH</a></div></div>
      	<div id="languagemap" class="span-2 last"><a href=""><img class="right" width="56" height="29" src="/images/shared/world.gif"></a></div>
  </body>
</html>
