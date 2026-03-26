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
        var_dump($_GET); 
        var_dump($_POST); 
        // var_dump($_UPDATE);
    ?></pre>

        <form action="form.php" method="POST">
            <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" />
            <input type="password" name="password" />
            <input type="submit" value="Login!" />
        </form>

</body>
</html>