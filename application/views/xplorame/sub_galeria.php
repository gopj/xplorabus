<!-- PAGE TITLE -->
<section class="pageTitle" style="background-image:url(<?=base_url('img/pages/page-title-bg8.jpg');?>);">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="titleTable">
							<div class="titleTableInner">
								<div class="pageTitleInfo">
									<h1><?= str_replace("_", " ", $gallery_name) ?></h1>
									<div class="under-border"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<!-- WHITE SECTION FILTER-->
<section class="mainContentSection">
	<div class="container">
		<div class="row isotopeContainer" id="container">
			<?php foreach ($imgs as $imagen) { ?>
				<div class="col-sm-3 isotopeSelector">
					<article class="">
						<figure>
							<img src="<?= $f_dir . $imagen; ?>" alt="">
							<div class="overlay-background">
								<div class="inner"></div>
							</div>
							<div class="overlay">
								<a class="fancybox-pop" rel="portfolio-1" href="<?= $f_dir . $imagen; ?>"> </a>
							</div>
						</figure>
					</article>
				</div>
			<?php } ?>
		</div>
	</div>
</section>