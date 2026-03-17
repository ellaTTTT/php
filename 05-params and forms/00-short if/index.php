<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        $name = 'Joh';
        if($name === 'John') echo 'The name is: ' . $name . '.';
        else echo 'The name is not John.';

        $text = ($name === 'John' ? 'The name is :John' : 'The name is not John');
        echo $text;

        $array = [
            'ABC',
            ($name === 'John' ? 'I\'m John' : 'I am not John.'),
        ];
        var_dump($array);
    ?>
</body>
</html>