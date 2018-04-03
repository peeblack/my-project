<?
$baseFromJavascript = $_POST['base64'];

// remove the part that we don't need from the provided image and decode it
$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $baseFromJavascript));

$file_name = date('YmdHis');

$filepath = "data-files/".$file_name.".png"; // or image.jpg

// Save the image in a defined path
file_put_contents($filepath,$data);

echo $filepath;