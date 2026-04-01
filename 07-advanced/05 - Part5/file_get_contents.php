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

    $text = file_get_contents(__DIR__ . '/inc/functions.inc.php'); //store data into a string, usually used to read text files.
    echo $text;
    readfile(__DIR__ . '/inc/functions.inc.php'); //output directly to the browser without buffering memories, usually used to read images. 

?></pre>
</body>
</html>