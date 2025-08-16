<?php
  $cookie_name = "showSigil";
  $cookie_value = "true";

  if (!isset($_COOKIE[$cookie_name])) {
    $showSigil = "unset";
    $showSigilX = "I AM UNSET - COOKIE DO NOT EXIST";
    setcookie($cookie_name, $cookie_value, time() + 86400, "/"); // 86400 = 1 day
  } else {
    $showSigil = "set";
    $showSigilX = "I AM SET - COOKIE EXISTS";
  }