<!--login_handler.php-->
<?php
$user_info = [
    ['id' => 0, 'userName' => 'BurgerBob', 'password' => 'passwordlol'],
    ['id' => 0, 'userName' => 'waterboy', 'password' => 'abc123'],
    ['id' => 0, 'userName' => 'pinky', 'password' => 'drugsaregood'],
    ['id' => 0, 'userName' => 'brain', 'password' => 'worldomination'],
    ['id' => 0, 'userName' => 'annie', 'password' => 'bunnies'],
];

$userName = $_POST['username'];
$passWord = $_POST['password'];

for ($i = 0; $i < count($user_info); $i++) {
    if ($userName == $user_info[$i]['userName']) {
        if ($passWord == $user_info[$i]['password']) {
            $_SESSION['user_id'] = rand(1, 10000000000);
            print('Successfully logged in!');
        } else {
            print('Username or password was incorrect, try again');
        }
    }
}
