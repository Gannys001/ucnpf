
var bool = true;

 function thisMovie(movieName) 
 {
	 if (navigator.appName.indexOf("Microsoft") != -1) 
	 {
		 return window[movieName];
	 } 
	 else 
	 {
		 return document[movieName];
	 }
 }
 function stopPlayer() 
 {
	 thisMovie("mp3player").stopPlayback();
 }
 function startPlayer() 
 {
	 thisMovie("mp3player").startPlayback();
 }

 function toggleSound() 
 {
	 bool = !bool
	 thisMovie("mp3player").setSoundMute(bool);
	 $("#toggleMuteButton").attr("value", (bool)? "MUTE" : "UNMUTE");
 }
 
 function getSoundMute() 
 {
	 return bool;
 }
 function setSoundMute(value) 
 {
	 $("#toggleMuteButton").attr("value", (value)? "MUTE" : "UNMUTE");
	 bool = value;
 }
 
 //
 
 var min = 5;
  var max = 10000;
  var rand =  Math.round(Math.random() * (max - min)) + min;



var params = { 		allowScriptAccess: "sameDomain", 
					allowFullScreen: "true", 
					bgcolor: "#ffffff", 
					menu: "false", 
					quality: "high", 
					wmode: "opaque"
				};
var flashvars = {	prm_audiofile: "../player/mp3/the_glory_of_asia_pacific.mp3",	
					prm_language: 'com',
					prm_country:'en'
				};
					
swfobject.embedSWF(	"../player/audioplayer.swf?no-cache=" + rand , 
					'mp3player', 
					'226px', '20px', 
					'9.0.0', 
					false, 
					flashvars, 
					params, 
					false
					);
	   