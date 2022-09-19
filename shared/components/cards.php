<div class="card-container">
    <div class="card-title">
        <?php
        print($contents["title"]);
        ?>
    </div>
    <div class="card-content">
        <div class="members-picture">
            <img src="<?php print($contents["picture"]) ?>" alt="<?php print($contents["title"]); ?>">
        </div>
        <div class="members-detail">
            <?php
            //echo (print_r($content, true));
            //print('<br><br>');
            if ($contents["data"]["type"] == "content") {
                foreach ($contents["data"]["data"] as $key => $value) {
                    if ($key != "type" and $key != "picture") {
                        print($value);
                        print("<br>");
                    }
                }
            } else {
                content_manager($contents["data"]);
            }
            ?>
        </div>

    </div>
</div>