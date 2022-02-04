<?php

$connection = new  mysqli("localhost", "i95dev", "i95dev", "ubantuconnection");
if ($connection->connect_error) {
    echo("Database connection failed: ");
} # else block will displays if the connection gets established
else {
    echo "connection  established";
    echo "<br>";
    $query = ' CREATE TABLE details(
    PersonID int ,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
)';
    if ($connection->query($query)) {
        echo "table created";
    } else {
        echo " table not created";
    }
    echo "<br>";
    #insert into the table

    $insertinto = 'insert into details(PersonID,LastName,FirstName,Address,city) values(1,"sachin","gh","gadag","k")';
//    $insertinto = 'insert into details(PersonID,LastName,FirstName,city,state) values(1,"sachin","gh","gadag","karnataka")';
    if ($connection->query($insertinto)) {
        echo "the valuee inserted into the table";
    } else {
        echo "values not inserted";
    }
    echo "<br>";


    #inserting the values into the table human ;
    $insertintoq= 'insert into human( PersonID ,LastName, FirstName ,Address,City ) values (50,"abc","def","blore","rajblore")';


    if ($connection->query($insertintoq)) {
        echo "the human valuee inserted into the table";
    } else {
        echo "human values not inserted";
    }
    echo "<br>";


}

