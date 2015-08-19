<?php
$imageArray = glob('images/*.*');
$success = false;
$errors = [];
$output;
if ($imageArray === false) {
    print('Something bad happened.');
} elseif (count($imageArray) === 0) {
    print('File not found');
} else {
    $success = true;
    $errors = [];
    $output['files'] = $imageArray;
}
$output = ['success' => $success, 'errors' => $errors, 'files' => $imageArray];
$encodeArray = json_encode($output);
print($encodeArray);