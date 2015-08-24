<!--login_form.php-->
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Basic Login Form</title>
    <link type="image/png" rel="icon" href="https://cdn3.iconfinder.com/data/icons/watchify-v1-0-32px/32/lock-32.png">
    <script>
        $(document).ready(function(){
            $("#submit").click(function(){
                var userName = $('#userName').val();
                var pass = $('#pass').val();
                $.ajax({
                    method: "POST",
                    url: "login_handler.php",
                    cache: false,
                    data: {username: userName, password: pass},
                    dataType: "text",
                    success: function(response){
                        console.log(response);
                        alert('Successfully Logged In');
                    }
                })
            })
        })
    </script>
</head>
<body>
<form action="login_handler.php" method="POST">
    <input id="userName" type="text" name="userName" placeholder="Username">
    <input id="pass" type="password" name="password" placeholder="Password">
    <button id="submit" type="submit">Submit</button>
</form>
</body>
</html>