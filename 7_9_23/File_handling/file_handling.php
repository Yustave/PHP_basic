<?php

$open_file = "file_open.txt";
fopen($open_file, 'w');

$write_file = "file_writ.txt";
$write= fopen($write_file, 'w');
fwrite($write, "
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
");
fclose($write);

$append_file = "file_append.txt";
$append = fopen($append_file, 'a');
fwrite($append, " Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod ");
fclose($append);



?>