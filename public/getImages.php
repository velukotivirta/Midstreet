<?php
require __DIR__ . '/../vendor/autoload.php';

// Load external libraries like Google API

use Google\Client;
use Google\Service\Drive;

// Load credentials
$client = new Client();
$client->setAuthConfig(__DIR__ . '/../config/midstreetdb-2c993e5c7ef1.json'); // Credential for authenticating the script
$client->addScope(Drive::DRIVE_READONLY); // Only read access, not to modify or delete anything

$service = new Drive($client); // The service that "talks" with G Drive

$folderId = '1hIeJWMue90y3u02ls5ed9LwF1g5RNGR7';

// Query to folder ID for data:

$optParams = [
    'q' => "'$folderId' in parents and trashed = false and (mimeType contains 'image/')", // Show me files inside this folder and not in temporary trashcan
    'fields' => 'files(id, name, webViewLink, thumbnailLink)', // Only query three properties for each file, not all metadata
    'pageSize' => 50,
    'orderBy' => 'name'
];

$response = $service->files->listFiles($optParams);
$images = $response->getFiles();

return $images;


foreach ($images as $image) {
    $imageUrl = "https://drive.google.com/uc?id=" . $image->getId();
    echo "<img src='$imageUrl' alt='{$image->getName()}'>";
}
