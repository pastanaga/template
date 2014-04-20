<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
function judul(){
echo "<h1 align=center>muhammad fajar pratama<br>
10110203
<h1>";
}

function bawah(){
echo "<h5 align=center>muhammad fajar pratama<br>
10110203<br>
2014<h5>";
}

function rss(){
echo "<iframe src='http://rss.detik.com/index.php/sport ' width='100%' frameborder='0 scrolling='no'></iframe>";
}

function kutipan(){
echo "<iframe src=' http://quotes4all.net/quotes.html' width='100%' frameborder='0 scrolling='no'></iframe>";
}

function kanan(){
rss();
echo "<br><br>";
kutipan();
}

function info_client(){
$ip = $_SERVER['REMOTE_ADDR'];
echo "<br>Your hostname : $ip" ;
}

function tabel_login(){


echo "<form method='GET' name='form_login' action='index.php'>
        <table width='10%' border='1'>
        <td colspan='2' align='center'>LOGIN USER</td></tr>
        <tr>
		
        <td>username</td><td><input type='text' name='username'></td>
        </tr>
        <tr>
        <td>password</td><td><input type='password' name='pwd'></td>
        </tr>
        <tr>
        <td colspan='2' align='center'><input type='submit' value='login' name='login'></td>
        </tr>
        </table></form>
        <br><br><br><br><br><br><br><br><br><br>";
        $_SESSION['username'] = "fajar";
		}
		
function info_user(){

$username = $_GET['username'];
$pass = $_GET['pwd'];
$_SESSION['username'] = "fajar";
echo "<fieldset><legend><h4> selamat datang $username </h4</legend></fieldset><br>";
}

function proses_login(){
session_start();
$username = $_GET['username'];
$pass = $_GET['pwd'];
$_SESSION['username'] = "fajar";
 if (($username=="fajar")&&($pass=="10110203")){
info_user();
}else {
tabel_login();
}
}

function get_client_ip() {
    $browser = $_SERVER['HTTP_USER_AGENT'];
	$ip = $_SERVER['REMOTE_ADDR'];
	echo "ip address anda adalah : $ip <br>
	dan browser anda adalah : $browser";
}



		
?>