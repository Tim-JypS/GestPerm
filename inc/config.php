<?php
    if(!class_exists("Database"))
        require '../class/database.php';
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