<div id="redirectionOptions">
    <?php
        foreach ($redirection as $value) {
            ?>
            <a id="<?php echo $value['id'] ?>" class="redirectionPart" href="<?php echo $value['link'] ?>">
                <h2><?php echo $value['name'] ?></h2>
                <p><?php echo $value['description'] ?></p>
            </a>
        <?php
        };
    ?>
</div>
