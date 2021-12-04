<?php
    if(!class_exists("Database"))
    {
        if(file_exists('../class/database.php'))
        {
            require '../class/database.php';
        }
        else require 'class/database.php';
    }
    define('SITENAME','GestPerm');
    $Page="";
    if(session_status()==PHP_SESSION_NONE)
	{
		session_start();
	}
    if (!isset($ErrPage))
    {
        GLOBAL $ErrMsg;
        GLOBAL $ErrPage;
    }
?>