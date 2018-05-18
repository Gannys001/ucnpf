$(document).ready(function() {
			$("#featuredvideoimg").hover(
				function (){
					 $(this).attr("src","../images/shared/featured_video.jpg");	
				 },
				 
				 function (){
					 $(this).attr("src","../images/shared/featured_video_normal.jpg");
				 
				 }
			 
			 );
			 
		});