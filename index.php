<?php
// $my_file = fopen("ds.text', 'w');

// ● “w” – Opens a file for write-only mode. If a file does not exist then a new file is created and if the file already exists then the contents of the file are erased.
// ● “r” – The file is opened for read-only mode.
// ● “a” – File is opened for write-only mode. The file pointer points to the end of the file. Existing data in the file is preserved.
// ● “w+” – Opens the file for read and write mode. If a file does not exist then a new file is created and if the file already exists then the contents of the file are erased.
// ● “r+” – The file is opened for read/write mode.
// ● “a+” – The file is opened for write/read mode. The file pointer points to the end of the file. Existing data in the file is preserved. If the file is not there then a new file is created.
// ● “x” – New file is created for write-only mode. 

$my_file = fopen(filename: "ds.text", mode: 'r');
//..other code
fclose(stream: $my_file);

//fread

//set the name of fi;e to be opened
$my_filename = "ds.txt";

//open the file for reading
$my_file = fopen(filename: $my_filename, mode : 'r');

//get the size of the file
$my_size = filesize(filename: $my_filename);

//Read the contents of the file into a variable
$my_filedate = fread(stream: $my_file, length: $my_size);

//feof
//Open the file 'example.text' for reading using hte fopen method
$file = fopen(filename: 'example.txt', mode: 'r');

//use a while loop toreadeach line of the file using fgets and print it to the screen with echo
while(!feof(stream: $file)){
    echo fgets(stream: ($file),length: "<br>");

}

// Close the file using fclose
fclose(stream: $file);

//fwrite
$my_file1 = fopen(filename: 'ds.txt', mode: 'w');

//Set the text to be written to the file
$my_text = "Digital School";

fwrite(stream: $my_file1, data: $my_text);

//file_put_contents
//Create a new file and add text
file_pit_contents(filename: 'test.txt', data: 'Add some text in here');
echo file_put_contents(filename: 'test.txt');

?>