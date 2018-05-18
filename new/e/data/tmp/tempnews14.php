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
   <meta name="keywords" content="The U.S.-China New Perspectives Foundation（NPF）,American and Chinese policymakers, researchers, and government officials." >
	<meta name="description" content="<?=$grpagetitle?>">
	<title>The U.S.-China New Perspectives Foundation（NPF）-<?=$grpagetitle?></title>

    <!-- Framework CSS -->
    <link rel="stylesheet" href="/css/blueprint/screen.css" type="text/css" media="screen, projection, print">
    <!--link rel="stylesheet" href="../css/blueprint/print.css" type="text/css" media="print"-->
    <!--[if lt IE 8]><link rel="stylesheet" href="../css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

    <!-- Import fancy-type plugin for the sample page. -->
    <link rel="stylesheet" href="/css/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
  	
  	<!-- Common js -->
    <script type="text/javascript" src="/js/cookie.js"></script>

	<!-- Import for global files -->
	<link rel="stylesheet" href="/css/global.css" type="text/css" media="screen, projection, print">
  	<link rel="stylesheet" href="/zh-cn/css/global.css" type="text/css" media="screen, projection, print">
  	
  	<!--Import for page specific file-->
  	<link rel="stylesheet" href="/css/news.css" type="text/css" media="screen, projection, print">
  	<link rel="stylesheet" href="/css/news2.css" type="text/css" media="screen, projection, print">

	<link rel="stylesheet" href="/css/print.css" type="text/css" media="print">
	
	
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen, projection, print">
   <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen, projection, print">

	
	
	
    <style type="text/css">
<!--
.STYLE1 {
	font-size: 16px;
	font-weight: bold;
}
.STYLE3 {
	font-size: 12px
}
.STYLE4 {
	font-size: 13px;
	color: #333333;
}
-->
    </style>
</head>
  <body>
  	
    <div class="container">
      	<div class="span-24">
      		<a id="headerlogo" href="index.html"><img src="/images/shared/logo.gif"/><span>The U.S.-China New Perspectives Foundation</span></a>
      	</div>

      	<div class="span-24 globalnavi">
      		<ul class="main_nav">
				<li ><a href="/en/" class="navi">Home</a></li>
				<li><a href="/en/introduction.html" class="navi">About Us</a></li>
				<li><a href="/en/fankong.html" class="navi">Programs</a></li>
				<li class="active"><a href="/en/news/" class="navi">Events</a></li>
			        <li><a href="/en/view/" class="navi">Viewpoint</a></li>
				<li><a href="/en/contact.html" class="navi">Contact Us</a></li>
			</ul>
      	</div>
      	
      	<div id="main_content" class="span-24">
      		<div id="subnavi" class="span-5">
      			<div id="topborder"></div>
      			<ul class="border">
      				<li class="active"><a href="/en/news/">NPF News</a></li>
      				<li><a href="/en/video/">Video</a></li>
      			</ul>
      			<div id="bottomborder"></div>
      		</div>
      		<div class="span-17 last push-1">
      			<p class="quiet time">&nbsp;</p>
   			    <div align="center" class="STYLE10">
   			      <h1><?=$ecms_gr[title]?></h1>
   			      </div>
	          <p align="center">&nbsp;</p>
	          <p align="center"><span class="quiet time  STYLE12"><?=date('Y-m-d H:i:s',$ecms_gr[newstime])?>&nbsp;<?=$docheckrep[1]?ReplaceBefrom($ecms_gr[befrom]):$ecms_gr[befrom]?>&nbsp;</span></p>
	          <div class="xinwen" style="font-size:16px;line-height:1.6em;text-indent:2em"><?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?></div>
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
<script src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1"></script>
</html>

