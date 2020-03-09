<?php
session_start();
//header('Cache-control: private'); // IE 6 FIX

//error_reporting(-1);

if(isset($_GET['lang']))
{
$LANG = $_GET['lang'];

$_SESSION['lang'] = $LANG;

setcookie('lang', $LANG, time() + (3600 * 24 * 30));
}
else if(isset($_SESSION['lang']))
{
$LANG = $_SESSION['lang'];
}
else if(isset($_COOKIE['lang']))
{
$LANG = $_COOKIE['lang'];
}
else
{
$LANG = 'zh';
}
$_SESSION['lang'] = $LANG;

include_once 'lang.' . $LANG . '.php';
?>
