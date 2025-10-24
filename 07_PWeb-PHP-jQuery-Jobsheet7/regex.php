<!DOCTYPE html>
<html>
<head>
    <title>Regex Example</title>
</head>
<body>

<h2>Regular Expression Example</h2>

<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan";
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br>";

$pattern = '/[0-9]/';               
$text = 'There are 123 apples.';    
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];  
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br>";

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;
echo "<br>";

$pattern = '/go*d/';
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br>";

$pattern = '/go?d/';
$text = 'gd is god and good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
echo "<br>";

$pattern = '/go{1,2}d/';
$text = 'gd is akmal and good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>

</body>
</html>