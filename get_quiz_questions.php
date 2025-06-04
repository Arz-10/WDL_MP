<?php
$questions = [
    [
        "question" => "Do you enjoy historical landmarks?",
        "options" => ["Yes", "No"]
    ],
    [
        "question" => "Do you prefer mountains, beaches, or deserts?",
        "options" => ["Mountains", "Beaches", "Deserts"]
    ],
    [
        "question" => "Are you more interested in food, culture, or adventure?",
        "options" => ["Food", "Culture", "Adventure"]
    ],
    [
        "question" => "Do you like warm or cold climates?",
        "options" => ["Warm", "Cold"]
    ],
    [
        "question" => "Would you rather visit temples, museums, or beaches?",
        "options" => ["Temples", "Museums", "Beaches"]
    ],
    [
        "question" => "Do you enjoy festivals and local traditions?",
        "options" => ["Yes", "No"]
    ]
];

header('Content-Type: application/json');
echo json_encode($questions);
?>
