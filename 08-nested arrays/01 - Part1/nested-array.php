<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body><pre><?php  
    // $courses = [
    //     'German for beginners',
    //     'French for beginners',
    //     'Spanish for beginners'
    // ];
    // $coursesDoc = [
    //     'Learning basic German vocabulary, grammer, and everyday phrases.',
    //     'Master fundamental Frech skills including basic vocabulary and conversation technique.',
    //     'Acquire essential Spanish vocabulary and gain proficiency in daily conversation.'
    // ];
    // $coursesFlags = [
    //     '🇩🇪',
    //     '🇫🇷',
    //     ''
    // ];

    $courses = [
        [
            'title' => 'German for Beginners',
            'desc' => 'Learning basic German vocabulary, grammer, and everyday phrases.',
            'flag' => '🇩🇪'
        ],
        [
            'title' => 'French for beginners',
            'desc' => 'Master fundamental Frech skills including basic vocabulary and conversation techniques.',
            'flag' => '🇫🇷'
        ],
        [
            'title' => 'Spanish for beginners',
            'desc' => 'Acquire essential Spanish vocabulary and gain proficiency in daily conversation.',
            'flag' => '🇪🇸'
        ]
    ];
    var_dump($courses[1]['title']);
    var_dump($courses[1]['flag']);
    $spanishCourse = $courses[2];
    var_dump($spanishCourse);
?></pre>    
</body>
</html>