<section class="full-width section">
	<div class="container">
		<h2 class="title-section-h2">Carrito de compras</h2>
		<h5>Revisa tu carrito y completa la información necesaria para finalizar la compra.</h5><br>
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
								<?php
					
									for($i = 0; $i < sizeof($data); $i++){

										$publicacion = "<tr>
															<th scope='row'>1</th>
															<td>{{Pelota de futbol}}</td>
															<td>2</td>
															<td>$250</td>
															<td>$500</td>
															<td><a href='#!' style='color: #e25656;'> <i class='far fa-trash-alt'></i></a></td>
														</tr>
														<tr>
															<th scope='row'></th>
															<th>Total</th>
															<td></td>
															<td></td>
															<td>$500</td>
															<td></td>
														</tr>";

										echo $publicacion;
									}
								?>
							</tbody>
						</table>	
					</div>
				</div>
			</div>
		</div>
		<a href="<?php echo $GLOBALS['root'] . "formas_de_pago/" ?>" class="btn btn-lg btn-secondary botoncito">Continuar</a>
	</div>
</section>