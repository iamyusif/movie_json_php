<?php
 require "libs/vars.php"; 
 require "libs/func.php";
 
 
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST["title"];
    $description = $_POST["description"];
    $image = $_POST["image"];
    $url = $_POST["url"];

    createNewMovie($title, $description, $image, $url);

    header("Location: index.php");
 
 }
 
 ?>

<?php require "views/_header.php"; ?>
<?php require "views/navbar.php"; ?>
<div class="container my-3">
    <div class="row">
        <div class="col-9">
 
        <div class="card">
            <div class="card-body">
                <div class = "mb-3">
                <form action = "create.php" method = "POST" >
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                    </div>

                    <div class = "mb-3">
                    <label for="content">Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                    </div>

                    <div class = "mb-3">
                        <label for="image">Photo Url</label>
                        <input type="text" name="image" id="image" class="form-control">
                        </div>



                    <div class = "mb-3">
                        <label for="url">Url</label>
                        <input type="text" name="url" id="url" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                  
                
        </div>
    </div>
    <?php require "views/_footer.php"; ?>