<?php 
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora laborum eos recusandae placeat. Architecto omnis sunt perspiciatis quam dignissimos ex iste sint hic, minus ea esse temporibus facere doloribus, repudiandae fugit cum commodi impedit delectus, quidem adipisci. Quod tenetur quo, fugit saepe, voluptatem distinctio numquam doloribus excepturi quia, ducimus eum.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>