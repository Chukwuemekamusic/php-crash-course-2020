<?php
// Magic constants
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';
echo __LINE__ . '<br>';

// Create directory
/* mkdir('empty');
mkdir('something'); */


// Rename directory
# rename('something', 'read');

// Delete directory
# rmdir('empty.txt');

// Read files and folders inside directory
$files = scandir('../');
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt') . '<br>'. '<br>';
file_put_contents('read/sample.txt', 'Some content for you');

// file_get_contents from URL
$userJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
$user = json_decode($userJson, true);
echo '<pre>';
 var_dump($user) . '<br>';
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
file_exists('read/sample.txt'); // true
// is_dir
// filemtime
// filesize
// disk_free_space
// file