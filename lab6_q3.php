<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculate Area</title>
</head>
<body>
    <?php

    function calculateArea($width, $height) {
        return $width * $height;
    }

    $width = 4;
    $height = 2;
    $area = calculateArea($width, $height);

    echo "The area of a rectangle with a width $width and height $height is $area";
    ?>
</body>
</html>