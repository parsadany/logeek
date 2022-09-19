<div class="article-container">
    <div class="article-title">
        <h3>
            <?php
            print($contents["title"]);
            ?>
        </h3>
    </div>
    <div class="article-info">
        <div class="article-author">
            Written by
            <?php
            print($contents["data"]["written_by"]);
            ?>
        </div>
        <div class="article-date">
            last update on
            <?php
            print($contents["data"]["last_update"]);
            ?>
        </div>

    </div>
    <div class="article-body">
        <?php
        print($contents["data"]["body"]);
        ?>
    </div>

    <div class="article-gallery-container">
        some images
    </div>
</div>