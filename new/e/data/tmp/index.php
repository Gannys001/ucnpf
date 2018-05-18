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
    <meta name="keywords" content="国际关系、中国外交、地缘政治、世界经济、世界历史">
	 <meta name="description" content="美中新视角基金会于2016年在美国洛杉矶成立，已完成美国的所有注册审批手续，是具备在海内外募集基金的全球性公募基金会。基金会邀请中外知名专家共同开展国际课题研究项目与交流活动，以加强中美互信合作，提升中国的软实力和国际影响力。基金会致力于架起中外交流的民间桥梁，以国际化的视角表述中国，以全球化的视野建言中国。"> 
    <meta name="description" content="The U.S.-China New Perspectives Foundation（NPF）was founded and registered in California as a global public foundation in 2016. It is a non-profit organization that promotes greater communication between American and Chinese policymakers, researchers, and government officials. The NPF is dedicated to bridging China with the rest of the world, presenting China from an international perspective, and forming recommendations for China’s diplomacy from a global perspective.">
    <link rel="icon" href="images/shared/favicon.png" type="image/png" />
	 <title><?=$public_r[sitename]?></title>
	<style type="text/css">
	/* reset.css */
	html {margin:0;padding:0;border:0;}
	body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, code, del, dfn, em, img, q, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, dialog, figure, footer, header, hgroup, nav, section {margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
	article, aside, details, figcaption, figure, dialog, footer, header, hgroup, menu, nav, section {display:block;}
	body {line-height:1.5;background:white;}
	table {border-collapse:separate;border-spacing:0;}
	caption, th, td {text-align:left;font-weight:normal;float:none !important;}
	table, th, td {vertical-align:middle;}
	blockquote:before, blockquote:after, q:before, q:after {content:'';}
	blockquote, q {quotes:"" "";}
	a img {border:none;}
	:focus {outline:0;}
	body {font-size:13px;color:#8d8282;background:#fff;font-family:"Helvetica Neue", Arial, Helvetica, sans-serif;}
	.clear {clear:both;}
	
	#please{
		width:950px;margin-top:135px;
	}
	#centerimage{
		margin-top:18px;
	}
	#please span{
		font-style:italic;font-weight:bold;float:left;margin-right: 10px;
	}
	#please ul{
		padding-top: 1px;
	}
	#please ul li{
		display:block;float:left;zoom:1;hasLayout:1;background:none;
	}
	#please ul li a{text-decoration: none;padding:0px 30px;display:block;color:#8d8282}
	#please ul li a:hover{color:#174991;text-decoration:none; background:url("images/lang/orange_dot.gif") 15px 6px no-repeat; }
	#please ul .active a{background:url("images/lang/orange_dot.gif") 15px 6px no-repeat; color:#174991}
	</style>
	<script type="text/javascript" src="js/cookie.js"></script>
	<script type="text/javascript">
		function checkCookie()
		{
			show = window.location.search;
			if(show!="?show=true"){
				userlang=getCookie('userlang');
				if (userlang!=null && userlang!="")
				{
					//redirect
					nl_start = window.location.href.indexOf("index.html");
					if(nl_start != -1){
						newlocation = window.location.href.substring(0, nl_start);
					}else{
						newlocation = window.location.href
					}
					newlocation = newlocation+userlang+"/index.html";
					window.location.href = newlocation;
				}
			}
			
		}
	</script>
  </head>
  <body onLoad="checkCookie()">
  	<div align="center">
  		<div id="please" align="left">
  		  <ul>
				<li class="active"><a href="zh-cn/index.html" onClick="setCookie('userlang','zh-cn', 30)">简体中文</a></li>
				<li><a href="en/index.html" onClick="setCookie('userlang','en', 30)">ENGLISH</a></li>
			</ul>
  		</div>
  		<div class="clear"></div>
  		<img id="centerimage" src="images/lang/center.jpg" width="949" height="253" border="0"/>
	</div>
  </body>
</html>
