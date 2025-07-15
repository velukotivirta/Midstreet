<?php
$fileId = $_GET['id'] ?? null;

if (!$fileId) {
    http_response_code(400);
    exit('Missing file ID');
}

$accessToken = 'YOUR_OAUTH_ACCESS_TOKEN'; // Must be valid

$ch = curl_init("https://www.googleapis.com/drive/v3/files/$fileId?alt=media");
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $accessToken"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
http_response_code(200);
header("Content-Type: $contentType");
echo $response;
