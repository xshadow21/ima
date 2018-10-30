<?php include '../header.php' ?>
<style>
	h3 {
		padding:0;
		margin:0 0 10px 0
	}

	h1 {
		padding:0;
		margin:0;
		color: #f68b1e
	}

	.marge {
		padding-top:75px
	}

	.blog-list-container a {
		color:hsla(0,0%,100%,1.00)
	}

	.blog-list-container li {
		padding-top:10px;
	}
</style>
<!-- WRAPPER -->
<div id="wrapper" class="wrapper" style="padding-top: 160px;">
	<section class="container">
		<div class="col-sm-8 marge">
			<?php 
				$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				$filename = explode("?id=", $actual_link);

				echo(file_get_contents("./content/" . $filename[1]));
			?>
		</div>
		<div class="col-sm-4 marge">
			<div class="Boite blog-list-container">
				<h3>Liste des <strong>blogues</strong></h3>
				<ul>
					<?php 
						$dir = new DirectoryIterator(dirname("./content/*"));
						foreach ($dir as $file) {
							if (!$file->isDot()) {
								$dom = new DOMDocument;
								$path = "./content/" . $file->getFilename();
								@$dom->loadHTML(mb_convert_encoding(file_get_contents($path), 'HTML-ENTITIES', "UTF-8"));

								$title = $dom->getElementsByTagName('h1')->item(0);

								echo("<li class='margin-bottom-15'>");
								echo("<a href='/fr/blog/blogRenderer?id=$file' target='_parent' class='tools_color-black'>" . $title->textContent . "</a></li>");
							}
						}
					?>
				</ul>
			</div>
		</div>
	</section>
</div>
<?php include '../footer.php' ?>