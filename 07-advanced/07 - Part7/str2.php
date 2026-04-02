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
    $text = "PHP,short for \"Hypertext Preprocessor,\" is a server-side scripting language first introduced in 1994 by Rasmus Lerdorf. Distributed under a permissive license, PHP is open-source, allowing both personal and commercial use at no cost. It's a cross-platform language, compatible with various server operating systems like Linux, Windows, and macOS, making it highly versatile. The language boasts a large and supportive community, offering an extensive range of libraries, frameworks, and online resources, which has made it a staple for developing dynamic websites and web applications. One of its significant advantages is its seamless integration with relational databases such as MySQL.";
    var_dump(strlen($text)); //get the length of $text. Emoji will be counted more than 1 character.
    var_dump(str_starts_with($text, "PHP")); //check if $text starts with "PHP". Need to satisfy upper letter.
    var_dump(str_ends_with($text, "PHP")); //check if $text ends with "PHP."
    var_dump(strtolower($text));
    var_dump(strtoupper($text));
    var_dump(ucfirst('hello')); //uppercase the first letter of string
    var_dump(trim('  Tom   Joe        .-', "-.")); //remove space or specific character in second parameter from the beginning and the end of string.
    var_dump(trim('  Tom   Joe    '));
    var_dump(rtrim('  Tom   Joe    ')); // remove right side space
    var_dump(ltrim('  Tom   Joe    ')); // remove left side space
    var_dump(strpos($text, 'PHP')); //return index from 'PHP'(upper letter) through $text
    var_dump(strpos($text, 'PHP', 1)); //return index from 'PHP' through $text, start with index 1
    var_dump(strpos($text, 'ella')); //return with boolean type
    var_dump(strpos($text, 'ella') === false);
?></pre>
</body>
</html>