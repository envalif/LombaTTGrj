<?php

$file_name = $_FILES['file_to_upload']['name'];
$file_temp_location = $_FILES['file_to_upload']['tmp_name'];

if (!$file_temp_location) {
  echo 'ERROR: No file has been selected';
  exit();
}

if (move_uploaded_file($file_temp_location, "uploads/$file_name")){
  echo "$file_name upload is complete";
} else {
  echo 'A server was unable to move the file';
}
?>
<?php
$dir = "\uploads";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}
?>