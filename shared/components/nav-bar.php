<?php
  $current_uri = $_SERVER['REQUEST_URI'];
?>
<div class="nav-bar" id="nav-bar">
  <div class="container">
    <?php
    foreach ($nav_bar as $option => $uri) {
      if (str_contains($current_uri ,$uri)) {
        ?>
        <a href="<?php print($uri) ?>" class="nav-bar-options-active">
          <div class="nav-bar-options">
            <?php
            print($option);
            ?>
          </div>
          </a>
        <?php

      } else {
    ?>
    <a href="<?php print($uri) ?>" class="nav-bar-options">
      <div class="nav-bar-options">
        <?php
        print($option);
        ?>
      </div>
      </a>
    <?php

}
    }
    ?>
    <!--  options block in nav-bar
        <div class="nav-bar-options">
            Name
        </div>
        -->
  </div>
</div>
<script>
  window.onscroll = function() {
    myFunction()
  };

  var header = document.getElementById("nav-bar");
  var sticky = header.offsetTop;

  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
</script>