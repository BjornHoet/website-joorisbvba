<!DOCTYPE html>
<?php $title = 'Sanitair' ?>
<?php $carouselImage1 = 'sanitair-img3.jpg' ?>
<?php $carouselImage2 = 'sanitair-img2.jpg' ?>
<?php $carouselImage3 = 'sanitair-img1.jpg' ?>
<html lang="en">
<?php include("../includes/head.php"); ?> 

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<?php include("../includes/menu.php"); ?> 
	<?php include("../includes/carousel-subpage.php"); ?> 
	
    <!-- Container -->
    <div class="container row-spacing-lg">	
        <div class="row">
            <div class="col-md-12">
				<h5><i class="fa fa-shower"></i> Voor al je sanitair</h5>
				<div class="row">
					<div class="col-md-12">
						<p>Voor al je nieuwe installaties of renovatie van je huidige sanitair.</p>
					</div>
				</div>
				
				<div class="row-spacing-md"></div>
				
				<div class="row">
					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="text-center">Installaties</h4>
							</div>
							<div class="panel-body">				
								<ul>
									<li>Nieuwe Installaties</li>
									<li>Regensystemen</li>
									<li>Baden</li>
									<li>Wastafels</li>
									<li>Douches</li>
									<li>Toiletten</li>
									<li>Badkamermeubels</li>
									<li>Boilers</li>
									<li>Geisers</li>
									<li>Gasboilers</li>
									<li>Douchecabines</li>
									<li>Stoomcabines</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="text-center">Onderhoud</h4>
							</div>
							<div class="panel-body">				
								<ul>
									<li>Onderhoud Installaties</li>
									<li>Renovaties</li>
									<li>Ontkalkingen</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="text-center">Expertise</h4>
							</div>
							<div class="panel-body">				
								<ul>
									<li>Waterbehandeling</li>
									<li>Ontkalkers</li>
									<li>Pompen</li>
									<li>Riolering</li>
									<li>Opsporen van lekken</li>		
								</ul>
							</div>
						</div>
					</div>					
				</div>
				
				<div class="row-spacing-md"></div>

				<h5>Bekijk ook onze afdeling <a href="http://www.seniorencomfort.be" target="_blank">Seniorencomfort</a></h5>
				<div class="row">
					<div class="col-md-12">
						<p><a href="http://www.seniorencomfort.be" target="_blank">Seniorencomfort</a> is gespecialiseerd in het aanpassen van woningen voor senioren. Hierdoor kan je als senior langer in je eigen woning blijven, ook als het allemaal wat moeilijker gaat.</p>
					</div>
				</div>
				
				<div class="row-spacing-md"></div>
				<div class="row">
					<div class="col-md-12 text-center index-contact-us">
					   <a href="http://www.seniorencomfort.be" class="btn btn-default btn-lg" target="_blank"><span class="network-name">www.seniorencomfort.be</span></a>
					</div>					
				</div>
				
				<div class="row-spacing-md"></div>
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="text-center">Voor</h4>
							</div>
							<div class="panel-body">				
								<a href="/<?php echo $prefix ?>img/douches-serenite-voor.jpg" data-lightbox="serenite-set" data-title="KINEMAGIC Serenite - VOOR"><img class="img-responsive center-block img-sanitair" src="/<?php echo $prefix ?>img/douches-serenite-voor-thumb.jpg" /></a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="text-center">Na</h4>
							</div>
							<div class="panel-body">				
								<a href="/<?php echo $prefix ?>img/douches-serenite-na.jpg" data-lightbox="serenite-set" data-title="KINEMAGIC Serenite - NA"><img class="img-responsive center-block img-sanitair" src="/<?php echo $prefix ?>img/douches-serenite-na-thumb.jpg" /></a>
							</div>
						</div>
					</div>
				</div>
				<div class="well text-center">
					<p>De montage van de op maat gemaakte Kinémagic douche gebeurt op één dag zonder ingrijpende verbouwingen.</p>
					<div class="img-medium"><img class="img-responsive center-block" src="/<?php echo $prefix ?>img/sanitair-sc-1dag.png" /></div>
				</div>
            </div>
		</div>
	</div>

	<?php include("../includes/footer.php"); ?> 

	<?php include("../includes/jsGeneral.php"); ?>
	<?php include("../includes/jsCarousel.php"); ?> 
	<?php include("../includes/jsMenu.php"); ?> 
</body>
</html>
