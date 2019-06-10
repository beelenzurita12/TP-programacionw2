<div class="row align-items-center">
  	<div class="col-12">
    	<div class="col-sm-9 col-md-7 col-lg-7 mx-auto">
      		<div class="card card-signin my-5">
       			<div class="card-body">
					<h4 class="text-center">Pon tu anuncio gratis</h4>
					<br>
					<form action="<?php echo $GLOBALS['root'] . 'agregar_articulo/agregar'; ?>" class="form-signin" enctype="multipart/form-data" method="post">
						<h4 class="text-info">Detalles de tu anuncio</h4>
						<div class="form-group">
							<label class="col-sm-3">Código postal</label>
							<div class="col-sm-7">
								<input name="codigoPostal" type="text" class="form-control" placeholder="Código postal" required autofocus>
							</div>
          				</div>
          				<div class="form-group">
							<label class="col-sm-3">Título del anuncio</label>
							<div class="col-sm-7">
								<input name="nombre" type="text" class="form-control" placeholder="Título del anuncio" required autofocus>
							</div>
          				</div>
						<div class="form-group">
							<label class="col-sm-3">Descripción</label>
							<div class="col-sm-7">
								<textarea name="descripcion" class="form-control" rows="3" placeholder="Descripción" required autofocus></textarea>
							</div>
          				</div>
						<div class="form-group">
							<label class="col-sm-3">Precio</label>
							<div class="col-sm-7">
								<input name="precio" type="text" class="form-control" placeholder="Precio" required autofocus>
							</div>
          				</div>
						<div class="form-group">
							<label class="col-sm-3">Cantidad</label>
							<div class="col-sm-7">
								<input name="cantidad" type="number" class="form-control" placeholder="Cantidad" required autofocus>
							</div>
          				</div>
						<div class="form-group">
							<label class="col-sm-3">Categoria</label>
							<div class="col-sm-7">
								<select name="categoria" class="form-control" placeholder="Categoria" required autofocus>
    								<option>Vehículos</option>
    								<option>Inmobiliaria</option>
    								<option>Hogar</option>
    								<option>Moda y belleza</option>
									<option>Para niños y bebes</option>
									<option>Electrónica</option>
									<option>Ocio y deporte</option>
									<option>Mascotas y animales</option>
									<option>Trabajo y formación</option>
									<option>Negocios y servicios</option>
									<option>Otros</option>
  								</select>
							</div>
          				</div>
						<br>
						<h4 class="text-info">Foto</h4>
						<p>¡Los anuncios con fotos reciben 7 veces más contactos!</p>
						<div class="form-group">
							<div class="text-muted text-center">
								<input name="imagenes" type="file" multiple="multiple" min="1" max="10"/>
							</div>
							<br>
							<p class="text-muted text-center">¡Selecciona hasta 10 fotos! <i class="far fa-images"></i></p>
						</div>
						<h4 class="text-info">Datos para que te contacten</h4>
						<div class="form-group">
							<label class="col-sm-3">Eres</label>
							<div class="col-sm-7">
								<label class="option1">
									<input name="tipoVendedor" type="radio"> Particular
								</label>
								<label class="option2">
									<input name="tipoVendedor" type="radio"> Profesional
								</label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3">Tu nombre</label>
							<div class="col-sm-7">
						    	<input name="vendedor" type="text" class="form-control" placeholder="Nombre">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3">Email</label>
							<div class="col-sm-7">
						    	<input name="email" type="email" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3">Repetir Email</label>
							<div class="col-sm-7">
						    	<input name="emailRepetido" type="email" class="form-control" placeholder="Repetir Email">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3">Teléfono</label>
							<div class="col-sm-7">
						    	<input name="telefono" type="tel" class="form-control" placeholder="Teléfono">
							</div>
						</div>
						<p class="text-center">
							<button class="btn btn-lg btn-secondary" type="submit">Publicar</button>
						</p>
					</form>
				</div>
			</div>
		</div>
  	</div>
</div>