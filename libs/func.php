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


function createNewMovie(string $title, string $description, string $image, string $url, int $likes = 3, int $comments = 3) // create movie in db.json file
{
    $movies = getData()["movies"];
    $movies[] = [
        "id" => count($movies) + 1,
        "title" => $title,
        "description" => $description,
        "image" => $image,
        "url" => $url,
        "likes" => 3,
        "comments" => 3,

        "active" => false
    ];

    $data = getData();
    $data["movies"] = $movies;

    $myFile = fopen("db.json", "w") or die("Unable to open file!");
    fwrite($myFile, json_encode($data, JSON_PRETTY_PRINT));
    fclose($myFile);

}

function getMovieById(int $id) // get movie by id from db.json file
{
    $movies = getData()["movies"];

    foreach ($movies as $movie) {
        if ($movie["id"] == $id) {
            return $movie;
        }
    }
    return null;
}

function editMovie(int $id, string $title, string $description, string $image, string $url,bool $active) // edit movie in db.json file
{
    $movies = getData()["movies"];

    foreach ($movies as $key => $movie) {
        if ($movie["id"] == $id) {
            $movies[$key]["title"] = $title;
            $movies[$key]["description"] = $description;
            $movies[$key]["image"] = $image;
            $movies[$key]["url"] = $url;
            $movies[$key]["active"] = $active;


            $data = getData();
            $data["movies"] = $movies;

            $myFile = fopen("db.json", "w") or die("Unable to open file!");
            fwrite($myFile, json_encode($data, JSON_PRETTY_PRINT));
            fclose($myFile);

            break;
        }
    }


}


function deleteMovie(int $id) // delete movie from db.json file
{
    $movies = getData()["movies"];

    foreach ($movies as $key => $movie) {
        if ($movie["id"] == $id) {
            unset($movies[$key]);

            $data = getData();
            $data["movies"] = $movies;

            $myFile = fopen("db.json", "w") or die("Unable to open file!");
            fwrite($myFile, json_encode($data, JSON_PRETTY_PRINT));
            fclose($myFile);

            break;
        }
    }
}




?>