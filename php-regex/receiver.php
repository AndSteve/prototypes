<?php
foreach ($_POST as $key => $value) {
//    print('<br>Key: '.$key.': '.$value);
    switch ($key) {
        case 'first_name':
            print('Checking first name: ' . $value);
            if (preg_match('/^[a-zA-Z]{2,}$/', $value)) {
                print(' This is a valid name');
            } else {
                print('Invalid Name');
            }
            break;
        case 'age':
            print('Checking age: ' . $value);
            if (preg_match('/[0-9]{0,3}$/', $value)){
                print(' This is a valid age');
            } else {
                print('This is not a valid age');
            }
            break;
        case 'phone':
            print('Checking phone number: ' . $value);
            break;
        case 'username':
            print('Checking username: ' . $value);
            break;
        case 'bonus':
            print('Checking bonus: ' . $value);
            break;
    }
    print('<br>');
}