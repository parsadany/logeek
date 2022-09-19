<div class="content">
    <div class="side-bar">
        sidebar contents
    </div>
    <div class="main-content">

        <!-- Content Code Must be added! -->
        <?php
        include ROOT.'shared/content-manager.php';
        content_manager($contents);
        ?>
    </div>
</div>
<!--
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
                svg.src = "../../assets/expand.svg";
                svg.alt = "+";
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
                svg.src = "../../assets/collapse.svg";
                svg.alt = "-";
            }
        });
    }
</script>

-->