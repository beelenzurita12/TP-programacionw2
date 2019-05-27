  <!-- Slider // pendiente si va a quedar o no sino pasarlo al inicio_view -->
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Primera imagen -->
        <div class="carousel-item active" style="background-image: <?php echo "url('" . $GLOBALS["root"] . "public/image/slider1.jpg')"?>">
          <div class="carousel-caption d-none d-md-block">
            <h3>Compra</h3>
            <p>This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Segunda imagen -->
        <div class="carousel-item" style="background-image: <?php echo "url('" . $GLOBALS["root"] . "public/image/slider1.jpg')"?>">
          <div class="carousel-caption d-none d-md-block">
            <h3>Vende</h3>
            <p>This is a description for the second slide.</p>
          </div>
        </div>
        <!-- Tercera imagen -->
        <div class="carousel-item" style="background-image: <?php echo "url('" . $GLOBALS["root"] . "public/image/slider1.jpg')"?>">
          <div class="carousel-caption d-none d-md-block">
            <h3>Disfruta</h3>
            <p>This is a description for the third slide.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Mas cosas  -->
  