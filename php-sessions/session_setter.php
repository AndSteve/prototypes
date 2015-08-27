<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form action="session_reader.php" method="POST">
    <input type="text" name="name" placeholder="Name">
    <?php if (isset($_SESSION['error']['name'])) {
        print($_SESSION['error']['name']);
        print('<br>');
    } ?>
    <input type="number" name="age" placeholder="Age">
    <?php if (isset($_SESSION['error']['age'])) {
        print($_SESSION['error']['age']);
        print('<br>');
    } ?>
    <input type="text" name="occupation" placeholder="Occupation">
    <?php if (isset($_SESSION['error']['occupation'])) {
        print($_SESSION['error']['occupation']);
        print('<br>');
    } ?>
    <button type="submit">Submit</button>
</form>
</body>
</html>