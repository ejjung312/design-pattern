<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

require_once("./NewsPaper.php");
require_once("./Reader.php");

$newspaper = new NewsPaper('Newyork Times');

$allen = new Reader('Allen');
$jim = new Reader('Jim');
$linda = new Reader('Linda');

// 구독자 추가
$newspaper->attach($allen);
$newspaper->attach($jim);
$newspaper->attach($linda);

// 구독자 삭제
$newspaper->detach($linda);

$newspaper->breakOutNews('USA break down!');