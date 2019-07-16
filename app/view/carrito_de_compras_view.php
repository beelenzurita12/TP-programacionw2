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
									$cantidadProductos = sizeof($data);
									$total = 0;

									for($i = 0; $i < sizeof($data); $i++){
										$totalPorProducto = $data[$i]['cantidad'] * $data[$i]['precio'];
										$total += $totalPorProducto;
										$productoNumero = $i + 1;

										$publicacion = "<tr>
															<th scope='row'>" . $productoNumero .  "</th>
															<td>" . $data[$i]['nombre'] . "</td>
															<td>" . $data[$i]['cantidad'] . "</td>
															<td>" . $data[$i]['precio'] . "</td>
															<td>" . $totalPorProducto . "</td>
															<td><a href='" . $GLOBALS['root'] . "carrito_de_compras/eliminar_de_carrito?id=" . $data[$i]['idCarrito'] . "' style='color: #e25656;'> 
															<i class='far fa-trash-alt'></i></a></td>
														</tr>";

														
										echo $publicacion;

										// Cuando ya no haya más productos por renderizar, se hace el total definitivo
										if($i == $cantidadProductos -1){
											echo "<tr>
													<th scope='row'></th>
													<th>Total</th>
													<td></td>
													<td></td>
													<td>" . $total . "</td>
													<td></td>
												</tr>";
										}
									}
								?>
							</tbody>
						</table>
						<a href="<?php echo $GLOBALS['root'] . "envio/" ?>" class="btn btn-lg btn-secondary float-right">Continuar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>