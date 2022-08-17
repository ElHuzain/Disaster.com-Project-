<?php
// Simple library made by our team :)

// Connect to a local database
function connect($database)
{
    $con = mysqli_connect('localhost', 'root', '', $database);
    return $con;
}

function alert($error)
{
    echo "<script type='text/javascript'>alert('$error');</script>";
}

// Store items to database
function store($table, $values, $con)
{
    $query = "";
    switch ($table) {
        case 'user': {
                $query = "INSERT INTO user (name, gender, address, password) VALUES(\"" . $values['name'] . "\", \"" . $values['gender'] . "\", \"" . $values['address'] . "\", \"" . $values['password'] . "\")";
                break;
            }
        case 'post': {
                $query = "INSERT INTO post (uid, title, body, date) VALUES(\"" . $values['uid'] . "\", \"" . $values['title'] . "\", \"" . $values['body'] . "\", '" . date("Y-m-d") . "')";
                break;
            }
        case 'comment': {
                $query = "INSERT INTO comment (uid, pid, content, date) VALUES(\"" . $values['uid'] . "\", \"" . $values['pid'] . "\", \"" . $values['content'] . "\", \"" . date("Y-m-d") . "\")";
                break;
            }
    }
    return mysqli_query($con, $query);
}

// Retrieve all data
function retrieveAll($table, $con)
{
    $query = "SELECT * FROM $table";
    $result = mysqli_query($con, $query);
    return $result;
}

// Retrieve some data
function retrieve($table, $q, $con)
{
    $query = "SELECT * FROM";
    $query = "$query $q";

    $result = mysqli_query($con, $query);
    return $result;
}

// Does this query return a result? if so, now many?
function howManyRows($query, $con)
{
    $result = mysqli_query($con, $query);
    return mysqli_num_rows($result);
}

// Delete a record
function delete($table, $key, $value, $con){
    $query = "DELETE FROM $table WHERE $key = $value";
    $result = mysqli_query($con, $query);
    return $result;
}

// Update a record
function update($table, $key, $value, $id, $con){
    $query = "UPDATE $table SET $key = \"$value\" WHERE pid = $id";
    echo $query;
    return mysqli_query($con, $query);
}

// Is this string empty?
function isEmpty($string)
{
    if ($string == "") return true;
    else return false;
}

// Difference between two dates
function dateDifference($date1, $date2)
{
    $date1 = strtotime($date1);
    $date2 = strtotime($date2);

    $diff = ($date2 - $date1) / (60 * 60 * 24);
    return $diff;
}
