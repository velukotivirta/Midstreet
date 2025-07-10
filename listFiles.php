<?php
require 'vendor/autoload.php'; // Load external libraries like Google API

use Google\Client;
use Google\Service\Drive;

// Load credentials
$client = new Client();
$client->setAuthConfig('midstreetdb-e16255f8a002.json'); // Credential for authenticating the script
$client->addScope(Drive::DRIVE_READONLY); // Only read access, not to modify or delete anything

$service = new Drive($client); // The service that "talks" with G Drive

$folderId = '0B3_SOi8p4Q6wX0VqYzlCd01PVEU';

// Query to folder ID for data:

$optParams = [
    'q' => "'$folderId' in parents and trashed = false", // Show me files inside this folder and not in temporary trashcan
    'fields' => 'files(id, name, mimeType)', // Only give three properties for each file, not all metadata
    'pageSize' => 100
];

$response = $service->files->listFiles($optParams);

$files = $response->getFiles(); // Extracts the actual list of file objects from the response

foreach ($files as $file) {
    echo "Name: " . $file->getName() . "<br>";
    echo "ID: " . $file->getId() . "<br>";
    echo "MIME: " . $file->getMimeType() . "<br><br>";
}
