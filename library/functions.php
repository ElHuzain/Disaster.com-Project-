<?php
    // Simple library made by "الضربة القاضية" team.

    // Connect to a local database
    function connect($database){
        $con = mysqli_connect('localhost', 'root', '', $database);
        return $con;
    }

    // Store items to database
    function store($table, $values, $con){
        $query = "";
        switch($table){
            case 'user':{
                $query = "INSERT INTO user (name, gender, address, password) VALUES('".$values['name']."', '".$values['gender']."', '".$values['address']."', '".$values['password']."')";
                break;
            }
            case 'post': {
                $query = "INSERT INTO post (uid, title, body, date) VALUES('".$values['uid']."', '".$values['title']."', '".$values['body']."', '".date()."')";
                break;
            }
            case 'comment': {
                $query = "INSERT INTO comment (uid, pid, body, date) VALUES('".$values['uid']."', '".$values['pid']."', '".$values['body']."', '".date()."')";
                break;
            }
        }
        $result = mysqli_query($con, $query);
        if(mysqli_error($con)) return false;
        else return true;
    }

    // Retrieve all data
    function retrieveAll($table, $con){
        $query = "SELECT * FROM $table";
        $result = mysqli_query($con, $query);
        return $result;
    }

    // Retrieve some data
    function retrieve($table, $q, $con){
        $query = "SELECT * FROM";

        $query = "$query $q";

        $result = mysqli_query($con, $query);
        return $result;
    }

    // Does this query return a result? if so, now many?
    function howManyRows($query, $con){
        $result = mysqli_query($con, $query);
        return mysqli_num_rows($result);
    }

    // Is this string empty?
    function isEmpty($string){
        if($string == "") return true;
        else return false;
    }

    // Difference between two dates
    function dateDifference($date1, $date2){
        $date1 = strtotime($date1);
        $date2 = strtotime($date2);

        $diff = ($date2 - $date1)/ (60 * 60 * 24);
        return $diff;
    }

?>