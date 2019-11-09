<?php

session_start();
$login_code="";
$logo_code="<div class='logo'>Pm</div>";

if(isset($_SESSION['user_id']))
  $login_code = "<div class='login-box'>".$_SESSION['user_id']."</div>";

$html="<header>".$logo_code.$login_code."</header>";

echo $html;
 ?>
