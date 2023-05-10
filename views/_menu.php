<ul class="list-group">

    <?php foreach(getData()["categories"] as $category) : ?>

        <li class="list-group-item">
            <a href="<?php echo "movies/".$category["id"] ?>"><?php echo $category["name"] ?></a>
            
        </li>

    <?php endforeach; ?>

</ul>

        
