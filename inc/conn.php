<?php
class Database
{
    private $hostname;
    private $username;
    private $password;
    private $dbname;

    protected function connection(){
        $this->hostname = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'oop-curd';
        $mysqli_conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);

        return $mysqli_conn;


//         if(!mysqli_error($mysql_conn)){
// return
//         }

    }


}




?>