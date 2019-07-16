<section class="full-width section">
	<div class="container">
		<h2 class="title-section-h2">¿Cómo quieres recibir o retirar tu compra?</h2>
		<h5>Selecciona la opción que desees.</h5><br>
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-9">
				<div class="card mb-3">
					<div class="card-header"><h4 class="legend card-title"><i class="fas fa-truck"></i> Envío</h4></div>
					<form action="<?php echo $GLOBALS["root"] . "carrito_de_compras/comprar" ?>" method="post" class="card-body">
						<div class="custom-control custom-radio">
							<input type="radio" id="customRadio1" value="Entrega a domicilio" name="entrega" class="custom-control-input">
							<label class="custom-control-label" for="customRadio1">Entrega a domicilio</label>
						</div>
						<div class="custom-control custom-radio">
							<input type="radio" id="customRadio2" value="Retiro en sucursal" name="entrega" class="custom-control-input">
							<label class="custom-control-label" for="customRadio2">Retiro en sucursal</label>
						</div>
						<div class="custom-control custom-radio">
							<input type="radio" id="customRadio3" value="A acordar con el vendedor" name="entrega" class="custom-control-input">
							<label class="custom-control-label" for="customRadio3">A acordar con el vendedor</label>
						</div>
						<button class="btn btn-lg btn-secondary float-right mt-3">Finalizar compra</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>