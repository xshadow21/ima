<?php include 'header.php' ?>
<style>
	p {
		color: #000;
	}

	p strong {
		color: #f68b1e;
	}

	.col-sm-8 {
		margin: 10px
	}
</style>
<!-- WRAPPER -->
<div id="wrapper" class="wrapper" style="padding-top: 160px;">
	<section class="container">
		<div class="row">
		<?php 
				$dir = new DirectoryIterator(dirname("./blog/content/*"));

				$fileList = array();
				foreach ($dir as $fileinfo) {
					if (!$fileinfo->isDot()) {   
						$fileList[$fileinfo->getMTime()] = $fileinfo->getFilename();
					}
				}
				krsort($fileList);

				foreach ($fileList as $file) {
					$dom = new DOMDocument;
					$path = "./blog/content/" . $file;
					@$dom->loadHTML(mb_convert_encoding(file_get_contents($path), 'HTML-ENTITIES', "UTF-8"));

					$title = $dom->getElementsByTagName('h1')->item(0);
					$image = $dom->getElementsByTagName('img')->item(0);
					$subtitle = $dom->getElementsByTagName('p')->item(0);
					$description = $dom->getElementsByTagName('p')->item(1);

					echo("<div class='col-sm-8'><a href='/en/blog/blogRenderer?id=$file'>");
					// echo(var_dump($image));
					echo("<p><strong>" . $title->textContent . "</strong><br/>");
					echo($subtitle->textContent);
					echo("<p>" . $description->textContent . "</p></p></a></div>");
				}
			?>
		</div>
	</section>
</div>
<?php include 'footer.php' ?>