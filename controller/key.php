<?php
$keyassign = 'Bazar@@!!';
$iurl = '../index.html';
$rurl = '../views/suscribed.html';

$key = $_POST['password'];

if ($key === $keyassign) {
  Redirect($rurl, false);
} else {
  Redirect($iurl,false);
}

function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}


?>
