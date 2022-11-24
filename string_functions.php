<?php
# substr()
# Returns a portion of strings

//$output = substr('hello', 1, 3);
//echo $output;

# strlen()
# Returns the length of a string

# strpos()
# Finds the position of the first occurence of a sub string

//$output = strpos('Hello World', 'o');

//$output = strrpos('Hello World', 'o'); // Reverse


# TRIM
# trims white space

//$text = 'Hello World          ';
//$trimmed = trim($text);
//var_dump($trimmed);

# STR TO UPPER
# Makes Everything Uppercase
//$output = strtoupper('Hello World');
//echo $output;

# STR TO LOWER
# Makes Everything Lowercase
//$output1 = strtolower('Hello World');
//echo $output1;

#ucwords()
# Capitalize Every Word

//$output = ucwords('hello world');
//echo $output;

# str_replace()
# Replace All Occurencies Of A Search String With A Replacement

//$text = 'Hello World';
//$output = str_replace('World', 'Everyone', $text);
//echo $output;

# is_string()
# Check If String

//$val = 'Hello';
//$output = is_string($val);
//
//echo $output;

# COMPRESS TEXT

//$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
//$compress = gzcompress($text);
//
//echo $compress;
//
//# UNCOMPRESS TEXT
//
//echo gzuncompress($compress);
?>