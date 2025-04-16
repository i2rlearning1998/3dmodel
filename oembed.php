<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    $title = 'My 3D Model';
    $provider_name = 'My Website';
    $provider_url = 'https://i2rlearning.com';
    $html = "<iframe src='" . $url . "' width='800' height='600' frameborder='0' allow='autoplay; fullscreen' sandbox='allow-scripts allow-same-origin' allowfullscreen></iframe>";
    $response = array(
        'type' => 'rich',
        'version' => '1.0',
        'title' => $title,
        'provider_name' => $provider_name,
        'provider_url' => $provider_url,
        'html' => $html,
        'width' => 800,
        'height' => 600
    );
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    http_response_code(400);
    echo 'Bad request';
}
?>