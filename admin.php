<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 13.01.17
 * Time: 23:53
 */
error_reporting(E_ALL);
ini_set('display_errors',1);
require_once __DIR__ . "/vendor/autoload.php";

$route = new  \App\Route();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="manifest" href="manifest.json">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="view/js/semantic.js"></script>
    <link type="text/css" rel="stylesheet" href="view/css/semantic.css">

</head>
<body>
<?php echo $route->content()?>


</body>
</html>


