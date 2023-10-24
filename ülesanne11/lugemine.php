<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 11</title>
</head>
<body>
    <?php
    $filename = 'andmefail.txt';
    $file = fopen($filename, 'r');
    if ($file) {
        $content = fread($file, filesize($filename));
        $content = nl2br($content); 
        fclose($file);
        echo $content;
    } else {
        echo 'Faili ei saanud avada lugemiseks.';
    }
?>
</body>
</html>