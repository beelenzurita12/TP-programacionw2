<section class="full-width section">
	<div class="container section-container">
		<h2 class="title-section-h2">Carrito de compras</h2>
		<h5>Revisa tu carrito y elige tus opciones de envio y forma de pago para finalizar la compra.</h5><br>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9">
				<div id="payments" class="card mb-3">
					<div class="card-header"><h4 class="legend card-title"><i class="fas fa-shopping-cart"></i> Productos</h4></div>
					<div id="payments_options" class="card-body">
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th scope="col"></th>
									<th scope="col">Producto</th>
									<th scope="col">Cantidad</th>
									<th scope="col">Precio unidad</th>
									<th scope="col">Precio total</th>
									<th scope="col">Eliminar</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>{{Pelota de futbol}}</td>
									<td>2</td>
									<td>$250</td>
									<td>$500</td>
									<td><a href="#!" style="color: #e25656;"> <i class="far fa-trash-alt deleteClass"></i></a></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>{{Pelota de basquet}}</td>
									<td>1</td>
									<td>$590</td>
									<td>$590</td>
									<td><a href="#!" style="color: #e25656;"> <i class="far fa-trash-alt deleteClass"></i></a></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>{{Pelota de rugby}}</td>
									<td>3</td>
									<td>$200</td>
									<td>$600</td>
									<td><a href="#!" style="color: #e25656;"> <i class="far fa-trash-alt deleteClass"></i></a></td>
								</tr>
								<tr>
									<th scope="row"></th>
									<th>Total</th>
									<td></td>
									<td></td>
									<td>$1690</td>
									<td></td>
								</tr>
							</tbody>
						</table>	
					</div>
				</div>
				<br>
				<div class="card mb-3">
					<div class="card-header"><h4 class="legend card-title"><i class="fas fa-truck"></i> Envío</h4></div>
					<div class="card-body">
						<div class="custom-control custom-radio">
							<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
							<label class="custom-control-label" for="customRadio1">Correo</label>
						</div>
						<div class="custom-control custom-radio">
							<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
							<label class="custom-control-label" for="customRadio2">Envío a acordar con el vendedor</label>
						</div>
					</div>
				</div>
				<br>
				<div class="card mb-3">
					<div class="card-header"><h4 class="legend card-title"><i class="fas fa-credit-card"></i> Método de pago</h4></div>
					<div class="card-body">
						<div class="custom-control custom-radio">
							<input type="radio" id="customRadio3" name="customRadioX" class="custom-control-input">
							<label class="custom-control-label" for="customRadio3">Tarjeta de crédito</label>
						</div>
						<div class="custom-control custom-radio">
							<input type="radio" id="customRadio4" name="customRadioX" class="custom-control-input">
							<label class="custom-control-label" for="customRadio4">Tarjeta de débito</label>
						</div>
						<div class="custom-control custom-radio">
							<input type="radio" id="customRadio5" name="customRadioX" class="custom-control-input">
							<label class="custom-control-label" for="customRadio5">Efectivo</label>
						</div>
						<div class="custom-control custom-radio">
							<input type="radio" id="customRadio6" name="customRadioX" class="custom-control-input">
							<label class="custom-control-label" for="customRadio6">Pago fácil</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<button class="btn btn-lg btn-secondary botoncito" type="submit">Finalizar compra</button>
	</div>
</section>