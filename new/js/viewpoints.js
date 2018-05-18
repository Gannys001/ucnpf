$(document).ready(function() {
			$("#lumbinivideo").hover(
				function (){
					 $(this).attr("src","../images/focus_videos/lumbini_middle_preview.jpg");	
				 },
				 
				 function (){
					 $(this).attr("src","../images/focus_videos/lumbini_middle_preview_normal.jpg");
				 
				 }
			 
			 );
			 
			 $("#buddist_heritage_video").hover(
				function (){
				    $(this).attr("src", "../images/focus_videos/20140403_ocean_small.jpg");
				 },
				 
				 function (){
				     $(this).attr("src", "../images/focus_videos/20140403_ocean_small_normal.jpg");
				 
				 }
			 
			 );
			 
			 $("#buddist_conference_video").hover(
				function (){
					 $(this).attr("src","../images/focus_videos/buddist_conference_small_preview.jpg");	
				 },
				 
				 function (){
					 $(this).attr("src","../images/focus_videos/buddist_conference_small_preview_normal.jpg");
				 
				 }
			 
			 );
			 
		});