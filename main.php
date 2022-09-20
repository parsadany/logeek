<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Logeek framework">
    <meta name="keywords" content="Logeek, php">
    <meta name="keywords" content="<?php $print_data = ""; foreach($meta_data as $this_meta) { $print_data = $print_data . $this_meta . ", "; } print(substr($print_data,0, strlen($print_data) - 2)) ?>">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title><?php print($title); ?></title>
</head>

<body>
    <?php
    include ROOT."shared/components/banner.php";
    include ROOT."shared/components/header.html";
    include ROOT."shared/components/nav-bar.php";
    include ROOT."shared/components/content.php";
    include ROOT."shared/components/footer.php";
    ?>
</body>

</html>

<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            console.log(this.getElementsByClassName("collapsible-button-svg"))
            var svg = this.getElementsByClassName("collapsible-button-svg")[0];
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
                svg.src = "/assets/expand.svg";
                svg.alt = "+";
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
                svg.src = "/assets/collapse.svg";
                svg.alt = "-";
            }
        });
    }
</script>