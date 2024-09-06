<?php
$filePath = 'jacob.txt';

if (file_exists($filePath)) {
    echo "File exists.\n";

    $content = file_get_contents($filePath);
    echo "File contents: \n";
    echo $content;

    $lines = file($filePath);
    echo "\n File lines as an array:\n";
    print_r($lines);
    
    $additionalContent = "\n This is the new line added.";
    file_put_contents($filePath, $additionalContent, FILE_APPEND);
    echo "\n\nNew content appended successfully!";
} else {
   
    $initialContent = "This is the initial content.";
    file_put_contents($filePath, $initialContent);
    echo "File created with initial content.";
}
?>
