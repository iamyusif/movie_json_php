<?php

require "libs/vars.php";

require "libs/func.php";



?>

<?php require "views/_header.php"; ?>
<?php require "views/navbar.php"; ?>
<div class="container my-3">
    <div class="row">

        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 50px" class="text-center">Image</th>
                        <th style="width: 130px;" class="text-center">Title</th>
                        <th style="width: 130px;" class="text-center">Url</th>
                        <th style="width: 30px;" class="text-center">Likes</th>
                        <th style="width: 30px;" class="text-center">Comments</th>
                        <th style="width: 30px;" class="text-center">Active</th>
                        <th style="width: 150px;" class="text-center">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach (getData()["movies"] as $movie): ?>
                        <tr>
                            <td class="text-center"><img src="<?php echo $movie["image"]; ?>" width="75px"></td>
                            <td class="text-center">
                                <?php echo $movie["title"]; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $movie["url"]; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $movie["likes"]; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $movie["comments"]; ?>
                            </td>
                            <?php if ($movie["active"]): ?>
                                <td class="text-center"><i class="fa-solid fa-check"></i></td>
                            <?php else: ?>
                                <td class="text-center"><i class="fa-solid fa-xmark"></i></td>
                            <?php endif; ?>
                            <td class="text-center">
                                <a href="edit.php?id=<?php echo $movie["id"]; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?id=<?php echo $movie["id"]; ?>" class="btn btn-sm btn-danger">Delete</a>
                                <?php if ($movie["active"]): ?>
                                    <a href="deactive.php?id=<?php echo $movie["id"]; ?>"
                                        class="btn btn-sm btn-secondary">Deactive</a>
                                <?php else: ?>
                                    <a href="active.php?id=<?php echo $movie["id"]; ?>"
                                        class="btn btn-sm btn-success">Active</a>
                                <?php endif; ?>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
    <?php require "views/_footer.php"; ?>