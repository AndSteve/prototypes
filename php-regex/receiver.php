<?php
foreach ($_POST as $key => $value) {
//    print('<br>Key: '.$key.': '.$value);
    switch ($key) {
        case 'first_name':
            print('Checking first name: ' . $value);
            if (preg_match('/^[a-zA-Z]{2,}$/', $value)) {
                print('<br>This is a valid name');
            } else {
                print('<br>Invalid Name');
                global $errors;
                $errors[] = "invalidName " . $value;
            }
            break;
        case 'age':
            print('Checking age: ' . $value);
            if (preg_match('/^(\d?[1-9]|[1-9]0)$/', $value)) {
                print('<br>This is a valid age');
            } else {
                print('<br>This is not a valid age');
                global $errors;
                $errors[] = "invalidAge " . $value;
            }
            break;
        case 'phone':
            print('Checking phone number: ' . $value);
            if (preg_match('/(1[0-9]{9})|((\([0-9]){3}\) ([0-9]){3}-([0-9]){4})|([0-9]){3}-([0-9]){3}-([0-9]){4}$/', $value)) {
                print('<br>This is a valid phone number');
            } else {
                print('Maybe not a real number');
            }
            break;
        case 'username':
            print('Checking username: ' . $value);
            if (preg_match('/(^[a-zA-Z])([a-zA-Z0-9]{5})/', $value)) {
                print('Valid username');
            } else {
                print('invalid username');
            }
            break;
        case 'bonus':
            print('Checking bonus: ' . $value);
            if (preg_match('/[0-9]{3}/', $value)) {
                print('Valid bonus');
            } else {
                print('invalid bonus');
            }
            break;
        default :
            print('<br><strong>Something went wrong?</strong><br>');
    }
    print('<br>');
}