<?php
//Set access token
$token = 'scTWd2M0Ju06I2mWyCaHoRE4MmZrusX72ig4AHEFu6s';
//Set home URL
$homeUrl = '/';

// Set The API URL
$url = 'http://affiliate2/api/lead';

// Create a new cURL resource
$ch = curl_init($url);
// Setup request to send json via POST`
$payload = json_encode($_POST);

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer {$token}", 'Content-Type: application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

// Get the POST request header status
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// If header status is not Created or not OK, return error message
if ( $status === 200 || $status === 201 ) {
	header("Location: {$homeUrl}");
} else {
   die("Error: call to URL $url failed with status $status, response $result, curl_error " . curl_error($ch) . ", curl_errno " . curl_errno($ch));
}

// Close cURL resource
curl_close($ch);