<section class="full-width section">
	<div class="container">
		<h2 class="title-section-h2">Estadísticas de Social Market</h2>
		<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 my-4" id="container-graphic"></div>
            <button type="button" onclick="chart.saveAsPdf();" class="btn btn-outline-danger ml-3">Exportar PDF</button>

            <div class="col-xs-12 col-sm-12 col-md-12 my-4" id="container-graphic2"></div>
            <button type="button" onclick="chart2.saveAsPdf();" class="btn btn-outline-danger ml-3">Exportar PDF</button>

            <div class="col-xs-12 col-sm-12 col-md-12 my-4" id="container-graphic3"></div>
            <button type="button" onclick="chart3.saveAsPdf();" class="btn btn-outline-danger ml-3">Exportar PDF</button>

            <script src="https://cdn.anychart.com/js/latest/anychart-bundle.min.js"></script>
        </div>
	</div>
</section>

<script src="<?php echo $GLOBALS["root"] . "public/JS/graphics.js" ?>"></script>