<div class="container post-container">
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<div class="full-width div-table">
				<div class="full-width div-table-row">
					<div class="div-table-cell div-table-cell-xs">
						<a href="<?php echo $GLOBALS['root'] . "resultados_de_busqueda/" ?>" class="btn btn-default btn-block"><i class="fa fa-angle-left" aria-hidden="true"></i> Volver al listado</a>
					</div>
				</div>
			</div>
			<div class="full-width" style="padding:10px; background-color: #F5F5F5; margin: 7px 0;">
				<p class="lead text-center"><strong>{{Titulo y modelo}}</strong></p>
				<p class="lead text-center" style="color: #F09000;"><strong>{{$7,000}}</strong></p>
			</div>
			<div class="full-width post-user-info">
				<div>
					<p class="full-width lead"><i class="fas fa-user" aria-hidden="true"></i> {{Nombre usuario}}</p>
					<p class="full-width lead"><i class="fas fa-mobile" aria-hidden="true"></i> {{12345678}}</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<a href="#!" class="btn btn-success btn-block">ENVIAR MENSAJE</a>
			<a href="#!" class="btn btn-success btn-block">LLAMAR</a>
			<a href="<?php echo $GLOBALS['root'] . "mis_publicaciones/" ?>">¿ES TUYO? GESTIONAR ESTE ANUNCIO</a>
		</div>
		<div class="col-xs-12 col-sm-8">
			<h2 class="title-h2">{{Titulo del producto}}</h2>
			<div id="slider-commercial" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slider-commercial" data-slide-to="0" class="active"></li>
					<li data-target="#slider-commercial" data-slide-to="1" class=""></li>
					<li data-target="#slider-commercial" data-slide-to="2" class=""></li>
				</ol>
				<div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" style="background-image: url('<?php echo $GLOBALS['root'] . "public/image/articulo2.jpg" ?>')"></div>
                    <div class="carousel-item" style="background-image: url('<?php echo $GLOBALS['root'] . "public/image/articulo2.jpg" ?>')"></div>
                    <div class="carousel-item" style="background-image: url('<?php echo $GLOBALS['root'] . "public/image/articulo2.jpg" ?>')"></div>
				</div>
				<a class="carousel-control-prev" href="#slider-commercial" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#slider-commercial" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
				</a>
			</div>
				<p class="lead text-justify">
					{{Lorem ipsum dolor sit amet, consectetur adipisicing elit. At voluptate possimus molestiae et ipsum ad dignissimos dolore voluptatem velit, ratione error dolor mollitia animi nihil nisi similique. Perferendis, officiis, id.}}
				</p>
				<p class="lead">
					<strong>Publicado: {{Fecha}}</strong>
				</p>
		</div>
	</div>
</div>