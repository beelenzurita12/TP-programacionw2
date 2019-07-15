<!-- Button de Calificar -->
<button type="button" class="btn btn-primary m-5" data-toggle="modal" data-target="#exampleModalCenter">
  Calificar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Calificar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="dejaComent" class="col-form-label">Deja tu comentario:</label>
            <textarea class="form-control" id="dejaComent"></textarea>
          </div>
          <div class="form-group">
              <label class="col-form-label">Seleccione una opción para calificar al vendedor, teniendo en cuenta que va de 1 para "Muy mal vendedor" a 5 para "Muy buen vendedor":</label>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio1" name="customRadioX" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">1</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio2" name="customRadioX" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">2</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio3" name="customRadioX" class="custom-control-input">
                <label class="custom-control-label" for="customRadio3">3</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio4" name="customRadioX" class="custom-control-input">
                <label class="custom-control-label" for="customRadio4">4</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadio5" name="customRadioX" class="custom-control-input">
                <label class="custom-control-label" for="customRadio5">5</label>
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