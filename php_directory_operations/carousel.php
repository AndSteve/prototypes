<!DOCTYPE html>
<html>
<head>
    <title>Carousel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        var image_array = [];
        var current_image = 0;
        $(document).ready(function () {
            load_files();
            $('#previous').click(function () {
                prev_image();
            })
            $('#next').click(function () {
                next_image();
            })
        });
        function load_files() {
            console.log('load files was executed');
            $.ajax({
                url: 'http://localhost:8888/Sandbox/Prototypes/php_directory_operations/dir_listing.php',
                dataType: 'json',
                success: function (response) {
                    if (response.success === true) {
                        createCarousel(response.files);
                    }
                }
            })
        }
        ;
        function createCarousel(images) {
            for (var i = 0; i < images.length; i++) {
                var picture = $('<img>').attr("src", images[i]);
                $('#image_container').append(picture);
                image_array.push(picture);
            }
        }
        function prev_image() {
            var previous;

            if (current_image === 0) {
                previous = image_array.length - 1;
            }
            else {
                previous = current_image - 1;
            }
            image_array[current_image].animate({
                'left': '100%'
            }, 500);
            image_array[previous].css("left", "-100%");
            image_array[previous].animate({
                'left': '0%'
            }, 500);
            console.log("current_image_index is : " + current_image + " previous is : " + previous);
            current_image = previous;
        }
        function next_image() {
            var next;

            if (current_image === image_array.length - 1) {
                next = 0;
            }
            else {
                next = current_image + 1;
            }
            image_array[current_image].animate({
                'left': '-100%'
            }, 500);

            image_array[next].css("left", "100%");
            image_array[next].animate({
                'left': '0%'
            }, 500);
            current_image = next;
        }

    </script>
    <style>
        #image_container {
            position: relative;
            height: 600px;
            width: 800px;
            display: block;
        }

        img {
            position: absolute;
            height: 100%;
            width: 100%;
        }
    </style>

</head>
<body>

<div id="image_container">
</div>
<button type="button" id="previous"><-</button>
<button type="button" id="next">-></button>
</body>
</html>