<?php
    // require the lab 21 include
    require "pizzahouse.inc";
    
    // log out
    session_destroy();

    // go back to logon page
    header( "Location: Login.php" );
?>