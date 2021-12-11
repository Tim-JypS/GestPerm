<?php
class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "pct_db";
    private static $dbUsername = "root";
    private static $dbUserpassword = "";
    
    private static $connection = null;
    
    private static function connect()
    {
        if(self::$connection == null)
        {
            try
            {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8' , PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$connection;
    }
    
    private static function disconnect()
    {
        self::$connection = null;
    }

    public static function SelectQuery($query="")
    {
        if ($query<>"")
        {
            self::connect();
            $req=self::$connection->prepare($query);
            try
            {
              $req->execute();
            }
            catch(Exception $e)
            {
                var_dump($query);
                die($e->getMessage());
            }
            self::disconnect();
            return $req->fetchAll(PDO::FETCH_OBJ);
        }
        else return "";
    }

    public static function InsertQuery($query="")
    {
        if ($query<>"")
        {
            self::connect();
            try
            {
                $req=self::$connection->prepare($query);
                $req->execute();
                self::disconnect();
                return true;
            }
            catch(PDOException $e)
            {
               return $e->getMessage();
            }
            
        }
        else return "";
    }

    public static function UpdateQuery($query="")
    {
        if ($query<>"")
        {
            self::connect();
            try
            {
                $req=self::$connection->prepare($query);
                $req->execute();
                self::disconnect();
                return true;
            }
            catch(PDOException $e)
            {
               return $e->getMessage();
            }
            
        }
        else return "";
    }

     public static function DeleteQuery($query="")
    {
        if ($query<>"")
        {
            self::connect();
            try
            {
                $req=self::$connection->prepare($query);
                $req->execute();
                self::disconnect();
                return true;
            }
            catch(PDOException $e)
            {
               return $e->getMessage();
            }
            
        }
        else return "";
    }
    
    public static function EnleverApost($str="")
    {
        if ($str<>"")
        {
            return str_replace("'", "\'", $str);
            
        }
        else return "";
    }

}



?>
