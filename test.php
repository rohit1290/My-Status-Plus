<?php
try {
$facebook = new Facebook(FB_APIKEY, FB_SECRET);
$facebook->api_client->session_key = FB_SESSION;
$fetch = array('friends' =>
array('pattern' => '.*',
'query' => 'select uid2 from friend where uid1={$user}'));

$message = 'Hello There ...';
if ($facebook->api_client->stream_publish($message)) //149th line
echo 'message posted successfully';
} catch(Exception $e) {
echo $e . '<br />';
}

$facebook->api('/me/feed','post',$params);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>My Status Plus</title>
<META name="Description" content="My Status Plus is a special app developed for updating your facebook status via diffrent host like Xbox, Iphone, Moon and many more.">
<META name="Keywords" content="My Status Plus, Facebook, Status, Update, Host, App, Rohit Gupta, TechBytes with Rohit">
<meta name="txtweb-appkey" content="e488e846-50e7-4b46-bce8-7a13e9b7d781" />
        
<style>
a {text-decoration:none; color:blue;}
a:hover {text-decoration:none; color:darkblue;}
</style>
</head>
<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
FB.init({
appId : '147518928661663',
status : true, // check login status
cookie : true, // enable cookies to allow the server to access the session
xfbml : true // parse XFBML
});
</script>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=147518928661663";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<center>
<div style="width:700px; float:center">
<center>
<table width="500px" align="center">
<tr valign="middle">
<td align="center"><img src="logo.gif"></td>
<td align="left"><h1>My Status Plus </h1></td>
</tr>
</table>
</center>
<div style="width:500px; float:left;">
<div>
<div>
<font size="2"><i>Hey Guys, Here is a trick to fool your friends to update your fb status via diffrent Host. You Just have to clcik on the Host name and a samll pop up box will appear where you will be asked to update your status for your wall. Thats It. As simple as that.</i></font>
<br><br><font size="2.5">CHOOSE YOUR HOST</font>
<br><br>
<form>
<table width="500">
<tr>
<td width="170px">
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=249284985083592&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Skynet</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=337320039647933&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Bppimt</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=2254487659&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Blackberry</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=38125372145&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Sony Ericsson</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=5747726667&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Xbox LIVE</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=112930718741625&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">iPad</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=132386310127809&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Your Moms Computer</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=235703126457431&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Nintendo Ent. System</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=180700501993189&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Gameboy Color</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=7081486362&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Palm </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=21810043296&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Sidekick </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=86734274142&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Foursquare</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=140881489259157&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Telegram </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=130263630347328&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Carrier Pigeon </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=134929696530963&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Morse Code </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=138114659547999&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Commodore 64 </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=134998549862981&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">TRS-80 </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=129904140378622&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">K.I.T.T. </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=110455835670222&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">EyePhone </input><br>
</td>
<td  width="170px">
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=a4c9fb1708a848c2241674531176209b&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Strawberry</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=221826277855257&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">The moon</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=eea90d40e1d12565695dbbbdbd5e965b&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Dr. Pepper</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=243870508973644&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Nintendo wii</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=250335888312118&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Alcohol</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=218791271497130&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Cheese</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=142039005875499&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">iPod Nano</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=236264753062118&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Nintendo 64</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=220593361311050&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Linux Ubuntu</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=203192803063920&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Toaster </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=242740155751069&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">MS Excel </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=230755826955133&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Lamp </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=127926427295267&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">A potato </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=eb4c6d1a60e19a7795da501e1f468035&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Vibrator </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=170318539700306&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Sperm Whale </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=185103391549701&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Pogo Stick </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=1477a4cd29ec724a3de19be5d26e0389&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Banana Phone </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=134138923334682&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Smoke Signal </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=de3da265cf6976745bb1d60a8c198151&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Pokedex </input><br>
</td>
<td  width="170px">
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=31d608d30292175bf7703149699ccb39&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Nasa Satellite</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=174811032586879&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">My Bedroom</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=170318539700306&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Sperm Whale</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=185103391549701&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Pogo Stick</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=4d8243dbb7064f88351fe6c809582320&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Google+</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=108372819220732&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">The Future</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=ea01a57edb26cf1de143f09d45cfa913&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Telepathy</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=b8ebeb983f45eaa0bd5f4f66cad97654&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Harry Potter</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=246126362083515&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">GLaDOS</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=250828364944350&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Refrigerator</input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=d3d554bf60297cb2c384e3d7cf5a066d&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Typewriter </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=200439256674396&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">TARDIS </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=142806259133078&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Pip Boy </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=1dc633368924b3b0b4d08e3f83230760&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Mind Control </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=224139600960217&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Telekinesis </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=115227201900831&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Post-It Note </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=185474028180003&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Ansible </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=228373497202865&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">W.O.P.R </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=123944137696757&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">Airwolf </input><br>
<input type="radio" name="select" onClick="window.open('http://www.facebook.com/connect/prompt_feed.php?preview=true&api_key=222345601140304&redirect_uri=http://strong-river-7114.herokuapp.com/sucess.php&display=touch','_new','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=520,height=250')">HMCS Belafonte </input><br>
</td>
</tr>
</table>
</form>
</div>

</div>
<div>
<p>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7403761385387096";
/* Facebook App */
google_ad_slot = "0068269581";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</p>
<table width="500px">
<tr valign="middle">
<td align="center"><div class="fb-like" data-href="http://facebook.com/TechBytes.KH" data-send="true" data-layout="button_count" data-width="100" data-show-faces="true"></div></td>
<td align="center"><div class="fb-like" data-href="http://apps.facebook.com/host-my-status/" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false" data-action="recommend"></div></td>
</tr>
<tr></tr>
</table>
<center>
<font size="3">Developed By <a href="http://www.facebook.com/happy.rohit" target="_blank">Rohit Gupta</a></font><br><br><iframe src="//www.facebook.com/plugins/subscribe.php?href=https%3A%2F%2Fwww.facebook.com%2Fhappy.rohit&amp;layout=button_count&amp;show_faces=false&amp;colorscheme=light&amp;font&amp;width=100&amp;appId=298832906879737" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px;" height="50" allowTransparency="true"></iframe>
</center>

</div>
<br>
<br><br>
</div>
<div style="width:200px; float:right;">
<br><br><br><br><br>
<script type="text/javascript">
google_ad_client = "pub-7403761385387096";
google_alternate_color = "ffffff";
google_ad_width = 120;
google_ad_height = 600;
google_ad_format = "120x600_as";
google_ad_type = "image";
google_color_border = "FFFFFF";
google_color_bg = "FFFFFF";
google_color_link = "000000";
google_color_text = "000000";
google_color_url = "000000";
google_ui_features = "rc:6";
</script><script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
</div>
</div>
</center>
</body>
</html>