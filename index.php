<?php
	$URL=$_GET["u"];
	$TITLE=$_GET["t"];
	$THUMB=$_GET["i"];
?>
<!DOCTYPE html>
<html>
<head>
<title><?=$TITLE?></title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link href='//fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic-ext,greek-ext,latin-ext' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js"></script>
<script src="script.php?u=<?=urlencode(urldecode($URL))?>&t=<?=urlencode(urldecode($TITLE))?>&i=<?=urlencode(urldecode($THUMB))?>"></script>
</head>
<body>
	<div id="main_video">
		<div class="imageSub"> <!-- Put Your Image Width -->
			<div class="blackbg" id="playerstatebg">IDLE</div>
			<div class=label id="playerstate">IDLE</div>
			<img src="<?=$THUMB?>" id="video_image">
			<div id="video_image_overlay"></div>
			<video id="video_element"></video>
		</div>
		<div id="media_control">
			<div id="play"></div>
			<div id="pause"></div>
			<div id="progress_bg"></div>
			<div id="progress"></div>
			<div id="progress_indicator"></div>
			<div id="fullscreen_expand"></div>
			<div id="fullscreen_collapse"></div>
			<div id="casticonactive"></div>
			<div id="casticonidle"></div>
			<div id="audio_bg"></div>
			<div id="audio_bg_track"></div>
			<div id="audio_indicator"></div>
			<div id="audio_bg_level"></div>
			<div id="audio_on"></div>
			<div id="audio_off"></div>
			<div id="duration">00:00:00</div>
		</div>
	</div>
	<script type="text/javascript">
		var castPlayer = new CastPlayer();
	</script>
</body>
</html>
