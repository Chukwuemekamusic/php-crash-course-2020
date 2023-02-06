<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
// $resource = curl_init($url);
// curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($resource);
// $code = curl_getinfo($resource, CURLINFO_HTTP_CODE);
// echo '<pre>';
// var_dump(($code));
// echo '</pre>' . '<br>';
// curl_close($resource);
// echo $result;

// Get response status code

// set_opt_array

// Post request
$resource = curl_init($url);
$user = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'email' => 'Jacobs@harvard.edu',
    'hobbies' => ['Tennis', 'Video Game']
];
curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($user)
]);
$result = curl_exec($resource);

curl_close($resource);
echo $result . '<br>';

#print_r($result) ;


// to check if Curl is activated
# echo 'Curl: ', function_exists('curl_version') ? 'Enabled' : 'Disabled';

// to activate Curl
# sudo apt-get install php8.1-curl
# sudo service apache2 restart


// var_dump(extension_loaded('curl'));