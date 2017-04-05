<?php

// Nels by K.
// Copyright (c) 2017.

error_reporting(0);

session_start();
function SacarIP() {
 if($_SERVER) {
 if($_SERVER["HTTP_X_FORWARDED_FOR"]) {
  realif = $_SERVER
