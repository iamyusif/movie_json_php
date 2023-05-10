<?php


function getData() // get global data from db.json file 
{
    $myFile = fopen("db.json", "r") or die("Unable to open file!");
    $size = filesize("db.json");
    $result = json_decode(fread($myFile, $size), true);
    fclose($myFile);
    return $result;

}

function getUSer(string $username) // get user from db.json file 
{
    $users = getData()["users"];

    foreach ($users as $user) {
        if ($user["username"] == $username) {
            return $user;
        }
    }
    return null;
}


?>