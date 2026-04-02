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
    require_once __DIR__ . '/inc/functions.inc.php';
    $text = "PHP,short for \"Hypertext Preprocessor,\" is a server-side scripting language first introduced in 1994 by Rasmus Lerdorf. Distributed under a permissive license, PHP is open-source, allowing both personal and commercial use at no cost. It's a cross-platform language, compatible with various server operating systems like Linux, Windows, and macOS, making it highly versatile. The language boasts a large and supportive community, offering an extensive range of libraries, frameworks, and online resources, which has made it a staple for developing dynamic websites and web applications. One of its significant advantages is its seamless integration with relational databases such as MySQL.\nPHP is designed with a syntax that many find usser-friendly, although the ease of learning can be subjective and vary from person to person. The language allows for efficient coding; tasks like outputting text can be performed with simple commands like echo. Variables are easily declared, and PHP offers a comprehensive set of control structures, including conditional statements and loops, providing a balance between simplicity and functionality.\nWhile PHP is most...";
    var_dump(nl2br("PHP\nis amazing!"));
    var_dump(str_replace('?', '~', 'How are you???'));
    var_dump(str_replace(['?', 'are'], ['~', 'were'], 'How are you?'));
?></pre>
<p><?php echo nl2br(e("PHP\nis amazing!"));?></p>
<p><?php echo nl2br(e($text));?></p>
<p>
    <?php echo str_replace("\n", "</p><p>", e($text));?>
</p>
</body>
</html>