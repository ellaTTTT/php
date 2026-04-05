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
            'flag' => '🇩🇪',
            'topics' => [
                'Introduction to German Alphabet and Sound',
                'Basic Greetings and Parewells',
                'Numbers and Counting',
                'Common Verbs and Basic Sentence Structures',
                'Asking and Giving Directions',
                'Food and Dining Vocabulary',
                'Basic Grammar Rules: Articles and Cases'
            ]
        ],
        [
            'title' => 'French for beginners',
            'desc' => 'Master fundamental Frech skills including basic vocabulary and conversation techniques.',
            'flag' => '🇫🇷',
            'topics' => [
                'Basic of French Prounciation',
                'Introducing Yourself and Others',
                'Numbers, Time, and Dates',
                'Everyday Phrases for General Conversations',
                'Basic French Grammar: Subject-Verb Agreement',
                'Travel-Related Vocabulary and Phrases',
                'Food, Drinks, and Dinning Out',
                'Clothing and Shopping Vocabulary'
            ]
        ],
        [
            'title' => 'Spanish for beginners',
            'desc' => 'Acquire essential Spanish vocabulary and gain proficiency in daily conversation.',
            'flag' => '🇪🇸',
            'topics' => [
                'Spanish Alphabets and Sounds',
                'Basic Greetings and Introductions',
                'Numbers and Basic Mathematics',
                'Essential Phrases for Everyday Use',
                'Common Verbs and Their Conjugations',
                'Navigational Vocabulary and Ordering at a Restaurant',
                'Understanding Gender and Articles in Spanish'
            ],
        ],
        [
            'title' => 'Chinese for Beginners',
            'desc' => 'Learn essential Mandarin Chinese vocabulary and basic conversational skills.',
            'flag' => '🇨🇳',
            'topics' => []
        ]
    ];

?></pre>
<?php foreach($courses AS $course): ?>
    <details>
        <summary><?php echo e($course['flag']); ?> <?php echo e($course['title']); ?></summary>
        <p><?php echo e($course['desc']); ?></p>
        <?php if(!empty($course['topics'])): ?>
            <ul>
                <?php foreach($course['topics'] AS $topic): ?>
                    <li><?php echo e($topic); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </details>    
<?php endforeach; ?>
</body>
</html>