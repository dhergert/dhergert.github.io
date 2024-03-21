<?php
// Set the image path
$idx = $_SERVER['QUERY_STRING'];

switch ($idx) {
    case 0:
        $imagePath = './football-field-00.png';
        break;
    case 1:
        $imagePath = './football-field-01.png';
        break;
    case 2:
        $imagePath = './football-field-02.png';
        break;
    case "2-1":
        $imagePath = './football-field-02-1.png';
        break;
    case "2-2":
        $imagePath = './football-field-02-2.png';
        break;
    case 3:
        $imagePath = './football-field-03.png';
        break;
    case "3-1":
        $imagePath = './football-field-03-1.png';
        break;
    case "3-2":
        $imagePath = './football-field-03-2.png';
        break;
    case 4:
        $imagePath = './football-field-04.png';
        break;
    case 5:
        $imagePath = './football-field-05.png';
        break;
    case 6:
        $imagePath = './football-field-06.png';
        break;
    default:
        $imagePath = './football-field-00.png';
}

// Get the image content
$imageContent = file_get_contents($imagePath);

// Set the Cache-Control header
header('Cache-Control: max-age=3600'); // Set cache to 1 hour (3600 seconds)

// Output the image content
header('Content-Type: image/png'); // Set appropriate content type for your image
echo $imageContent;
?>