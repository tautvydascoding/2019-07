<?php

// prisijungimas DB

// konstantos
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_HOST', 'localhost');
define('DB_NAME', 'hospital7');

$prisijungimas = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME  );
if ($prisijungimas == true) {
    echo "Prisijungiau prie DB!   <br />";
} 
