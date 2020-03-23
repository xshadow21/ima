<?php include 'header.php' ?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!---<link type="text/css" rel="stylesheet" href="../libs/materialize/css/materialize.min.css"  media="screen,projection"/>-->


<div id="wrapper">
	<section class="container" style="margin-top: 80px;">
		<div class="row">
			<div class="col-md-6">
				<h2 style="color: #f68b1e;"><strong>Nos réalisations</strong></h2>
			</div>
		</div>

		<ul class="collapsible">
			<li>
				<div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
				<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">place</i>Second</div>
				<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
			</li>
			<li>
				<div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
				<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
			</li>
		</ul>

		<div class="row">
			Agroalimentaire
		</div>

		<div class="row">
			Embouteillage
		</div>

		<div class="row">
			Emballage
		</div>

		<div class="row">
			Mines et carrières
		</div>

		<div class="row">
			Recyclage
		</div>

		<div class="row">
			Produits pharmaceutiques
		</div>
    <?php include 'conveyers-menu.php' ?>
	</section>
</div>

<script type="text/javascript" src="../libs/materialize/js/materialize.min.js">
$(document).ready(function(){
    $('.collapsible').collapsible();
  });
</script>
<?php include 'footer.php' ?>