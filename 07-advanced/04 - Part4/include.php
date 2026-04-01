<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
<pre><?php 
    // old version to get foldername.
    var_dump(dirname(__FILE__));
    include dirname(__FILE__) . 'inc/a.php';
    //nowadays version
    var_dump(__DIR__ . './inc/a.php'); //to find abs path where the folder is.
    include __DIR__.'/inc/a.php';
    // include 'inc/a.php';
?></pre>
</body>
</html>