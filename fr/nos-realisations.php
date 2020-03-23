<?php include 'header.php' ?>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<style>	
* { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  background: #FAFAFA;
}

.carousel-cell {
  width: 66%;
  height: 400px;
  margin-right: 10px;
  background: #333;
}

.carousel-cell-image {
  display: block;
  max-height: 100%;
  margin: 0 auto;
  max-width: 100%;
  opacity: 0;
  -webkit-transition: opacity 0.4s;
          transition: opacity 0.4s;
}

/* fade in lazy loaded image */
.carousel-cell-image.flickity-lazyloaded,
.carousel-cell-image.flickity-lazyerror {
  opacity: 1;
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
			<button class="accordion">Agroalimentaire</button>
			<div class="panel">
				<div class="carousel" data-flickity='{ "lazyLoad": true }'>
					<div class="carousel-cell"><img src="../images/realisation/_Convoyeur accumulation ERS52 24V .jpg"/></div>
					<div class="carousel-cell"><img src="../images/realisation/_Convoyeur a courroie pour recyclage de carton .jpg"/></div>
					<div class="carousel-cell"><img src="../images/realisation/_Convoyeur M525 CDLR avec emballeuse automatique.jpg"/></div>
				</div>
			</div>

			<button class="accordion">Embouteillage</button>
			<div class="panel">
				<div class="carousel" data-flickity='{ "lazyLoad": true }'>
					<div class="carousel-cell">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" alt="orange tree" />
					</div>
					<div class="carousel-cell">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" alt="One World Trade" />
					</div>
					<div class="carousel-cell">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" alt="drizzle" />
					</div>
					<div class="carousel-cell">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" alt="cat nose" />
					</div>
					<div class="carousel-cell">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" alt="contrail" />
					</div>
					<div class="carousel-cell">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" alt="golden hour" />
					</div>
					<div class="carousel-cell">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" alt="flight formation" />
					</div>
				</div>
			</div>

			<button class="accordion">Emballage</button>
			<div class="panel">
				sdfsdf
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
</script>
<?php include 'footer.php' ?>