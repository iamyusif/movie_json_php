<?php
foreach (getData()["movies"] as $movie):
    ?>
    <div class="card mb-3">
        <div class="row">
            <div class="col-3">
                <img src="<?php echo $movie["image"]; ?>" width="220px" height="auto" alt="<?php echo $movie["title"]; ?>">
            </div>
            <div class="col-9">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="<?php echo $movie["url"]; ?>">
                            <?php echo $movie["title"]; ?>
                        </a>
                    </h5>
                    <p class="card-text">
                        <?php echo $movie["description"]; ?>
                    </p>
                    <div>
                        <span class="badge bg-primary">

                            <?php
                            if ($movie["comments"] > 1) {
                                echo $movie["comments"] . " comments";
                            } else {
                                echo "";
                            }
                            ?>
                        </span>
                        <span class="badge bg-primary m-1">
                            <?php
                            if ($movie["likes"] > 1) {
                                echo $movie["likes"] . " likes";
                            } else {
                                echo "";

                            }
                            ?>
                        </span>

                        <span class="badge bg-primary m-1">
                            <?php
                            if ($movie["views"] > 1) {
                                echo $movie["views"] . " views";
                            } else {
                                echo "";

                            }
                            ?>
                        </span>
                        <span class="badge bg-primary m-1">
                            <?php
                            if ($movie["imdb"] > 1) {
                                echo $movie["imdb"] . " imdb";
                            } else {
                                echo "";

                            }
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>