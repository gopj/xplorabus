<?php 
	echo $imgs[0];
?>


		<!-- PAGE TITLE -->
<section class="pageTitle" style="background-image:url(<?=base_url('img/pages/page-title-bg8.jpg');?>);">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="titleTable">
							<div class="titleTableInner">
								<div class="pageTitleInfo">
									<h1>Gallería</h1>
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
		<div class="row">
			<div class="col-xs-12">
				<div class="filter-container isotopeFilters">
					<ul class="list-inline filter">
						<li class="active"><a href="#" data-filter="*">Carnaval 2017</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row isotopeContainer" id="container">
			<?php foreach ($imgs as $imagen) { ?>
				<div class="col-sm-3 isotopeSelector">
					<article class="">
						<figure>
							<img src="<?= $f_dir . $imagen; ?>" alt="">
							<!-- <h4>maldives tour</h4> -->
							<div class="overlay-background">
								<div class="inner"></div>
							</div>
							<div class="overlay">
								<a class="fancybox-pop" rel="portfolio-1" href="<?= $f_dir . $imagen; ?>">
									<span class="overlayInfo">
										<!-- <h5>from <span>$1000</span></h5>
										<p><i class="fa fa-calendar" aria-hidden="true"></i>27 jan, 2016</p> -->
									</span>
								</a>
							</div>
						</figure>
					</article>
				</div>
			<?php } ?>
		</div>
	</div>
</section>