<?php
    $quiz_questions = [
        [
            "question" => "What kind of scenery do you prefer?",
            "options" => ["Beaches", "Mountains", "Cityscapes", "Forests"]
        ],
        [
            "question" => "What's your ideal pace of travel?",
            "options" => ["Relaxing and slow", "Action-packed and busy", "A mix of both"]
        ],
        [
            "question" => "What's your preferred type of activity?",
            "options" => ["Cultural exploration", "Outdoor adventures", "Food and nightlife", "Shopping"]
        ],
        [
            "question" => "What's your budget like?",
            "options" => ["Budget-friendly", "Mid-range", "Luxury"]
        ],
        [
            "question" => "Which season do you prefer to travel in?",
            "options" => ["Spring", "Summer", "Autumn", "Winter"]
        ],
        [
            "question" => "What kind of climate are you most comfortable in?",
            "options" => ["Warm and sunny", "Cool and mild", "Cold and snowy", "Tropical"]
        ],
        [
            "question" => "Are you looking for a solo trip, a romantic getaway, or a family vacation?",
            "options" => ["Solo", "Romantic", "Family", "Group of friends"]
        ]
    ];

    header('Content-Type: application/json');
    echo json_encode($quiz_questions);
?>
