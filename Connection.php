<?php
/*      Source       \\avaya\N00134315\EventManagementRD3
 *      Run          http://avaya/~N00134315/EventManagementRD3
 *      home run     http://localhost/EventManagementWeb-Pulled

*/
//newest
class Connection {
    private static $connection = NULL;
    
    public static function getInstance() {
        if (Connection::$connection === NULL){
            
            $host = 'daneel';
            $database = 'n00134315';
            $username = 'N00134315';
            $password = 'N00134315';
            
             /*
            $host = 'localhost';
            $database = 'n00134315';
            $username = 'root';
            $password = '';
            
              */
              
             
            $dsn = 'mysql:dbname=' .$database.";host=".$host;
            
            Connection::$connection = new PDO($dsn, $username, $password);
            if (!connection::$connection){
                die("Could not connect to the database!");
            }
        }
        return Connection::$connection;
    }
}