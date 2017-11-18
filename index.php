
<html>

<head>
	<title>
		From the North
	</title>
	<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<background>

</background>
<body>


	<div class="wrapper">
	<div
	class="efe"
	data-ff='[
		"img/bgwrath.png"
		
		
	]'
>  </div>
	
		<div class="text">Rekrutierung <a href="" target="_blank" style="color:#fff;text-decoration:none;cursor:default;">jetzt offen</a></div>
		
		
		
		<div class="register">	
			<div style="margin:0px auto;width:400px;margin-top:75px;display:inline-block;">
			<p id="success"></p>
			<form id="register" method="post">
			
				Name<br />
				<input type="text" placeholder="Username" autocomplete="off" name="username" id="username" required>
				Password<br />
				<input type="password" placeholder="Password" autocomplete="off" name="password" id="password" required>
				E-mail<br />
				<input type="email" placeholder="E-mail" autocomplete="off" name="email" id="email" required>
				Battletag?<br />
				<input type="text" placeholder="Battletag" autocomplete="off" name="Battletag" id="Battletag" required>
				Character Name ?<br />
				<input type="text" placeholder="Character Name" autocomplete="off" name="CharacterName" id="CharacterName" required>
				Alter, Geschlecht, Region ?<br />
				<input type="text" placeholder="?" autocomplete="off" name="AGR" id="AGR" required>
				Welche Klassen beherscht du ?<br />
				<input type="text" placeholder="?" autocomplete="off" name="Klassen" id="Klassen" required>
				Was sind für dich die optionalen Raidtage+Uhrzeiten?<br />
				<input type="text" placeholder="?" autocomplete="off" name="Raidtage" id="Raidtage" required>
				Was stellst du dir unter unserer Raidkoalition vor ?<br />
				<input type="text" placeholder="?" autocomplete="off" name="Raidkoalition" id="Raidkoalition" required>
				Seit wann spielst du World of Warcraft ?<br />
				<input type="text" placeholder="?" autocomplete="off" name="seitwann" id="seitwann" required>
				Raiderfahrungen ?<br />
				<input type="text" placeholder="?" autocomplete="off" name="Raiderfahrungen" id="Raiderfahrungen" required>
				Was ist dein lieblings - Bosskampf ? Und warum genau der Bosskampf?<br />
				<input type="text" placeholder="?" autocomplete="off" name="Bosskampf" id="Bosskampf" required>
				Bist du im Besitz eines funktionierenden Mikrofons ?<br />
				<input type="text" placeholder="?" autocomplete="off" name="Mikrofon" id="Mikrofon" required>
				DSL-Speedtest/Computer specs ?<br />
				<input type="text" placeholder="?" autocomplete="off" name="specs" id="specs" required>
				<input type="submit" style="display:none;">
			</form>
			<p><br />
			<br />
		    <br />
<br />
<br />
<br />
<br />
<br />
<br />
			</p>
			</div>
			</div>
			
			<div class="chat">

	</div>
	<form id="chat" method="post">
		<input type="text" autocomplete="off" id="cmsg" name="chat" required>
	</form> 
			
		</div>
		
		
	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript" >
	var auto_refresh = setInterval(
function() {
  var wtf    = $('.chat');
  var height = wtf[0].scrollHeight;
  wtf.scrollTop(height);
}, 500);
		var auto_refresh = setInterval(
function ()
{
$('.chat').load('chat.html').fadeIn("slow");
}, 200); // refresh every 10000 milliseconds
	      $(function () {
        $('#chat').bind('submit', function () {
          $.ajax({
            type: 'post',
            url: 'postchat.php',
            data: $('#chat').serialize(),
            success: function () {
            	document.getElementById('cmsg').value='';
            }
          });
          return false;
        });
      });
		$(document).ready(function(){
        $('#register').bind('submit', function () {
          $.ajax({
            type: 'post',
            url: 'postreg.php',
            data: $('#register').serialize(),
            success: function () {
            	$('#success').text("Successfully registered.Wir melden uns in Kürze.");
            	document.getElementById('username').value='';
            	document.getElementById('password').value='';
            	document.getElementById('email').value='';
				document.getElementById("Scream.mp3");


            }
          });
          return false;
        });
      });
      </script>
</body>

<body
<div
	class="test"
	data-slides='[
		"img/bg.jpg",
		"img/2bg.jpg",
		"img/3bg.jpg",
		"img/4bg.jpg",
		"img/5bg.jpg"
		
	]'
>  </div> <!-- /.primary -->
<script type="text/javascript" >
/*! slides | https://gist.github.com/mhulse/66bcbb7099bb4beae530 */
(function($) {
	
	'use strict';
	
	var $slides = $('[data-slides]');
	var images = $slides.data('slides');
	var count = images.length;
	var slideshow = function() {
		$slides
			.css('background-image', 'url("' + images[Math.floor(Math.random() * count)] + '")')
			.show(0, function() {
				setTimeout(slideshow, 5000);
			});
	};
	
	slideshow();
	
}(jQuery));
</script>
<script type="text/javascript" >
/*! slides | https://gist.github.com/mhulse/66bcbb7099bb4beae530 */
!function(t){"use strict";var a=t("[data-slides]"),s=a.data("slides"),e=s.length,n=function(){a.css("background-image",'url("'+s[Math.floor(Math.random()*e)]+'")').show(0,function(){setTimeout(n,5e3)})};n()}(jQuery);

</script>

</body>
<br />

<br />
<br />
<br />
<br />
<br />
<br />
<div class="text2">Webdesign Anfragen oder derweilige Anfragen bitte an from_the_north@freenet.de <a href="" target="_blank" style="color:#fff;text-decoration:none;cursor:default;"></a></div>
</html>