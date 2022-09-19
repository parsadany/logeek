<div class="collapsible-container">
<button type="button" class="collapsible">
    <div class="collapsible-button">
        <div class="collapsible-button-text">
            <?php
                print($contents["title"]);
            ?>
        </div>
        <div class="collapsible-button-shape">
            <img class="collapsible-button-svg" src="/assets/expand.svg" alt="+">
        </div>
    </div>
</button>
<div class="expanded-content">
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