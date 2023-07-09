<?php
    class connections_Ad
    {
        var $conn;
        function __construct()
        {
            $svname = "localhost";
            $username = "root";
            $pass = "";
            $dbname = "shopwatch";
            $this->conn = new mysqli($svname,$username,$pass,$dbname);
            $this->conn->set_charset('utf8');
        }
    }

?>