<?php include 'header.php' ?>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.activated, .accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
</style>

<div id="wrapper">
	<section class="container" style="margin-top: 80px;">
		<div class="row">
			<div class="col-md-6">
				<h2 style="color: #f68b1e;"><strong>Nos réalisations</strong></h2>
			</div>
		</div>

		<div class="row">
			<button id="firstAccordionElement" class="accordion">Agroalimentaire</button>
			<div class="panel">




				<!-- Slideshow container -->
				<div class="slideshow-container">

				<!-- Full-width images with number and caption text -->
				<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
					<img src="../images/realisation/_Convoyeur accumulation ERS52 24V .jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
					<img src="../images/realisation/_Convoyeur a courroie pour recyclage de carton .jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
					<img src="../images/realisation/_Convoyeur M525 CDLR avec emballeuse automatique.jpg" style="width:100%">
				</div>

				<!-- Next and previous buttons -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<br>

				<!-- The dots/circles -->
				<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
				</div>
			</div>

			<button class="accordion">Embouteillage</button>
			<div class="panel">
				<div data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
					<div><h3>1</h3></div>
					<div><h3>2</h3></div>
					<div><h3>3</h3></div>
					<div><h3>4</h3></div>
					<div><h3>5</h3></div>
					<div><h3>6</h3></div>
				</div>
			</div>

			<button class="accordion">Emballage</button>
			<div class="panel main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
				<div class="gallery-cell">...</div>
				<div class="gallery-cell">...</div>
				<div class="gallery-cell">...</div>
			</div>

			<button class="accordion">Mines et carrières</button>
			<div class="panel">
				<p>Lominim veniam, quis nostrud exa commodo consequat.</p>
			</div>

			<button class="accordion">Recyclage</button>
			<div class="panel">
				<p>Lorem iis nostrud exercitat commodo consequat.</p>
			</div>

			<button class="accordion">Produits pharmaceutiques</button>
			<div class="panel">
				<p>Loremuis nostrud exercitation ux ea commodo consequat.</p>
			</div>
		</div>
    <?php include 'conveyers-menu.php' ?>
	</section>
</div>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("activated");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

$('.panel').flickity({
  // options
  cellAlign: 'left',
  contain: true
});
</script>
<?php include 'footer.php' ?>