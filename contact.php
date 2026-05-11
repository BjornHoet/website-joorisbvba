<!DOCTYPE html>
<?php $title = 'Contact' ?>
<html lang="en">
<?php include("includes/head.php"); ?> 

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<?php include("includes/menu.php"); ?> 
	
    <!-- Container -->
    <div class="container row-spacing-lg">	
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header-middle"><?php echo $title ?></h2>
            </div>

			<div class="col-md-5 col-md-offset-1">
				<p>Vraag bij ons telefonisch of via e-mail een <span class="text-blue">vrijblijvende offerte</span> aan!
				Mail ons een duidelijke foto of een gedetailleerde omschrijving door
				van het werk. Wij maken op basis van uw foto of omschrijving 
				een schatting van de prijs van de werken.</p>
				<p>Wij berekenen een <span class="text-blue">exacte prijs op plan!</span></p>
				
				<div class="row-spacing-md"></div>
				<h5>Contactgegevens</h5>
				<p><i class="fa fa-home contactdetails"></i> Tiensevest 38, 3000 Leuven</p>
				<p><i class="fa fa-phone contactdetails"></i> <a href="tel:016238696">016/23 86 96</a></p>
				<p><i class="fa fa-mobile contactdetails"></i> <a href="tel:0495525324">0495/52 53 24</a></p>
				<p><i class="fa fa-envelope-o contactdetails"></i> <a href="mailto:joorisbvba@gmail.com?Subject=Contact vanaf de website">joorisbvba@gmail.com</a></p>
				<p><i class="fa fa-laptop contactdetails"></i> <a href="http://www.joorisbvba.be">www.joorisbvba.be</a></p>
				<div class="row-spacing-sm"></div>
				<p>BTW: BE-0425.159.116</p>
				
				<div class="row-spacing-md"></div>
				<h5>Openingsuren</h5>
				<p><span class="text-blue">Van maandag t/m vrijdag</span> 9u tot 18u</p>
				<p><span class="text-blue">Zaterdag en zondag</span> gesloten</p>	
			</div>
			
            <div class="col-md-5">
				<!-- Contact Form -->
				<form name="sentMessage" id="contactForm" novalidate>
				<div class="row">
					<div class="col-md-12">
						<div class="control-group form-group">
							<div class="controls">
								<label>Informatie over:</label></br>
								<select class="selectpicker" id="topic" required data-validation-required-message="Kies aub een onderwerp">
								  <option>Sanitair</option>
								  <option>Elektriciteit</option>
								  <option>Verwarming</option>
								  <option>Bespaar op je energie</option>
								</select>
									
								<p class="help-block"></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="control-group form-group">
							<div class="controls">
								<label>Naam: <span class="text-red">*</span></label>
								<input type="text" class="form-control" id="name" required data-validation-required-message="Vul aub je naam in">
								<p class="help-block"></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="control-group form-group">
							<div class="controls">
								<label>Straat: <span class="text-red">*</span></label>
								<input type="street" class="form-control" id="street" required data-validation-required-message="Vul aub je straat in">
							</div>
						</div>							
					</div>
					<div class="col-md-4">
						<div class="control-group form-group">
							<div class="controls">
								<label>Huisnr: <span class="text-red">*</span></label>
								<input type="text" class="form-control" id="houseno" required data-validation-required-message="Vul aub je huisnr in">
							</div>
						</div>							
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="control-group form-group">
							<div class="controls">
								<label>Postcode: <span class="text-red">*</span></label>
								<input type="number" class="form-control" id="postalcode" required data-validation-required-message="Vul aub je postcode in">
							</div>
						</div>							
					</div>
					<div class="col-md-8">
						<div class="control-group form-group">
							<div class="controls">
								<label>Gemeente: <span class="text-red">*</span></label>
								<input type="city" class="form-control" id="city" required data-validation-required-message="Vul aub je gemeente in">
							</div>
						</div>							
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="control-group form-group">
							<div class="controls">
								<label>Telefoon/GSM: <span class="text-red">*</span></label>
								<input type="tel" class="form-control" id="phone" required data-validation-required-message="Vul aub je telefoonnummer/gsm in">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="control-group form-group">
							<div class="controls">
								<label>E-mail:</label>
								<input type="email" class="form-control" id="email">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="control-group form-group">
							<div class="controls">
								<label>Omschrijving: <span class="text-red">*</span></label>
								<textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Vul een omschrijving van de werken in" maxlength="999" style="resize:none"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="success"></div>
						<!-- For success/fail messages -->
						<button type="submit" class="btn btn-primary">Verstuur bericht</button>
					</div>
				</div>
				</form>
			</div>
		</div>
		
		<div class="row-spacing-md"></div>
	
        <div class="well">
            <div class="row">
                <div class="col-md-12">
                   <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
				   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2517.364819989826!2d4.7129129150214935!3d50.87995787953692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c160d4b54b7b7d%3A0xaf9555d8d77965b2!2sTiensevest+38%2C+3000+Leuven!5e0!3m2!1snl!2sbe!4v1481545999499"></iframe>
                </div>
            </div>
        </div>	
	</div>

	<?php include("includes/footer.php"); ?> 
		
	<?php include("includes/jsGeneral.php"); ?>
	<?php include("includes/jsCarousel.php"); ?> 
	<?php include("includes/jsMenu.php"); ?> 
	<script src="/<?php echo $prefix ?>js/jqBootstrapValidation.js"></script>
	<script src="/<?php echo $prefix ?>js/contact_me.js"></script>
</body>
</html>
