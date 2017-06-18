<?php
// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

$uploaddir = './';
$uploadfile = $uploaddir.basename($_FILES['fileToUpload']['name']);

if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}
?>
<body style="background-image: url(overlay_blur.jpg); background-repeat:no-repeat; top: 50em;">
	<input style="position: absolute; left: 30%;" type="button" value="Go to map" onclick="location='my_test.html'" />
	<input style="position: absolute; left: 35%;" type="button" value="Go back" onclick="location='upload.html'" />
</body>
