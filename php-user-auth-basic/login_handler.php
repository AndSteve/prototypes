<?php
$user_info = [
    ['id' => 0, 'userName' => 'BurgerBob', 'password' => 'c1fde6e3f5f147c7ef48c3a3cd25c402ff56801b'],
    ['id' => 1, 'userName' => 'waterboy', 'password' => '6367c48dd193d56ea7b0baad25b19455e529f5ee'],
    ['id' => 2, 'userName' => 'pinky', 'password' => '56884b9aa87106d69867939287aff8fa92bc8e71'],
    ['id' => 3, 'userName' => 'brain', 'password' => '618b6081e6c002b80c3f052b100e609396a5d952'],
    ['id' => 4, 'userName' => 'annie', 'password' => 'b2442613324e667e8c1c28326b0f8a86d76b0b11'],
];

$userName = $_POST['username'];
$passWord = sha1($_POST['password']);
$output = [];


for ($i = 0; $i < count($user_info); $i++) {
    if ($userName == $user_info[$i]['userName']) {
        if ($passWord == $user_info[$i]['password']) {
            //$_SESSION['user_id'] = rand(1, 10000000000);
            //print('Successfully logged in!');
            $output['user_id'] = $user_info[$i]['id'];
            $output['success'] = true;
            $output['message'] = 'Successfully logged in!';
        } else {
            //print('Username or password was incorrect, try again');
            $output['success'] = false;
            $output['message'] = 'Username or password incorrect.';
        }
    }
}
$output_string = json_encode($output);
print($output_string);