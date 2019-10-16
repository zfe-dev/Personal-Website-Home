<div id="footerPanel">
    <?php
    foreach ($footerPan['buttons'] as $value) {
        ?>
        <button type="button" id="<?php echo $value['cssId'] ?>" class="butt" onclick="location.href='<?php echo $value['link'] ?>'"><?php echo $value['name'] ?></button>
    <?php
    }
    ?>
    <p><?php echo $footerPan['copyrightName'] ?><i><?php echo $footerPan['copyrightTech'] ?></i></p>
</div>
