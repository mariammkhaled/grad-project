<?php
/**
 * uploads file to server and returns path to file
 * @param string $file 
 * @param string $folder (optional)
 * @return string $file_name
 */
function upload(string $file, string $folder = 'images'): string
{
  !file_exists($folder) && mkdir($folder, 0777, true);
  if (isset($_FILES[$file])) {
    $file_name = $_FILES[$file]['name'];
    $file_size = $_FILES[$file]['size'];
    $file_tmp = $_FILES[$file]['tmp_name'];
    $file_type = $_FILES[$file]['type'];
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $extensions = array("jpeg", "jpg", "png");
    $file_name = uniqid(true) . '.' . $file_ext;
    move_uploaded_file($file_tmp, "$folder/" . $file_name);
    return $file_name;
  }
  return '';
}
