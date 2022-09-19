<div class="tables">
    <h3>
        <?php print($contents["title"]); ?>
    </h3>
    <table style="width:100%">
        <tr>
            <?php
            $columns = $contents["data"]["columns"];
            $rows = $contents["data"]["rows"];
            foreach ($columns as $column => $type) {
            ?>
                <th>
                    <?php print($column); ?>
                </th>
            <?php
            }
            ?>
        </tr>
        <?php
        foreach ($rows as $row) {
        ?>
            <tr>
                <?php
                foreach ($row as $subject => $object) {
                ?>
                    <td>
                        <?php
                        if ($columns[$subject] == "text") {
                        ?>
                            <p>
                                <?php print($object); ?>
                            </p>
                        <?php
                        } elseif ($columns[$subject] == "link") {
                        ?>
                            <a href="<?php print($object); ?>">
                                <div class="table-link">
                                    <img class="table-link-svg" src="/assets/download.svg" alt="&#x25BC;">
                                </div>
                            </a>
                        <?php
                        } elseif ($columns[$subject] == "img") {
                        ?>
                            <div class="table-link">
                                <img class="table-link-svg" src="<?php print($object); ?>" alt="&#x25BC;">
                            </div>


                        <?php
                        } else {
                        ?>
                            <p>
                                <?php print($object); ?>
                            </p>
                        <?php
                        }
                        ?>
                    </td>
                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </table>
</div>