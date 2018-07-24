<?php

class config
{

    /* Define global array for att inportant settings */
    public static $rootURL = '';

    /* current active database connection */
    public static $currObj;

    /**
     * add base URL in the global variable
     */
    public static function getRootURL()
    {
        self::$rootURL = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/' . DIRECTORY;
        return self::$rootURL;
    }

    /**
     * function to connect with database
     *
     * @param string $host            
     * @param string $username            
     * @param string $passwd            
     * @return object
     */
    public function mysql_connect($host = '', $username = '', $passwd = '', $database = '')
    {
        $link = mysql_connect($host, $username, $passwd, $database);
        self::$currObj = $link;
        
        return $link;
    }

    /**
     * function to close connection
     *
     * @param obj $link            
     * @return void
     */
    public function mysql_close($link = null)
    {
        if (empty($link)) {
            $link = self::$currObj;
        }
        
        return mysql_close($link);
    }

    /**
     * function to get affected rows
     *
     * @param object $link            
     * @return void
     */
    public function mysql_affected_rows($link = null)
    {
        if (empty($link)) {
            $link = self::$currObj;
        }
        
        return mysql_affected_rows($link);
    }

    /**
     *
     * @param object $database            
     * @param string $query            
     * @param object $link            
     * @return connection
     */
    public function mysql_db_query($database, $query, $link = null)
    {
        if (empty($link)) {
            $link = self::$currObj;
        }
        
        mysql_select_db($database, $link);
        $r = mysql_query($query, $link) or die(mysqli_error($link));
        
        return $r;
    }

    /**
     *
     * @param string $result            
     * @param const $resulttype            
     * @return array
     */
    public function mysql_fetch_array($result, $resulttype = MYSQL_ASSOC)
    {
        while($row = mysql_fetch_array($result, $resulttype)) {
            yield($row);
        }
    }
}