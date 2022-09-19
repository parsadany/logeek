<form action="<?php print($form_elements["action"]); ?>" method="POST">
<?php
$form_elements["description"];
foreach ($form_elements["inputs"] as $input) {
?>
    <br><label for="fname">
        <?php
            if ($input["type"] != "submit") {
            print($input["label"]);
?>
            </label><br>
            <input type="<?php print($input["type"]); ?>" id="<?php print($input["id"]); ?>" placeholder="<?php print($input["placeholder"]); ?>" name="<?php print($input["name"]); ?>">
<?php
        } else {
            ?>
            <br><input class="form-button" type="<?php print($input["type"]); ?>" id="<?php print($input["id"]); ?>" value="<?php print($input["label"]); ?>">
        <?php
        }
    }
    ?>
</form>