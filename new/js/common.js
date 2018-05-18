// Tab JS
function setTab(name,cursel,n){
 	for(i=1;i<=n;i++){
  	var menu=document.getElementById(name+i);
  	var con=document.getElementById("con_"+name+"_"+i);
  	menu.className=i==cursel?"hover":"";
  	con.style.display=i==cursel?"block":"none";
 	}
}

//banner-news淡出淡入效果
$(function(){
	function Slide(obj,speed){
		$("."+obj).each(function() {
			var n = 0,
				$This = $(this),
				$Li = $This.children(".fade").children("li"),
				$Page = $This.children(".fade-pages").children("li");
			$Li.eq(0).fadeIn(1000);
			function fade(){
				$Page.removeClass("cur");
				$Li.eq(n).fadeOut(200);
				n += 1;
				if(n == $Li.length){
					n = 0;
				}
				$Li.eq(n).fadeIn(1000);
				$Page.eq(n).addClass("cur");
				t=setTimeout(function(){fade()},speed);
			}
			$This.mouseover(function(){
				clearInterval(t);
			});
			$Page.each(function(i) {
				$(this).click(function() {
					$Li.eq(n).fadeOut(200);
					n = i;
					$Li.eq(n).fadeIn(1000);
					$(this).addClass("cur").siblings("li").removeClass('cur');
				});
			});
			$This.mouseout(function(){
				t=setTimeout(function(){fade()},speed);
			});
			t=setTimeout(function(){fade()},speed);
		});
	};
	Slide("banner-news",4000);
	Slide("banner-forum",3500);	
});

//活动页面 banner-brand 图片向左滑动
$(function(){
	var Timer,
		Width,
		j = 1,
		$Brand = $(".banner-brand"),
		$Fade = $Brand.children(".fade"),
		$LI = $Fade.children("li"),
		$Fpage = $Brand.children(".fade-pages"),
		$li = $Fpage.children("li"),
		num = $LI.length;
	$(function(){
		//获取宽度，计算每次移动的距离
		Width = $Brand .width();	
		$LI.css('width',Width);
		$Fade.css('width',num*Width);
		$(window).resize(function(){
			Width = $Brand .width();
			$LI.css('width',Width);
			$Fade.css('width',num*Width);
		});	
		Timer = setInterval(player,4000);
		//鼠标移动到图片上时停止滚动，移开则继续滚动
		$LI.hover(
			function(){
				clearInterval(Timer);	
			},
			function(){
				Timer = setInterval(player,4000);	
			}
		);
		//鼠标点击按钮切换图片
		$li.click(function(){
			clearInterval(Timer);
			var cur = i = curn = 0;
			$(this).addClass('tmp');
			$li.each(function(){
				if($(this).hasClass('cur'))
					cur = i;
				if($(this).hasClass('tmp'))
					curn = i;	
				i++;
			});
			$Fpage.children("li.cur").removeClass('cur');
			$(this).removeClass('tmp').addClass('cur');	
			var delta = curn - cur;
			if(delta > 0){
				$Fade.animate({left:'-'+(delta*Width)+'px'},'normal',function(){
					for(i=0;i<delta;i++){
						$Fade.find("li:first").appendTo($Fade);
					}
					$Fade.css('left','0px');
				});
			}else{
				for(i=0;i<(-delta);i++){
					$Fade.find("li:last").prependTo($Fade);
				}
				$Fade.css('left',delta*Width+'px');
				$Fade.animate({left:'0px'},'normal');
			}
			j = curn + 1;
			Timer = setInterval(player,4000);
		});
	});
	//播放函数
	function player(){	
		$Fade.animate({left:'-'+Width+'px'},'slow',function(){
			$Fade.css('left','0px').find("li:first").appendTo($Fade);
			index = j%num;
			$Fpage.children("li.cur").removeClass('cur');
			$li.eq(index).addClass('cur');
			j++;	
		});	
	}
});

//搜索框
$(function(){
	var $srhInput = $(".search-box .input"),
		$laBel = $srhInput.prev("label");
	if($srhInput.val()!=""){
		$laBel.hide();
	};
	$srhInput.focus(function() {
		$(this).addClass('focus');
		$laBel.hide();
	});
	$srhInput.blur(function() {
		$(this).removeClass('focus');
	   if($(this).val()==""){
		   $laBel.show();
	   }
	});
});	

//大事记点击
$(function(){
	$(".events-list").slideDown(2000);
	$(".events-list li .year").each(function() {
		var $dt = $(this).parent("dt"),
			$dds = $dt.siblings("dd");
		$(this).live("click",function(){
			$dt.toggleClass('cur');
			$dds.slideToggle(500);
		});
	});
});	

//论坛观点切换
$(function(){
	$(".reports").each(function() {
		 $(this).find(".blk-title").live("click",function(){
			 var index = $(this).parent().children(".blk-title").index(this);
			$(this).siblings(".blk-title").removeClass('cur');
			$(this).addClass('cur');
			$(this).parent().find(".more").hide().eq(index).show();
			$(this).parents(".reports").find("ul").hide().eq(index).show();
		});
	});
});	

//会议日程切换
$(function(){
	$(".sched-tabs").each(function() {
		 $(this).find("a").live("click",function(){
			 var index = $(this).parent().children("a").index(this);
			$(this).siblings("a").removeClass('cur');
			$(this).addClass('cur');
			$(this).parents(".blk-bd").find(".sched-list").hide().eq(index).show();
		});
	});
});		

//左右点击按钮滚动
$(function(){
	var Wid;
	$(".scroll-list").each(function() {
		var n = 5,					//n为一次滚动的个数
			$solList = $(this),
			$box = $(this).parents(".block"),
			$Ul = $(this).children("ul"),
			Len = $Ul.children("li").length,
			left = parseInt($Ul.css("left"));
		Wid = $(this).width();
		var width = Wid*0.17;
		$(this).find("li").css({"width":Wid*0.19, "margin-right":Wid*0.015});
		$(window).resize(function(){
			Wid = $solList.width();
			$solList.find("li").css({"width":Wid*0.19, "margin-right":Wid*0.015});
			$Ul.animate({left:0});
		});
		$box.find(".prev").click(function() {
			width = Wid*0.19+Wid*0.015;
			left=parseInt(left)+n*width;
			if(left > 0){
				left = 0;
			}
			$Ul.stop(true).animate({left:left});
		});
		$box.find(".next").click(function() {
			width = Wid*0.19+Wid*0.015;
			left -= n*width;
			if(left < -width*(Len-5)){ //7为显示的个数
				left = -width*(Len-5);
			};
			$Ul.stop(true).animate({left:left});
		});
	});
});

//创新奖页面新闻tabs
$(function(){		
	$(".news-hd li").live("click",function(){
		$(this).addClass('cur').siblings("li").removeClass('cur');
	});
});
$(function(){
	$(".news-tabs dd").live("hover",function(){
		var index = $(this).parent().children("dd").index(this);
		$(this).addClass('cur').siblings("dd").removeClass('cur');
		$(this).parents(".news-bd").find(".news-cot").hide().eq(index).show();
	});
});

// first last 
$(document).ready(function(){    
   $(".list_line li:first").addClass("first");  
   $(".list_line2 li:first").addClass("first");  
});
	
	
//下拉菜单
$(function(){
	$(".dropdownmenu-p").hover(function(){
		$(this).find(".dropdownmenu-sub").show();  
	},function(){  
		$(this).find(".dropdownmenu-sub").hide();  
	})
});		