<?PHP
   if($_SERVER["HTTPS"] != "on")
   {
       header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
       exit();
   }
?>
<!DOCTYPE html>
<!--
this website is open source
https://github.com/mythical/andromeda/
bad code but don't steal without credit
-->
<html>
<head>
	<meta charset="utf-16">
	<link href="https://i.imgur.com/jcILMnV.png" rel="icon" type="image/ico">
	<link href="media/styles.css" rel="stylesheet">
	<link href="media/animate.css" rel="stylesheet">
	<title>andromeda</title>
</head>
<body>
	<script type="text/javascript">
	      var imgCount = 4;
	      var dir = 'media/';
	      var random_count = Math.round(Math.random() * (imgCount - 1)) + 1;
	      var images = new Array
	              images[1] = "img1.gif",
	              images[2] = "img2.gif",
	              images[3] = "img3.gif",
	              images[4] = "img4.gif",
	      document.body.style.backgroundImage = "url(" + dir + images[random_count] + ")";
	</script>
	<div class="center">
		<a href="#"><img src="media/andromeda.png"></a>
		<div class="centersms">
			<a href="https://twitter.com/" target="_blank">twitter/</a>
			<a href="https://instagram.com/" target="_blank">instagram/</a>
			<a href="https://kik.me/atlantis" target="_blank">kik.me/atlantis</a>
			<a href="https://steamcommunity.com/profiles/76561198405760708" target="_blank">steamcommunity.com/id/culture</a>
			<a href="https://soundcloud.com/mythical" target="_blank">soundcloud.com/mythical</a>
			<a href="https://www.youtube.com/channel/UCROOu8LGfue6600x6CBCt8Q?v=" target="_blank">youtube.com/..</a>
		</div>
	</div>
	<audio autoplay="" id="audio" loop=""> 
	<script>
	               var audioArray = ["ihateyoubutiloveyou.mp3", "coldhartspyro.mp3", "frzzn20.mp3", "vsAIngel.mp3"];
	               
	               var rand = Math.floor(Math.random() * audioArray.length);
	               var audio = document.getElementById('audio');
	               var dir = 'media/music/';
	               
	               audio.src = dir + audioArray[rand];
				   audio.preload = true;
	               audio.volume = 0.8;
	               audio.play();
	               
	               audio.addEventListener("ended", playNextSound, false);
	               
	               function playNextSound(){
	               rand = rand + 1;
	               if (rand == audioArray.length){
	               rand = 0;
	               }
	               audio.src = dir + audioArray[rand];
	               audio.play();
	               }
	</script></audio>
</body>
</html>
