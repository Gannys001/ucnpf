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
    <title><?=$grpagetitle?></title>

    <!-- Framework CSS -->
    <link rel="stylesheet" href="/css/blueprint/screen.css" type="text/css" media="screen, projection, print">
    <!--link rel="stylesheet" href="../../css/blueprint/print.css" type="text/css" media="print"-->
    <!--[if lt IE 8]><link rel="stylesheet" href="../../css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

    <!-- Import fancy-type plugin for the sample page. -->
    <link rel="stylesheet" href="/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
  	
  	<!-- Common js -->
    <script type="text/javascript" src="/js/print.js"></script>
    <script type="text/javascript" src="/js/cookie.js"></script>

	<!-- Import for global files -->
	<link rel="stylesheet" href="/css/global.css" type="text/css" media="screen, projection, print">
  	<link rel="stylesheet" href="/zh-cn/css/global.css" type="text/css" media="screen, projection, print">
  	
  	<!--Import for page specific file-->
  	<link rel="stylesheet" href="/css/news.css" type="text/css" media="screen, projection, print">
  	<link rel="stylesheet" href="/css/news_subpages.css" type="text/css" media="screen, projection, print">



   <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen, projection, print">
   <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen, projection, print">


    <style type="text/css">
<!--
.STYLE10 {
	font-size: 16px;
	font-weight: bold;
	color: #000000;
}
.STYLE12 {
	color: #000000;
	font-weight: bold;
}
.STYLE14 {color: #FFFFFF}
.STYLE15 {color: #000000}
-->
    </style>
</head>
  <body>
  	
    <div class="container">
      	<div class="span-24">
      		<a id="headerlogo" href="../index.html"><img src="/images/shared/logo.gif"/><span>The U.S.-China New Perspectives Foundation</span></a>
</div>

      	<div class="span-24 globalnavi">
      		<ul class="main_nav">
				<li ><a href="/en/" class="navi">HOME</a></li>
				<li><a href="/en/introduction.html" class="navi">ABOUT US</a></li>
				<li><a href="/en/policy.html" class="navi">PROGRAMS</a></li>
                                <li><a href="/en/magazine.html" class="navi">MAGAZINE</a></li>
				<li class="active"><a href="/en/news/" class="navi">NEWS</a></li>
				<li ><a href="/en/contact.html" class="navi">CONTACT US</a></li>
			</ul>
      	</div>
      	
      	<div id="main_content" class="span-24" style="min-height:600px ">
      		<div id="videocontent" class="span-17 last push-1" style="margin-left:150px;">
      			<h3><?=$ecms_gr[title]?></h3>
      			<div id="videoplayer_wrapper">
	    	  <div id="videoplayer">
						<embed src="<?=$ecms_gr[flashurl]?>"  width="<?=$ecms_gr[width]?>" height="<?=$ecms_gr[height]?>" ></embed>
      		    	</div>
      		    </div>
				</div>
   	  </div>     
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
    </div>
  </body>
</html>
