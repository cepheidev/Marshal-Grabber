<?php

    session_start();
    
    $host_name  = "localhost";
    $database   = "your_database_name";
    $user_name  = "your_database_username";
    $password   = "your_database_password";

    try {
        $bdd = new PDO('mysql:host='.$host_name.';dbname='.$database, $user_name, $password);

    } catch (PDOException $e) {
        print "Error !: " . $e->getMessage() . "<br/>"; die();
    }
    
    catch(Exception $e)
    {
        echo 'Error ! : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
    }
?>
de();
    }
?>