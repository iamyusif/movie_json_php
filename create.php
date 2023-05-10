<?php require "libs/vars.php"; require "libs/func.php";?>

<?php require "views/_header.php"; ?>
<?php require "views/navbar.php"; ?>
<div class="container my-3">
    <div class="row">
        <div class="col-3">
           <?php require "views/_menu.php"; ?>
        </div>
        <div class="col-9">
 
        <div class="card">
            <div class="card-body">
                <div class = "mb-3">
                <form action = "index.php" method = "POST" >
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
                        <label for="links">Url</label>
                        <input type="text" name="links" id="links" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                  
                
        </div>
    </div>
    <?php require "views/_footer.php"; ?>