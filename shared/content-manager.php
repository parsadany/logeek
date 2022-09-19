<?php
function content_manager($contents)
{
    if ($contents["type"] == "list") {
        foreach ($contents["data"] as $data) {
            content_manager($data);
        }
    }
    elseif ($contents["type"] == "collapsible") {
        include ROOT."shared/components/collapsible.php";
    }
    elseif ($contents["type"] == "card") {
        include ROOT."shared/components/cards.php";
    }
    elseif ($contents["type"] == "form") {
        include ROOT."shared/components/forms.php";
    }
    elseif ($contents["type"] == "table") {
        include ROOT."shared/components/tables.php";
    }
    elseif ($contents["type"] == "article") {
        include ROOT."shared/components/articles.php";
    }
    elseif ($contents["type"] == "gallery") {
        include ROOT."shared/components/gallery.php";
    }
}
?>