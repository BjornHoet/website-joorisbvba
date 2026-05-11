<!DOCTYPE html>
<?php $title = 'Kleine interventie' ?>
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
				<p>Heb je problemen met je <span class="text-bold">verwarming, sanitair of elektriciteit</span> en wil je beroep doen op ons voor een <span class="text-bold">kleine interventie</span>. Wij sturen een bekwame vakman en helpen je uit de nood.</p>
				<p>Prijs voor een kleine interventie: <span class="text-lg text-bold">€ 399</span>. Deze prijs omvat:
					<ul>
						<li>Verplaatsingskosten regio Leuven</li>
						<li>Parkeerkosten</li>
						<li>1<sup>ste</sup> werkuur</li>
						<li>Administratie</li>
						<li>Gebruik gereedschap & meetapparatuur</li>
						<li>Storten van afvalmateriaal</li>
						<li>6% BTW*</li>						
					</ul>
					<span class="text-sm">
						Materiaal en stukken zijn niet inbegrepen. Betaling bij het vertrek van de technieker, contant of per bancontact.</br>
						De prijs per extra aangevangen ½ uur bedraagt € 50.</br>
						(*) Bij andere BTW tarieven dan 6% wordt de BTW verlegd en worden de prijzen aangepast.</br>
					</span>
				</p>
            </div>
		</div>

		<div class="row-spacing-md"></div>		
		<form name="sentMessage" id="contactGeneral" autocomplete="on" novalidate>
		<input type="hidden" name="Onderwerp" value="Bestelbon - Kleine interventies">
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
									<input type="checkbox" id="KleineInterventie-verwarming" name="CB-KleineInterventie-verwarming" value="Kleine interventie - Verwarming">
									<label for="KleineInterventie-verwarming">Interventie - Verwarming</label>
								</p>
								<p>
									<input type="checkbox" id="KleineInterventie-sanitair" name="CB-KleineInterventie-sanitair" value="Kleine interventie - Sanitair">
									<label for="KleineInterventie-sanitair">Interventie - Sanitair</label>
								</p>
								<p>
									<input type="checkbox" id="KleineInterventie-elektriciteit" name="CB-KleineInterventie-elektriciteit" value="Kleine interventie - Elektriciteit">
									<label for="KleineInterventie-elektriciteit">Interventie - Elektriciteit</label>
								</p>
								<div class="row">
									<div class="col-md-12">
										<div class="control-group form-group">
											<div class="controls">
												<label>Omschrijving van het probleem:</label>
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
