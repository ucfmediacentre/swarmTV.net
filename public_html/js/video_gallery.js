$(document).ready(function() {
  
	// Set up link thumbnails
	$('a.videoLink').each(function(){
		
		var thumbnailFilePath = 'http:/assets/videoposters/' + $(this).attr('videofile') + '.jpg';
		var videoCaption = unescape($(this).attr('videocaption'));
		$(this).css('background-image', 'url('+thumbnailFilePath+')');
		$(this).css('background-repeat', 'no-repeat');
		$(this).css('background-position', 'center');
		$(this).html('<div class="caption">'+videoCaption+'</div><img class="play" src="http:/img/play_icon.png" />');
		var fancyWidth=eval($(this).attr('videowidth'))+26;
		var fancyHeight=eval($(this).attr('videoheight'))+82;
		
		var URLString = 'http:/index.php/clip/play/';
		URLString = URLString+$(this).parent().attr('id')+'/';
		URLString = URLString+fancyWidth+'/';
		URLString = URLString+fancyHeight;
		$(this).attr('href', URLString);
		$(this).attr('target','fancybox-frame');
		
		$(this).addClass('iframe');
	});
	
	$('.videolink').click(function(){
		var videoFile = $(this).attr('videofile');
		var videoPoster = $(this).attr('videofile');
		var videoWidth = Number($(this).attr('videowidth'));
		var videoHeight = Number($(this).attr('videoheight'));
		
		var videocode = '<video width="'+videoWidth+'" height="'+videoHeight+'" controls autoplay autobuffer><source src="video/'+videoFile+'.ogv" type="video/ogg" /><source src="video/'+videoFile+'.mp4" type="video/mp4" /><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="'+videoWidth+'" height="'+(videoHeight+40)+'" id="video_player" align="middle"><param name="allowScriptAccess" value="sameDomain"><param name="allowFullScreen" value="true"><param name="movie" value="http:/video_player.swf?videoFile=video/'+videoFile+'.mp4&amp;skinFile=http:/video_skin.swf&amp;videoFileWidth='+videoWidth+'&amp;videoFileHeight='+videoHeight+'"><param name="quality" value="high"><param name="wmode" value="transparent"><param name="scale" value="noscale"><param name="salign" value="lt"><embed src="http:/video_player.swf?videoFile=video/'+videoFile+'.mp4&amp;skinFile=http:/video_skin.swf&amp;videoFileWidth='+videoWidth+'&amp;videoFileHeight='+videoHeight+'" quality="high" width="'+videoWidth+'" height="'+(videoHeight+40)+'" name="video_player" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" scale="noscale" salign="lt" wmode="transparent" allowfullscreen="true" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed></object></video>'
		
		$('#videoPlayer').html(videoCode);
		
		$.fancybox({
			'transitionIn' : 'fade',
			'transitionOut' : 'fade',
			'overlayColor' : '#000',
			'overlayOpacity' : '.6',
			'href' : '#videoPlayer'
		});

	});
	
	$('a.sequenceLink').addClass('iframe');

	$('a.sequenceLink').each(function(){
		//var parameters = $(this).attr('href').split("/");
		//codeigniter parameters for width and height
		//var numOfParas = parameters.length;
		//var dWidth  = parseInt(parameters[numOfParas-2]);
		//var dHeight     =  parseInt(parameters[numOfParas-1]);  
		$(this).fancybox({  
			'width':640,  
			'height':480, 
			'padding':0,
			'autoScale'         : false,  
			'transitionIn'		: 'fade',
			'transitionOut'		: 'fade',
			'overlayColor'		: '#000',
			'overlayOpacity'	: '.6',
			'type'          : 'iframe',  
			'onClosed'	:	function() {
			  window.location.href=window.location.href;
			  //restoreZIndex();
			}  
		});  
	});

});

