<!--login_form.php-->
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Basic Login Form</title>
    <link type="image/png" rel="icon" href="https://cdn3.iconfinder.com/data/icons/watchify-v1-0-32px/32/lock-32.png">
    <script>
        $(document).ready(function () {
            $("#submit").click(function () {
                console.log('Click handler works');
                var username = $('#userName').val();
                var pass = $('#pass').val();
                $.ajax({
                    method: "POST",
                    url: "login_handler.php",
                    cache: false,
                    data: {username: username, password: pass},
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                        console.log('Successfully contacted server');
                        if (response['success'] === true) {
                            alert('Successfully logged in');
                        } else {
                            alert('Username or password incorrect');
                        }
                    },
                    error: function (response) {
                        console.log('There was an error');
                        console.log(response);
                    }
                })
            })
        })
    </script>
</head>
<body>
<form action="login_handler.php" method="POST">
    <input id="userName" type="text" name="username" placeholder="Username">
    <input id="pass" type="password" name="password" placeholder="Password">
    <button id="submit" type="button">Submit</button>
</form>
</body>
</html>