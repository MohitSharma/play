<?php
  $audios = '';
  $oursongs = '';
	$i = 0;
	foreach(glob('songs/*.*') as $file) {
     $audios .=  '<source src="' . $file . '" type="audio/mpeg" data-album="'. $file .'" data-artist="Mohit Sharma" data-image="http://192.168.1.195/xXx/TEAM%20B%20/IMG_20160817_141911.jpg"/>';
   	 $oursongs .= '<li class="bb-track" data-track="' . $i . '"><a href="javascript:void(0);">' . basename($file, '.mp3') . '</a></li>';
		 $i++;
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Mohit Sharma Presents</title>
    <link rel="stylesheet" href="css/msplayer-minimal.css"/>
		<link rel="stylesheet" href="css/main.css" /> <!-- This is a css file for this page, you can remove it-->
		<link rel="stylesheet" href="css/jquery.equalizer.css" />
  </head>
  <body>
		<section id="main_section">
					<div class="song1 equalizer"></div>
		 </section>
    <div class="bbplayer" style="float:left;width:100%;">
      <span class="bb-rewind"></span>
      <span class="bb-play"></span>
      <span class="bb-forward"></span>
      <div class="playerWindow">
        <div class="bb-track-display">
          <span class="bb-trackTime">--:--</span>
          <span class="bb-trackTitle">&nbsp;</span>
          <span class="bb-trackLength">--:--</span>
        </div>
        <div class="bb-album-display">
          <span class="bb-artist"></span> -
          <span class="bb-album"></span>
        </div>
      </div>
      <span class="bb-albumCover">&nbsp;</span>
      <audio loop id="song1">
				<?php print $audios; ?>
        HTML5 Audio Not Available
      </audio>
      <!--
      <div>Optional debug panel:</div>
      <div class="bb-debug"></div>
      -->
    </div>
		<div class="songslist" style="float:left;width:100%;">
			<ol>
				<?php print $oursongs; ?>
      </ol>
    </div>
    <script src="js/msplayer.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.reverseorder.js"></script>
		<script type="text/javascript" src="js/jquery.equalizer.js"></script>
		<script>
			$(document).ready(function(){
				$('#song1').equalizer({
					color: "#f2b400",
					color1: '#a94442',
					color2: '#f2b400'
				});
			});
		</script>
  </body>
</html>
