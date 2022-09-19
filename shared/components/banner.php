<?php 
if (isset($banner)) {
    ?>
    <div class="banner <?php if ($banner["status"] == 0) { print("error"); } ?>">
        <p>
            <?php 
            print($banner["message"]);
            ?>
        </p>
    </div>
    <?php
  }
?>