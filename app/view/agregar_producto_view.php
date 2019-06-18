<div class="row align-items-center">
  	<div class="col-12">
    	<div class="col-sm-9 col-md-7 col-lg-7 mx-auto">
      		<div class="card card-signin my-5">
       			<div class="card-body">
					<h4 class="text-center">Pon tu anuncio gratis</h4>
					<br>
					<form action="<?php echo $GLOBALS['root'] . $data["submit"]; ?>" class="form-signin" enctype="multipart/form-data" method="post">
						<h4 class="text-info">Detalles de tu anuncio</h4>
						<div class="form-group">
          				</div>
          				<div class="form-group">
							<label class="col-sm-3">Título del anuncio</label>
							<div class="col-sm-7">
								<input name="nombre" type="text" class="form-control" 
										placeholder="Título del anuncio" 
										value="<?php echo !empty($data["post"]) ? $data["post"]["nombre"] : ""; ?>"
										required autofocus>
							</div>
          				</div>
						<div class="form-group">
							<label class="col-sm-3">Descripción</label>
							<div class="col-sm-7">
								<textarea name="descripcion" class="form-control" rows="3" placeholder="Descripción" required autofocus>
								<?php echo !empty($data["post"]) ? $data["post"]["descripcion"] : "";?></textarea>
							</div>
          				</div>
						<div class="form-group">
							<label class="col-sm-3">Precio</label>
							<div class="col-sm-7">
								<input name="precio" type="text" class="form-control" 
										placeholder="Precio" 
										value="<?php echo !empty($data["post"]) ? $data["post"]["precio"] : ""; ?>"
										required autofocus>
							</div>
          				</div>
						<div class="form-group">
							<label class="col-sm-3">Cantidad</label>
							<div class="col-sm-7">
								<input name="cantidad" type="number" class="form-control" 
										placeholder="Cantidad" 
										value="<?php echo !empty($data["post"]) ? $data["post"]["cantidad"] : ""; ?>"
										required autofocus>
							</div>
          				</div>
						<div class="form-group">
							<label class="col-sm-3">Categoria</label>
							<div class="col-sm-7">
								<select name="categoria" class="form-control" placeholder="Categoria" required autofocus>
									<?php 
										$categorias = ["Vehículos", "Inmobiliaria", "Hogar", "Moda y belleza", "Para niños y bebes", "Electrónica", "Ocio y deporte", "Mascotas y animales", "Trabajo y formación", "Negocios y servicios", "Otros"];
										
										for($i = 0; $i < sizeof($categorias) ; $i++){
											if(!empty($data["post"]) && $data["post"]["categoria"] == $categorias[$i]){
												echo "<option selected>" . $categorias[$i] . "</option>";

											} else {
												echo "<option>" . $categorias[$i] . "</option>";
											}
										}
									?>
  								</select>
							</div>
          				</div>
						<br>
						<h4 class="text-info">Foto</h4>
						<p>¡Los anuncios con fotos reciben 7 veces más contactos!</p>
						<div class="form-group">
							<div class="text-muted text-center">
								<input name="imagenes[]" type="file" multiple="multiple" min="1" max="10"/>
							</div>
							<br>
							<p class="text-muted text-center">¡Selecciona hasta 10 fotos! <i class="far fa-images"></i></p>
						</div>
						<br>
						<p class="text-center">
							<button class="btn btn-lg btn-secondary" type="submit">Publicar</button>
						</p>
					</form>
				</div>
			</div>
		</div>
  	</div>
</div>