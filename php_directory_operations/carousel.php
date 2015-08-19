<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
        var image_array = [];
        $(document).ready(function () {
            load_files();
        });
        function load_files() {
            console.log('load files was executed');
            $.ajax({
                url: 'http://localhost:8888/Sandbox/Prototypes/php_directory_operations/dir_listing.php',
                dataType: 'json',
                success: function (response) {
                    if (response.success === true) {
                        createCarousel(response.files);
                    } else {
                        alert('There was an oopsie.');
                    }
                }
            })
        };
        function createCarousel(images) {
            for (var i = 0; i < images.length; i++) {
                var picture = $('<img>', {
                    src: images[i],
                    class: 'carImage'
                });
                $('#image_container').append(picture);
                image_array.push(images[i]);
            }console.log(image_array)
        };
    </script>
    <style>
        #image_container {
            position:relative;
            height: 300px;
            width: 400px;
        }
        .carImage {
            position:absolute;
            height:100%;
            width:100%;
        }
    </style>

</head>
<body>
<button type="button" id="previous"><-</button>
<button type="button" id="right">-></button>
<div id="image_container">

</div>
</body>
</html>