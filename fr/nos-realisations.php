<?php include 'header.php' ?>

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
				<p>Lorem ipsonsequat.</p>
			</div>

			<button class="accordion">Embouteillage</button>
			<div class="panel">
				<p>Lorem inim  ea commodo consequat.</p>
			</div>

			<button class="accordion">Emballage</button>
			<div class="panel">
				<p>Lorem ipsum d minim veniams nisi ut aliquip ex ea commodo consequat.</p>
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

$("document").ready(function() {
	acc[0].trigger('click');
});
</script>
<?php include 'footer.php' ?>