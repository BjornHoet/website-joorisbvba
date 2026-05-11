<!DOCTYPE html>
<?php $title = 'Wettelijk onderhoud' ?>
<html lang="en">
<?php include("../includes/head.php"); ?> 

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<?php include("../includes/menu.php"); ?> 
	
    <!-- Container -->
    <div class="container row-spacing-lg">	
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header-middle"><?php echo $title ?></h2>
            </div>
		</div>
		
		<div class="row-spacing-md"></div>
        <div class="row">
            <div class="col-md-12">
				<p>Heb je een gasketel in huis die dienst doet als centrale verwarming? Dan ben je <span class="text-bold">wettelijk verplicht</span> een <span class="text-bold">tweejaarlijks onderhoud</span> te laten doorvoeren.</p>
				<p>Prijs voor dit onderhoud: <span class="text-lg text-bold">€ 240 (€ 220 bestaande klanten)</span>. Deze prijs omvat:
					<ul>
						<li>Afstellen, nazicht verluchting, gaslektest & bijkomende metingen</li>
						<li>Verbrandingsattest, reinigingsattest & keuringsattesten G1/G2</li>
						<li>Verplaatsingskosten regio Leuven</li>
						<li>Parkeerkosten</li>
						<li>1<sup>ste</sup> werkuur</li>
						<li>Administratie</li>
						<li>6% BTW*</li>
					</ul>
					<span class="text-sm">
						Betaling bij het vertrek van de technieker, contant of per bancontact.</br>
						Bij extra herstellingen, buiten het wettelijk nazicht met attesten, wordt er een extra kost aangerekend van € 80 per aangevangen uur.</br>
						(*) Bij andere BTW tarieven dan 6% wordt de BTW verlegd en worden de prijzen aangepast.</br>
					</span>
				</p>
			</div>
		</div>

		<div class="row-spacing-md"></div>		
		<form name="sentMessage" id="contactGeneral" autocomplete="on" novalidate>
		<input type="hidden" name="Onderwerp" value="Bestelbon - Wettelijk onderhoud gasketel">
		<h5>Bestelbon</h5>
		<p>Vul onderstaande bestelbon in. We nemen zo snel mogelijk contact met je op om een afspraak te maken.</br>
		<span class="text-sm">Prijzen zoals aangegeven op deze website. Bij 6% BTW, gelieve het BTW attest in te vullen.</span></p>
		<div class="row-spacing-md"></div>	
		
        <div class="row">
            <div class="col-md-7">
				<div class="row">
					<div class="col-md-12">
						<div class="control-group form-group label-margin">
							<div class="controls">
								<p>
									<input type="checkbox" id="WettelijkOnderhoud-bestaandeklant" name="BestaandeKlant">
									<label for="WettelijkOnderhoud-bestaandeklant">Bestaande klant?</label>
								</p>
								<p class="form-inline">
									<label for="WettelijkOnderhoud-MerkKetel">Merk ketel</label>
									<input type="hidden" name="LB-WettelijkOnderhoud-MerkKetel-Label" value="Merk ketel" />
									<input type="text" id="WettelijkOnderhoud-MerkKetel" name="CB-WettelijkOnderhoud-MerkKetel" class="form-control" />
								</p>
								<p class="form-inline">
									<label for="WettelijkOnderhoud-Type">Type ketel</label>
									<input type="hidden" name="LB-WettelijkOnderhoud-TypeKetel-Label" value="Type ketel" />
									<input type="text" id="WettelijkOnderhoud-TypeKetel" name="CB-WettelijkOnderhoud-TypeKetel" class="form-control" />
								</p>
								<p class="form-inline">
									<label for="WettelijkOnderhoud-Bouwjaar">Bouwjaar</label>
									<input type="hidden" name="LB-WettelijkOnderhoud-Bouwjaar-Label" value="Bouwjaar" />
									<select class="form-control selectpicker" id="WettelijkOnderhoud-Bouwjaar" name="CB-WettelijkOnderhoud-Bouwjaar">
										<option></option>
									<?php 
										$year = date("Y");
										
										for ($i = 0 ; $i < 30; $i++){
									?>
									  <option><?php echo $year ?></option>
									<?php
										$year--;
										} ?>
										<option>Geen idee</option>
									</select>									
								</p>
								<div class="row">
									<div class="col-md-12">
										<div class="control-group form-group">
											<div class="controls">
												<label>Extra informatie:</label>
												<textarea rows="10" cols="100" class="form-control" name="Informatie" id="message" maxlength="999" style="resize:none"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php include("../includes/contactGeneral.php"); ?>	
		</div>
		</form>				
		
		<!-- 
		<div class="row-spacing-md"></div>	
        <div class="row">
            <div class="col-md-12">
				<p><h5>Hier vind je het attest voor de verlaagde BTW</h5></p>
				<p><div class="text-left"><a href="attestbtw.php" class="btn btn-default btn-lg"><span class="network-name">Attest verlaagde BTW</span></a></div></p>
            </div>
		</div> -->
	</div>

	<?php include("../includes/footer.php"); ?> 
	
	<?php include("../includes/jsGeneral.php"); ?>
	<?php include("../includes/jsCarousel.php"); ?> 
	<?php include("../includes/jsMenu.php"); ?> 
	<script src="/<?php echo $prefix ?>js/jqBootstrapValidation.js"></script>
	<script src="/<?php echo $prefix ?>js/contact_general.js"></script>		
</body>
</html>
