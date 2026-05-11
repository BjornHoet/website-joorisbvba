			<div class="col-md-5">
				<div class="row">
					<div class="col-md-12">
						<div class="control-group form-group">
							<div class="controls">
								<label>Naam/Firma: <span class="text-red">*</span></label>
								<input type="text" class="form-control" name="Naam" id="name" required data-validation-required-message="Vul aub je naam in">
								<p class="help-block"></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<div class="controls">
								<label>BTW Nummer:</label>
								<input type="text" class="form-control" name="BTW" id="btw">
							</div>
						</div>							
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<div class="controls">
								<label>Straat:</label>
								<input type="street" class="form-control" name="Straat" id="street">
							</div>
						</div>							
					</div>
					<div class="col-md-4">
						<div class="control-group form-group">
							<div class="controls">
								<label>Huisnr:</label>
								<input type="text" class="form-control" name="Huisnummer" id="houseno">
							</div>
						</div>							
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="control-group form-group">
							<div class="controls">
								<label>Postcode:</label>
								<input type="number" class="form-control" name="Postcode" id="postalcode">
							</div>
						</div>							
					</div>
					<div class="col-md-8">
						<div class="control-group form-group">
							<div class="controls">
								<label>Gemeente:</label>
								<input type="city" class="form-control" name="Gemeente" id="city">
							</div>
						</div>							
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="control-group form-group">
							<div class="controls">
								<label>Telefoon/GSM: <span class="text-red">*</span></label>
								<input type="tel" class="form-control" name="Telefoon" id="phone" required data-validation-required-message="Vul aub je telefoonnummer/gsm in">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<div class="controls">
								<label>Afleveradres:</label>
								<input type="text" class="form-control" name="Afleveradres" id="deliveryaddress">
							</div>
						</div>							
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="control-group form-group">
							<div class="controls">
								<label>E-mail:</label>
								<input type="email" class="form-control" name="Email" id="email">
							</div>
						</div>
					</div>
				</div>
            </div>
			
			<div class="col-md-12">
				<div class="row-spacing-md"></div>
				<div class="row">
					<div class="col-md-12 text-center">
						<div id="success"></div>
						<!-- For success/fail messages -->
						<button type="submit" class="btn btn-primary" onclick="clearTotals();">Verstuur formulier</button>
					</div>
				</div>				
			</div>