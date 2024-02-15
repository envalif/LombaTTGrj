<?php
$dir = './uploads'; // Update the directory path as needed

// Check if the directory exists
if (is_dir($dir)) {
    // Read the directory contents
    $files = array_diff(scandir($dir), array('..', '.')); // Exclude '.' and '..'
    
    // Output the file names as JSON
    echo json_encode($files);
} else {
    // Output debug information if the directory is not found
    echo json_encode(array('error' => 'Directory not found', 'path' => $dir, 'is_dir' => is_dir($dir)));
}
?>