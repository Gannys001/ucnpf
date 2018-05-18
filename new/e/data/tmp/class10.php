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
	<link rel="icon" href="/images/shared/favicon.png" type="image/png" />
    <title>The U.S.-China New Perspectives Foundation - Home</title>
    <meta name="keywords" content="American and Chinese policymakers, researchers, and government officials.">
    <meta name="description" content="The U.S.-China New Perspectives Foundation（NPF）was founded and registered in California as a global public foundation in 2016. It is a non-profit organization that promotes greater communication between American and Chinese policymakers, researchers, and government officials. The NPF is dedicated to bridging China with the rest of the world, presenting China from an international perspective, and forming recommendations for China’s diplomacy from a global perspective.">

    <!-- Framework CSS -->
    <link rel="stylesheet" href="/css/blueprint/screen.css" type="text/css" media="screen, projection, print">
    <!--link rel="stylesheet" href="../css/blueprint/print.css" type="text/css" media="print"-->
    <!--[if lt IE 8]><link rel="stylesheet" href="../css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

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
  	<link rel="stylesheet" href="/css/slideshow.css" type="text/css" media="screen, projection, print">
  	<script type="text/javascript" src="/js/s3Slider.js"></script>
  	<script type="text/javascript" src="/js/home.js"></script>
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
      		<a id="headerlogo" href="index.html"><img src="/images/shared/logo.gif"/><span>The U.S.-China New Perspectives Foundation</span></a>
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
					<input type="submit" name="submit" value="" class="btn btn-srh" style="right: 61px;top:11px;"/>
					</form>  
          </div>
          
      </div>
     </div>
     
      	<div class="span-24 globalnavi">
      		<ul class="main_nav">
				<li  class="active"><a href="/en/" class="navi">HOME</a></li>
				<li><a href="/en/introduction.html" class="navi">ABOUT US</a></li>
				<li><a href="/en/policy.html" class="navi">PROGRAMS</a></li>
                                <li><a href="/en/magazine.html" class="navi">MAGAZINE</a></li>
				<li><a href="/en/news/" class="navi">NEWS</a></li>
				<li><a href="/en/contact.html" class="navi">CONTACT US</a></li>
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where id='65' or id='74'",0,24,0);
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
                     <li style="display: none;"><span class="tags" style="display:none"></span> <a class="img relative" href="/en/chaohe.html"><img src="/images/en/chaohe.jpg" alt="chaohe"></a>
                                <div class="text-box fl">
                                    <h2 class="title"><a href="/en/chaohe.html">Sino-Japan Dialogue: Nuclear Issue on Korean Peninsula</a></h2>
                                    <p class="text">On February 26, 2017, the NPF and the Sasawaka Japan-China Friendship Fund jointly organized the event of Sino-Japan Dialogue. We invited Japanese scholars Imura Yuki, Yamazaki Amane from The Japan Institute of International Affairs, Hiraiwa Shunji from Kansai University and Hotta Yukihiro from The Kazankai Foundation to discuss profoundly around the Nuclear Issue on Korean Peninsula with the Chinese experts Yu Hongjun......</p>
                                </div>
                            </li> 
                       
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
                      	<div class="dynamic-hd" style="width:105px;height:235px;">
                            <h2 class="dynamic-title fz24" style="padding:40px 30px 100px 4px;font-size:20px;">Programs</h2>
                            <a class="more dynamic-more" href="/en/fankong.html">More<em>&gt;</em></a>
                    	</div>
                      	<div class="dynamic-bd" style="width:auto;">
                            <ul>
                            
                     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where id='43'",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>   
                            
							<li class="fl clearfix" style="width:250px;height:230px">
                                <dl>
                                <dd class="text-box">
      										<h2 style="padding-bottom:15px"><a href="/en/jiaoliu.html"><?=$bqr[title]?></a></h2>
   				  							<div class="left" ><a href="/en/jiaoliu.html"><img src="<?=$bqr[titlepic]?>" width="250px" height="187px"></a></div>
                                </dd>
                                </dl>
                            </li>
                            
                      <?php
}
}
?>      
                      
                     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where id='42'",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>   
                            
							<li class="fl clearfix" style="width:250px;height:230px">
                                <dl>
                                <dd class="text-box">
      										<h2 style="padding-bottom:15px"><a href="/en/fankong.html"><?=$bqr[title]?></a></h2>
   				  							<div class="left" ><a href="/en/fankong.html"><img src="<?=$bqr[titlepic]?>" width="250px" height="187px"></a></div>
                                </dd>
                                </dl>
                            </li>
                            
                      <?php
}
}
?> 
                      
                     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where id='41'",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>   
                            
							<li class="fl clearfix" style="width:250px;height:230px">
                                <dl>
                                <dd class="text-box">
      										<h2 style="padding-bottom:15px"><a href="/en/jiuri.html"><?=$bqr[title]?></a></h2>
   				  							<div class="left" ><a href="/en/jiuri.html"><img src="<?=$bqr[titlepic]?>" width="250px" height="187px"></a></div>
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
      			<h4 style="margin-bottom:17px;  margin-top: 17px;padding-bottom: 9px;border-bottom: 1px solid #cccccc"><img src="/images/shared/blue_arrow.jpg" alt="Marked"/>Event</h4>
      			<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where id='65' or id='74'",0,24,0);
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
   	  <div class="morebutton right" style="margin-bottom:30px;"><a href="/en/news/"><img src="/images/shared/blue_btn_arrow.gif"/><dfn>More</dfn></a></div>
				</div>
      		<!--Column 2-->
      		<div id="column2" class="span-8 border">
      			<!--News Reports-->
      			<div id="news_report_section">     			
      			<!--Work Updates-->
      			<div id="work_updates_section">
      				<!--Header-->
      				<h4><img src="/images/shared/blue_arrow.jpg" alt="Marked"/>View</h4>
      				<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_news where id='68' or id='70' ",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
					<!--Row 1-->
					<div class="work_updates_row">
						<div class="left"><a href="<?=$bqr[titleurl]?>"><img class="bordered_image" width="126" height="101" src="<?=$bqr[titlepic]?>" alt="<?=$bqr[title]?>"/></a></div>
					    <p  style="line-height:1.5em"><a href="<?=$bqr[titleurl]?>"><strong></a> </p>
						<p  style="line-height:1.5em"><?=$bqr[title]?></strong><br><?=esub($bqr[smalltext],150,'...')?></p>
				      </div>
					
					<div class="clear"></div>
					<?php
}
}
?>					
      				<div class="morebutton right"><a href="/en/view/"><img src="../images/shared/blue_btn_arrow.gif"/><dfn>More</dfn></a></div>
      				
   			  </div>
      		</div>
      		

      	</div>
      		<!--Column 3-->
      		<div id="column3" class="span-6 last">
      			<!--Featured Video-->
      			<div id="featured_video">
      				<div class="boxheader"><h4>Video</h4></div>
      				<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from {$dbtbpre}ecms_flash where classid='41' order by newstime desc limit 1",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      		   <div  class="work_updates_row" id="work_updates_row02">
						<div><span class="left"><a href="/en/video/"><img  style=" margin-left:2.5em;" src="<?=$bqr[titlepic]?>" width="169" height="132"></a></span></div>
				  </div>
				  	<?php
}
}
?>
      			</div>
      			<!--Annaul Report-->
      			<div id="annualreport">
      				<div class="boxheader"><h4>Publish</h4></div>
      				<div class="annualreport_pic"><img width="208" height="200" src="/images/shared/pub1.jpg" alt="publication"/></div>
      			</div>
      		</div>
      	</div>
