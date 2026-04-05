<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body><pre><?php  
    function e($value) {
        return htmlspecialchars($value);
    }
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
    
    foreach($courses AS $course) {
        var_dump($course['title']);
        var_dump($course['desc']);
        var_dump($course['flag']);
    }
    foreach($courses[2] AS $value) {
        var_dump($value);
    }
?></pre>
<?php foreach($courses AS $course): ?>
    <details>
        <summary><?php echo e($course['flag']); ?> <?php echo e($course['title']); ?></summary>
        <p><?php echo e($course['desc']); ?></p>
    </details>    
<?php endforeach; ?>
</body>
</html>