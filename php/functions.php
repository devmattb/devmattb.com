<?php

    /**
    *
    *   This file is a small function library, with functions that are
    *   frequently used throughout the application.
    *
    **/
    function getHomeURL(){
        return "http://localhost/";
    }

    /**
    *   Starts a database connection with some static parameters.
    **/
    function getDB() {

        // ONLINE login details:
        $username = "devmattbMYSQL";
        $password = "q}hfSZpEQ)X";

        // LOCAL login details:
        //$username = "root";
        //$password = "";

        // STANDARD details:
        $servername = "localhost";
        $dbName = 'devmattbDB';
        $port = 3306;


        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbName;charset=utf8", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return;
        }
    }

    /**
    *   Gets all the entities that are selected in the given $db, with any given $query.
    **/
    function getContents($db, $query) {
        $sql = $db->prepare($query);
        $sql->execute();
        return $sql->fetchAll();
    }

    /**
    *   Securely retrieves input data from user forms.
    **/
    function getSecureData($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data, ENT_QUOTES, "UTF-8");
      return $data;
    }

?>
