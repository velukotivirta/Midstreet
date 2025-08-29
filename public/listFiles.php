<?php
require __DIR__ . '/../vendor/autoload.php';

// Load vlucas dotenv so that the GOOGLE_APPLICATION_CREDENTIALS can be read:

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Load external libraries like Google API

use Google\Client;
use Google\Service\Drive;

// Load credentials
$client = new Client();
$client->setAuthConfig($_ENV['GOOGLE_APPLICATION_CREDENTIALS']); // Credential for authenticating the script
$client->addScope(Drive::DRIVE_READONLY); // Only read access, not to modify or delete anything

$service = new Drive($client); // The service that "talks" with G Drive

$folderId = '0B3_SOi8p4Q6wX0VqYzlCd01PVEU'; // The drive ID folder

// Query to folder ID for data:

$optParams = [
    'q' => "'$folderId' in parents and trashed = false", // Show me files inside this folder and not in temporary trashcan
    'fields' => 'files(name)', // Only query three properties for each file, not all metadata
    'pageSize' => 300,
    'orderBy' => 'name' // Show in alphabetical order
];

$response = $service->files->listFiles($optParams);

$files = $response->getFiles(); // Extracts the actual list of file objects from the response

foreach ($files as $file) {
    echo pathinfo($file->getName(), PATHINFO_FILENAME) . "<br><br>";

}
