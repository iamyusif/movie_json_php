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

function createUser(string $name, string $email, string $username, string $password) // create user in db.json file 
{
    $users = getData()["users"];
    $users[] = [
        "id" => count($users) + 1,
        "name" => $name,
        "email" => $email,
        "username" => $username,
        "password" => $password,
        "role" => "user"
    ];

    $data = getData();
    $data["users"] = $users;

    $myFile = fopen("db.json", "w") or die("Unable to open file!");
    fwrite($myFile, json_encode($data, JSON_PRETTY_PRINT));
    fclose($myFile);


}


function createNewMovie(string $title, string $description, string $image, string $url,int $views = 3, int $imdb = 3) // create movie in db.json file
{
    $movies = getData()["movies"];
    $movies[] = [
        "id" => count($movies) + 1,
        "title" => $title,
        "description" => $description,
        "image" => $image,
        "url" => $url,
        "views" => $views,
        "imdb" => $imdb,
        "active" => false
    ];

    $data = getData();
    $data["movies"] = $movies;

    $myFile = fopen("db.json", "w") or die("Unable to open file!");
    fwrite($myFile, json_encode($data, JSON_PRETTY_PRINT));
    fclose($myFile);

}

?>