<div class="clear"></div>
      	<!--Footer-->
  <div class="footer2" style="width:950px;margin:0 auto;clear: both;">
    <div class="container clearfix" style="width:950px;">
      <div class="copyright fl" style="margin-left:25px;">
        <div class="contact"> <a href="">Copyright</a><b>|</b><a href="/en/contact.html">Contact</a> </div>
        <p>美中新视角基金会版权所有 Copyright &copy; The U.S.-China New Perspectives Foundation</p>
        <p style="text-indent:0em;">电话TEL：+1（626）656-3512（U.S.）；+86（10）6496-1765（中国）</p>
      </div>
      <div class="scan-links" style="margin-right: 25px;"> 
          <a class="forum-link" href="#"><img src="/images/shared/weixin.png" alt="微信公众号"/><span>微信公众号</span></a> 
      </div>
    </div>
  </div>
      	
      	<div id="lanuagetextbar" class="prepend-17 span-5"><div class="right push-1"><a href="/zh-cn/index.html" onClick="setCookie('userlang','zh-cn', 30)">中文简体</a> |  <a href="/en/index.html" onClick="setCookie('userlang','en', 30)">ENGLISH</a></div></div>
      	<div id="languagemap" class="span-2 last"><a href=""><img class="right" width="56" height="29" src="/images/shared/world.gif"></a></div>
  </body>
</html>
