<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>

    </script>
</head>
<body>
<div id="image_container">
    <?php
    $imageArray = glob('images/*.*');
    $output = ['success' => true, 'errors' => [], 'files' => $imageArray];
    foreach($imageArray as $key => $value){
        print("<img src='$value'>");
    }
    ?>
</div>
</body>
</html>