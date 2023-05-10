<?php
$countsF = count((getData()["movies"]));


if ($countsF == 0) {
    echo "<h2>Sorry, no movies found</h2>";
    echo "<p><a href='index.php'>Return to home page</a></p>";
    exit;
}
?>

<h2>Popular Movies </h2>
<p> Movies count :
    <?php echo $countsF; ?>
</p>