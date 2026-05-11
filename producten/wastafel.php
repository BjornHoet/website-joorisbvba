<?php 
    session_start();
	$title = 'Verplaatsbare wastafel';
?>
<!DOCTYPE html>
<html lang="en">
<?php include("../includes/head.php"); ?> 

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onload="clearTotals()">
	<?php include("../includes/menu.php"); ?> 
	
    <!-- Container -->
    <div class="container row-spacing-lg">	
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header-middle"><?php echo $title ?></h2>
            </div>

			<div class="col-md-12">
				<h5>De veiligheidsoplossing voor jezelf en je klanten tegen Covid-19</h5>
			</div>
		</div>
		
		<div class="well well-product">
			<div class="row">
				<div class="col-md-6">
					<a href="/<?php echo $prefix ?>img/wastafel-algemeen.jpg" data-lightbox="wastafel-set" data-title="Verplaatsbare Wastafel"><img class="img-responsive center-block img-sanitair-voor" src="/<?php echo $prefix ?>img/wastafel-algemeen.jpg" /></a>
				</div>
				<div class="col-md-6">
					<p><span class="text-blue">Sanitaire hygiënemodule Complex pro</span></p>
					<p>Onze veiligheidsoplossing is ideaal om te plaatsen bij de ingang van je zaak, je werkruimte, je kantoor, ... Deze wastafel kan verplaatst worden en is bedoelt om je klanten op een veilige manier te ontvangen. De elektronische
					   kraan zorgt ervoor dat je contactloos je handen kan wassen. Samen met de zeepdispenser en de papieren handdoekverdeler zorgt dit voor een complete veiligheidsoplossing.</p>
					<p><span class="text-blue">Belangrijkste kenmerken:</span></p>
					<ul>
						<li>Wastafelmeubel met inbouwwastafel en wand</li>
						<li>Kraan met sensor (elektronische kraan)</li>
						<li>Vaste of flexibele aansluiting</li>
						<li>Zeep/Gel dispenser</li>
						<li>Handdoekverdeler voor papieren handdoekjes</li>
						<li>Houder voor mondmaskerdoos</li>
						<li>Papiermand</li>
						<li>Vuilwaterpomp (optie - <span class="text-blue">Complex Plus</span>)</li>
					</ul>
				</div>
			</div>
		</div>	
		
		<div class="row-spacing-md"></div>		
		<form name="sentMessage" id="contactGeneral" autocomplete="on" novalidate>
		<input type="hidden" name="Onderwerp" value="Bestelbon - Verplaatsbare wastafel">
		<h5>Bestelbon</h5>
		<p>Vul onderstaande bestelbon in. We nemen zo snel mogelijk contact met je op om een afspraak te maken.</br>
		<span class="text-sm">Ondergetekende besteld hierbij de aangeduide producten. Betaling: 1/3 bij bestelling, overige bij levering. Plaatsing mogelijk in regio, op aanvraag.</span></p>
		<div class="row-spacing-md"></div>		

        <div class="row">
            <div class="col-md-7">
				<div class="row">
					<div class="col-md-12">
						<div class="control-group form-group label-margin">
							<div class="controls">
								<p>
									Model Complex Pro - <span class="text-bold">€ 1.841</span> excl btw - <span class="text-bold">€ 2.228</span> incl. btw
									<div class="margin-left-sm">
										<div class="row">
											<div class="col-md-12">
												<span style="white-space: nowrap;">
												Aantal:
												<select style="display:inline-block; max-width:100px;" class="form-control" name="CB-Wastafel-complexpro" id="Wastafel-complexpro" value="Sanitaire hygienemodule Complex Pro" onchange="changeTotal(this)">
												  <option value="Sanitaire hygienemodule Complex Pro: 0">0</option>
												  <option value="Sanitaire hygienemodule Complex Pro: 1x">1</option>
												  <option value="Sanitaire hygienemodule Complex Pro: 2x">2</option>
												  <option value="Sanitaire hygienemodule Complex Pro: 3x">3</option>
												  <option value="Sanitaire hygienemodule Complex Pro: 4x">4</option>
												  <option value="Sanitaire hygienemodule Complex Pro: 5x">5</option>
												  <option value="Sanitaire hygienemodule Complex Pro: 6x">6</option>
												  <option value="Sanitaire hygienemodule Complex Pro: 7x">7</option>
												  <option value="Sanitaire hygienemodule Complex Pro: 8x">8</option>
												  <option value="Sanitaire hygienemodule Complex Pro: 9x">9</option>
												  <option value="Sanitaire hygienemodule Complex Pro: 10x">10</option>
												</select>
												<span class="margin-left-sm">Totaal: € <span id="complexpro-totaal">0</span> excl btw</span>
												</span>
											</div>
										</div>
									</div>
								</p>
								
								<div class="row-spacing-md"></div>
								<p>
									Model Complex Plus (met vuilwaterpomp) - <span class="text-bold">€ 2.359</span> excl btw - <span class="text-bold">€ 2.854</span> incl. btw
									<div class="margin-left-sm">
										<div class="row">
											<div class="col-md-12">
												<span style="white-space: nowrap;">
												Aantal:
												<select style="display:inline-block; max-width:100px;" class="form-control" name="CB-Wastafel-complexplus" id="Wastafel-complexplus" value="Sanitaire hygienemodule Complex Plus" onchange="changeTotalPlus(this)">
												  <option value="Sanitaire hygienemodule Complex Plus: 0">0</option>
												  <option value="Sanitaire hygienemodule Complex Plus: 1x">1</option>
												  <option value="Sanitaire hygienemodule Complex Plus: 2x">2</option>
												  <option value="Sanitaire hygienemodule Complex Plus: 3x">3</option>
												  <option value="Sanitaire hygienemodule Complex Plus: 4x">4</option>
												  <option value="Sanitaire hygienemodule Complex Plus: 5x">5</option>
												  <option value="Sanitaire hygienemodule Complex Plus: 6x">6</option>
												  <option value="Sanitaire hygienemodule Complex Plus: 7x">7</option>
												  <option value="Sanitaire hygienemodule Complex Plus: 8x">8</option>
												  <option value="Sanitaire hygienemodule Complex Plus: 9x">9</option>
												  <option value="Sanitaire hygienemodule Complex Plus: 10x">10</option>
												</select>
												<span class="margin-left-sm">Totaal: € <span id="complexplus-totaal">0</span> excl btw</span>
												</span>
											</div>
										</div>
									</div>
								</p>

								<div class="row-spacing-md"></div>
								<p>
								<span class="text-bold">Algemeen totaal: € <span id="complex-totaal">0</span></span> excl btw - <span class="text-bold" id="complex-totaalbtw">0</span> incl btw
								<input type="hidden" class="form-control" name="CB-Totaal-bedrag" value="Totaal Bedrag: €0" id="complex-totaal-form">
								</p>

								<div class="row-spacing-md"></div>
								<div class="row">
									<div class="col-md-12">
										<div class="control-group form-group">
											<div class="controls">
												<label>Opmerkingen:</label>
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

			<?php include("../includes/contactProfessioneel.php"); ?>	
		</div>
		</form>				
	</div>

	<?php include("../includes/footer.php"); ?> 

	<?php include("../includes/jsGeneral.php"); ?>
	<?php include("../includes/jsCarousel.php"); ?> 
	<?php include("../includes/jsMenu.php"); ?> 
	<script src="/<?php echo $prefix ?>js/jqBootstrapValidation.js"></script>
	<script src="/<?php echo $prefix ?>js/contact_general.js"></script>			
	<script>
		function clearTotals() {
			document.getElementById("complexpro-totaal").innerHTML = '0';
			document.getElementById("complexplus-totaal").innerHTML = '0';
			document.getElementById("complex-totaal").innerHTML = '0';
			document.getElementById("complex-totaalbtw").innerHTML = '0';
			}
		
		function changeTotal(selectObject) {
			var value = selectObject.options[selectObject.selectedIndex].text;
			var total = value * 1841;
			document.getElementById("complexpro-totaal").innerHTML = total;
			
			var valPro = parseInt(document.getElementById("complexpro-totaal").innerHTML);
			var valPlus = parseInt(document.getElementById("complexplus-totaal").innerHTML);
			var totaal = valPro + valPlus;
			var totaalbtw = totaal * 1.21;
			document.getElementById("complex-totaal").innerHTML = totaal;
			document.getElementById("complex-totaalbtw").innerHTML = totaalbtw;
			document.getElementById("complex-totaal-form").value = 'Totaalbedrag: ' + totaal + ' excl BTW';
			}
			
		function changeTotalPlus(selectObject) {
			var value = selectObject.options[selectObject.selectedIndex].text;
			var total = value * 2359;
			document.getElementById("complexplus-totaal").innerHTML = total;

			var valPro = parseInt(document.getElementById("complexpro-totaal").innerHTML);
			var valPlus = parseInt(document.getElementById("complexplus-totaal").innerHTML);
			var totaal = valPro + valPlus;
			var totaalbtw = totaal * 1.21;
			document.getElementById("complex-totaal").innerHTML = totaal;
			document.getElementById("complex-totaalbtw").innerHTML = totaalbtw;
			document.getElementById("complex-totaal-form").value = 'Totaalbedrag: ' + totaal + ' excl BTW';
			}
	</script>
</body>
</html>
