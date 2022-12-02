<?php

$path = '/dir0/dir1/myfile.php';
$file = 'file1.txt';

# Return filename
//echo basename($path);


# Return filename without ext
//echo basename($path, '.php');


# Return the dir name from path
//echo dirname($path);


# Checks if file exists (Works on folders too)
//echo file_exists($file);


# Get absolute path
//echo realpath($file);


# Checks to see if file (Doesn't work on folders)
//echo is_file($file);


# Check if writeable
//echo is_writable($file);


# Get file size
//echo filesize($file);


# Create a directory
//mkdir('testing');


# Delete a directory if empty
//rmdir('testing');


# Copy file
//echo copy('file1.txt', 'file2.txt');


# Rename file
//rename('file2.txt', 'myfile.txt');


# Delete file
//unlink('myfile.txt');


# Write from file to string
//echo file_get_contents($file);


# Write string to file
//echo file_put_contents($file, 'Goodbye World');


# Append string to file
//$current = file_get_contents($file);
//$current .= ' Goodbye World';
//file_put_contents($file, $current);


# Open file for reading
//$handle = fopen($file, 'r');
//$data = fread($handle, filesize($file));
//echo $data;

# Open file for writing
//$handle = fopen($file, 'w');
//$txt = "John Doe\n";
//fwrite($handle, $txt);
//$txt = "Steve Smith\n";
//fwrite($handle, $txt);
//fclose($handle);