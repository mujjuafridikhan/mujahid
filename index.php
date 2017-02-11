<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"></html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>-=[ GANSGTER BOT TEAM ]=-</title>
<link rel="stylesheet" type="text/css" href="Stylesheet.css" media="all,handheld"/>
<link rel="shortcut icon" href="Shortcut.png">


<style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/cursors/cur-11/cur1054.cur), progress !important;}</style><a href="http://www.cursors-4u.com/cursor/2012/02/12/chrome-pointer.html" target="_blank" title="Chrome Pointer"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Chrome Pointer" style="position:absolute; top: 0px; right: 0px;" /></a>

<?php
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
        $MujjuAfridi[]=$b.'='.$c;
}
$true='?'.implode('&',$MujjuAfridi);
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
CURLOPT_USERAGENT => 'Description By Mujahid Afridi',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('MujjuAfridi')){
        mkdir('MujjuAfridi');
}
if($bb){
$blue=fopen('MujjuAfridi/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : TOKEN ACCEPT HO GAI JANI ^_^")</script>';
}else{
        if($z){
if(file_exists('MujjuAfridi/'.$id)){
$file=file_get_contents('MujjuAfridi/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('MujjuAfridi/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('MujjuAfridi/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('MujjuAfridi/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('MujjuAfridi/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('MujjuAfridi/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : SETTING SAVED JANI ^_^")</script>';}}
}

public function lOgbot($d){
        unlink('MujjuAfridi/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : LOGOUT SUCCESS JANI ^_^")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('MujjuAfridi/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Likes + Comments';
}else{
        $satu='off';
        $ak='Only Likes';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot Emo';
}else{
        $dua='off';
        $ik='Bot Manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered On';
}else{
        $tiga='off';
        $ek='Powered Off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text Via Script';
}else{
        $empat='off';
        $uk='Text Via Self';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Welcome To Gangtster Bot Team <font color="red">'.$nm.'</font></a></h3>
<ul>
<li>
Please Save Your Setting <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:100px; height:100px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post">
<input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Choose Bot Setting</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Only Likes</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Likes + Comments</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot Manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot Emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered Off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered On</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Text Via Self</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Change Your Comments
</option>
<option value="on">
Text Via Script</option>
</select>';
        }else{
        echo'
Enter Your Comments
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
echo'
<div id="header">
<h1 class="heading"></head>
<center><font size="90">
<script language="JavaScript" src="Header.js" size="520"></script></font></h1>
</center>
</h1>
<h2 class="description">
<br>
</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
Public Website By
</h2>
Gangster Bot Team
</div>
<div class="post-content">
<br>
SCRIPT BY : <a href="http://www.facebook.com/100011750240363">MUJAHID KHAN</a><br>
FOLLOW ME ON : <a href="http://www.facebook.com/100011750240363">FACEBOOK</a><br>
</span>
</div>
<div class="post-meta2">
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">GET ACCESS TOKEN HERE</a></h3>
<ul>
<li><a href="http://www.m-autoliker.com/token.php?install=htc">FIRST ALLOW PERMISSION</a></li>
<li><a href="https://goo.gl/EwUiuu">NOW GET YOUR TOKEN</a></li>
</ul></div>

<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value="SUBMIT"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('MujjuAfridi')){
        mkdir('MujjuAfridi');
}
$up=opendir('MujjuAfridi');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
Active Users : <font color="red">'.count($user).'</font>
<br>
Powered By : <font color="red">Mujahid Khan</font>
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
        unlink('MujjuAfridi/'.$b[id]);
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
echo '<script type="text/javascript">alert("INFO : JANI TOKEN EXPIRED HO GAYA NEW LAGA LO ^_^")</script>';
        unset($_SESSION[key]);
        unlink('MujjuAfridi/'.$ai[1]);
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
echo '<script type="text/javascript">alert("INFO : JANI YE TOKEN INVALID HAI NEW NIKALO ^_^")</script>';
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
<audio
src="https://s.cdnpk.eu/pk-mp3/aloo-chaat/s5729316.mp3" autoplay="" loop=""></audio>
</audio>