<?php
    // Enable CORS for local development (you might need to adjust this for production)
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");

    // Get the JSON data sent from JavaScript
    $answers = json_decode(file_get_contents('php://input'), true);

    $recommendation = "";

    // Very basic recommendation logic - expand this!
    if (in_array("Beaches", $answers) && in_array("Warm and sunny", $answers)) {
        $recommendation = "Based on your preference for beaches and warm weather, consider Italy or Spain!";
    } elseif (in_array("Mountains", $answers) && in_array("Outdoor adventures", $answers)) {
        $recommendation = "For mountains and outdoor adventures, Greece or Australia could be exciting!";
    } elseif (in_array("Cityscapes", $answers) && in_array("Action-packed and busy", $answers)) {
        $recommendation = "If you love cityscapes and a busy pace, Japan or the USA might be perfect for you!";
    } elseif (in_array("Cultural exploration", $answers) && in_array("Relaxing and slow", $answers)) {
        $recommendation = "For cultural exploration at a relaxed pace, think about visiting Egypt or India!";
    } else {
        $recommendation = "Based on your choices, explore our diverse destinations for more inspiration!";
    }

    // Prepare the response for JavaScript
    $response = ['recommendation' => $recommendation];

    // Send the JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
?>
