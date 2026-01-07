<html>
<head>
<title>IMAGE</title>
</head>
<body>
<?php

$img = glob("images/*.{JPG,jpg,png}", GLOB_BRACE);
echo "Showing all images from images folder:<br>";
echo "<pre>";
print_r($img);
echo "</pre>";

echo "Showing the image using html images folder<br>";
foreach ($img as $image){
        echo"<img src={$image} width=100px /><br>";
}
?>
</body>
</html>

