<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

    foreach (array_slice(scandir(__DIR__),2) as $f){
        if($f!='index.php') {
            echo '<br>';
            echo "<a href=\"http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] . "$f\">$f</a>";
            echo '<br>';
        }
    }
?>

</body>
</html>