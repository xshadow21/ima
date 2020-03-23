<?php include 'header.php' ?>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

<style>	
* { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  background: #EEE;
}

.carousel img {
  display: block;
  height: 200px;
}

@media screen and ( min-width: 768px ) {
  .carousel img {
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
					<img src="../images/realisation/_Convoyeur accumulation ERS52 24V .jpg" style="width:100%"/>
					<img src="../images/realisation/_Convoyeur a courroie pour recyclage de carton .jpg" style="width:100%"/>
					<img src="../images/realisation/_Convoyeur M525 CDLR avec emballeuse automatique.jpg" style="width:100%"/>
				</div>
			</div>

			<button class="accordion">Embouteillage</button>
			<div class="panel">
				<div class="carousel"
					data-flickity='{ "imagesLoaded": true, "percentPosition": false }'>
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" alt="orange tree" />
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" alt="submerged" />
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" alt="look-out" />
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" alt="One World Trade" />
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" alt="drizzle" />
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" alt="cat nose" />
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