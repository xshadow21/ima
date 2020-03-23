<?php include 'header.php' ?>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<style>	
* { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  background: #EEE;
}

.carousel-cell {
  margin-right: 20px;
  overflow: hidden;
}

.carousel-cell img {
  display: block;
  height: 200px;
}

@media screen and ( min-width: 768px ) {
  .carousel-cell img {
    height: 400px;
  }
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
				<div class="carousel"
					data-flickity='{ "imagesLoaded": true, "percentPosition": false }'>
					<img src="../images/realisation/_Convoyeur accumulation ERS52 24V .jpg"/>
					<img src="../images/realisation/_Convoyeur a courroie pour recyclage de carton .jpg"/>
					<img src="../images/realisation/_Convoyeur M525 CDLR avec emballeuse automatique.jpg"/>
				</div>
			</div>

			<button class="accordion">Embouteillage</button>
			<div class="panel">
				<div class="carousel">
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

var $carousel = $('.carousel').flickity({
  imagesLoaded: true,
  percentPosition: false,
});

var $imgs = $carousel.find('.carousel-cell img');
// get transform property
var docStyle = document.documentElement.style;
var transformProp = typeof docStyle.transform == 'string' ?
  'transform' : 'WebkitTransform';
// get Flickity instance
var flkty = $carousel.data('flickity');

$carousel.on( 'scroll.flickity', function() {
  flkty.slides.forEach( function( slide, i ) {
    var img = $imgs[i];
    var x = ( slide.target + flkty.x ) * -1/3;
    img.style[ transformProp ] = 'translateX(' + x  + 'px)';
  });
});
</script>
<?php include 'footer.php' ?>