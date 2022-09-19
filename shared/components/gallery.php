<h2 style="text-align:center">
  <?php
  print($contents["title"]);
  ?>
</h2>

<div class="gallery-container">
  <?php
  $count = count($contents["data"]);
  $scale = 100 / $count;
  foreach ($contents["data"] as $i => $arr) {
  ?>
    <div class="slide">
      <div class="numbertext">
        <?php print($i . "/" . $count); ?>
      </div>
      <img class="img" src="<?php print($arr["src"]); ?>" style="width:100%">
      <div class="arrows-container">
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
      </div>
      <div class="caption-container">
        <p id="caption">
          <?php print($arr["caption"]); ?>
        </p>
      </div>
    </div>

  <?php
  }
  ?>


  <div class="roll">
    <?php
    foreach ($contents["data"] as $i => $arr) {
    ?>
      <div class="roll-images" style="width: <?php print($scale . "%"); ?>;">
        <img class="demo cursor" src="<?php print($arr["src"]); ?>" style="width:100%;" onclick="currentSlide(<?php print($i); ?>)" alt="<?php print($arr["caption"]); ?>">
      </div>
    <?php } ?>
  </div>
</div>

<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slide");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
      slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
  }
</script>