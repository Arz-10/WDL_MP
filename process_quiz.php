<?php
header('Content-Type: application/json');
$input = json_decode(file_get_contents('php://input'), true);
$answers = $input;

$recommendation = "India"; 

if (
    in_array("Temples", $answers) ||
    (in_array("Culture", $answers) && in_array("Warm", $answers) && in_array("Festivals", $answers))
) {
    $recommendation = "India";
}
elseif (in_array("Museums", $answers) && in_array("Cold", $answers) && in_array("Food", $answers)) {
    $recommendation = "France";
}
elseif (in_array("Beaches", $answers) && in_array("Warm", $answers) && in_array("Adventure", $answers)) {
    $recommendation = "Australia";
}
elseif (in_array("Deserts", $answers) || (in_array("Warm", $answers) && in_array("Historical landmarks", $answers))) {
    $recommendation = "Egypt";
}
elseif (in_array("Beaches", $answers) && in_array("Culture", $answers) && in_array("Festivals", $answers)) {
    $recommendation = "Spain";
}
elseif (in_array("Mountains", $answers) && in_array("Culture", $answers) && in_array("Historical landmarks", $answers)) {
    $recommendation = "Greece";
}
elseif (in_array("Historical landmarks", $answers) && in_array("Museums", $answers) && in_array("Food", $answers)) {
    $recommendation = "Rome";
}

echo json_encode(["recommendation" => $recommendation]);
?>
