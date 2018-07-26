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

		<?php for ($i=0; $i < count($carpetas['nombre']); $i++) { ?>
			<div class="col-sm-3 isotopeSelector">
				<ul class="list-inline filter" align="center">
					<li class="active"><a data-filter="*" style="border-radius: 5px; border-color: orange; background-color: #ff891e; color:white;" >  <?= str_replace("_", " ", strtoupper($carpetas['nombre'][$i]))?>  </a></li>
				</ul>
				<br/>
				<article class="">
					<figure>
						<?php $url = base_url('xplorame/sub_galeria/') . $carpetas['nombre'][$i]; ?>
						<img src="<?= $carpetas['f_dir'][$i]; ?>" alt="" height="150" width="42" onclick="window.open('<?= $url ?>')">
						<div class="overlay-background">
							<div class="inner"></div>
						</div>
					</figure>
				</article>
			</div>
		<?php } ?>

	</div>
</section>