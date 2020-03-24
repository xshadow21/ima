<?php include 'header.php' ?>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<style>	
* { box-sizing: border-box; }

body { 
	font-family: sans-serif; 
	font-size: 12px;
}

.carousel {
}

.carousel-cell {
  width: 66%;
  height: 400px;
  margin-right: 50px;
}

.carousel-cell-image {
  display: block;
  max-height: 100%;
  margin: 0 auto;
  max-width: 100%;

  -webkit-transition: opacity 0.6s;
          transition: opacity 0.6s;
}

/* fade in lazy loaded image */
.carousel-cell-image.flickity-lazyloaded,
.carousel-cell-image.flickity-lazyerror {
}

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

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.activated:after {
  content: "\2212";
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
				<h2 style="color: #f68b1e;"><strong>Our realisations</strong></h2></br></br>
			</div>
		</div>

		<div class="row">
			<button class="accordion">Processing Food Industry</button>
			<div class="panel">
				<div class="carousel" data-flickity='{ "lazyLoad": true }'>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur accumulation ERS52 24V .jpg"/></div>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur a courroie pour recyclage de carton .jpg"/></div>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur M525 CDLR avec emballeuse automatique.jpg"/></div>
				</div>
			</div>

			<button class="accordion">Beverage Industry</button>
			<div class="panel">
				<div class="carousel" data-flickity='{ "lazyLoad": true }'>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur accumulation ERS52 24V .jpg"/></div>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur a courroie pour recyclage de carton .jpg"/></div>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur M525 CDLR avec emballeuse automatique.jpg"/></div>
				</div>
			</div>

			<button class="accordion">Packaging</button>
			<div class="panel">
				<div class="carousel" data-flickity='{ "lazyLoad": true }'>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur accumulation ERS52 24V .jpg"/></div>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur a courroie pour recyclage de carton .jpg"/></div>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur M525 CDLR avec emballeuse automatique.jpg"/></div>
				</div>
			</div>

			<button class="accordion">Mining and Querries sectors</button>
			<div class="panel">
				<div class="carousel" data-flickity='{ "lazyLoad": true }'>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur accumulation ERS52 24V .jpg"/></div>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur a courroie pour recyclage de carton .jpg"/></div>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur M525 CDLR avec emballeuse automatique.jpg"/></div>
				</div>
			</div>

			<button class="accordion">Recycling companies</button>
			<div class="panel">
				<div class="carousel" data-flickity='{ "lazyLoad": true }'>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur accumulation ERS52 24V .jpg"/></div>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur a courroie pour recyclage de carton .jpg"/></div>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur M525 CDLR avec emballeuse automatique.jpg"/></div>
				</div>
			</div>

			<button class="accordion">Cosmetic and Pharmaceutical industries</button>
			<div class="panel">
				<div class="carousel" data-flickity='{ "lazyLoad": true }'>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur accumulation ERS52 24V .jpg"/></div>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur a courroie pour recyclage de carton .jpg"/></div>
					<div class="carousel-cell"><img class="carousel-cell-image" src="../images/realisation/_Convoyeur M525 CDLR avec emballeuse automatique.jpg"/></div>
				</div>
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
</script>
<?php include 'footer.php' ?>