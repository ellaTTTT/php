<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body><pre><?php 
    $sum = 0;
    $number = 0;
    while($sum < 100) {
        $sum+=$number;
        $number++;
    }
    var_dump($number);
    var_dump($sum);
?></pre></body>
</html>