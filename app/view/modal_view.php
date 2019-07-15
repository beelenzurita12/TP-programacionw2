<!-- Button de Comprar ahora -->
<button type="button" class="btn btn-primary m-5" data-toggle="modal" data-target="#exampleModalCenter">
  Comprar ahora
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Comprar ahora</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="cantidadProd" class="col-form-label">¿Cuantos productos desea comprar?</label>
            <input type="number" name="cantidad" class="form-control" id="cantidadProd">
          </div>
          <div class="form-group">
              <label class="col-form-label">¿Cómo desea recibir el producto?</label>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadioX" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Entrega a domicilio</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadioX" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">Retiro en sucursal</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio3" name="customRadioX" class="custom-control-input">
                <label class="custom-control-label" for="customRadio3">A acordar con el vendedor</label>
              </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Comprar</button>
      </div>
    </div>
  </div>
</div>