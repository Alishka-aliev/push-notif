<?php 
require_once __DIR__."/vendor/autoload.php";
//$db = new \App\Db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="manifest" href="manifest.json">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="view/js/push.js"></script>
</head>
<body>
<a href="#"  onclick="SendPushMe();return false">Вызвать SendPushMe</a>
</body>
</html>
