<?php

// Nels by K.
// @nels
// Copyright (c) 2017.

error_reporting(0);

session_start();
function SacarIP() {
 if($_SERVER) {
 if($_SERVER["HTTP_X_FORWARDED_FOR"]) {
  $realip = $_SERVER["HTTP_X_FORWARDED_FOR];
  } elseif ($_SERVER["HTTP_CLIENT_IP"]) {
  $realip = $_SERVER["HTTP_CLIENT_IP"];
  } else {
  $realip = $_SERVER["REMOTE_ADDR"];
  }
  } else {
  if (getenv("HTTP_X_FORWARDED_FOR")) {
  $realip = getenv("HTTP_X_FORWARDED_FOR");
  } elseif(getenv("HTTP_CLIENT_IP)) {
   $realip = getenv("HTTP_CLIENT_IP");
  } else {
   $realip = getenv("REMOTE_ADDR);
   }
   }
   return $realip;
   }
   $realip = SacarIP();
   define('USER_IP', $realip);
   define ( 'SEPARATOR', DIRECTORY_SEPARATOR );
   define ( 'DIR', __DIR__ );
   define ( 'WEB', true );
   define ( 'iSummer CMS', true );
   
   define( 'CHARSET', 'UTF-8' );
   header( 'Content-type: text/html; charset='.CHARSET );
   
   include( 'inc/class.core.php' );
   
   $utf = $db->query("SET NAMES 'utf8'");
   $TplClass->SetParam( 'error', '' );
   $TplClass->SetParam( 'NAME', NAME );
   $TplClass->SetParam( 'CMS', CMS );
   $TplClass->SetParam( 'PATH', PATH );
   $TplClass->SetParam( 'PATHR', PATHR );
   $TplClass->SetParam( 'PATHI', PATHI );
   $TplClass->SetParam( 'PATHCLIENT', PATHCLIENT );
   $TplClass->SetParam( 'CDN', CDN );
   $TplClass->SetParam( 'HK', HK );
   $TplClass->SetParam( 'FOOTER', FOOTER );
   $TplClass->SetParam( 'AVATARIMAGE', AVATARIMAGE );
   $TplClass->SetParam( 'FBPAGE', FBPAGE );
   
   ?>
   
