<?php

// Define a váriavel $startsession como código para session_start()
$startsession = if (!isset($_SESSION)) { 
    session_start();
};

?>