	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Seleccionar Cliente</h4>
      </div>
      <div class="modal-body">

        <!-- Buscar -->
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
          </span>
           
           <input type="text" class="form-control" placeholder="Ingresa el Nombre o Telefono del Cliente" aria-describedby="basic-addon1" id="datoBuscar" onkeyup="buscarCliente()">
        </div>

        </BR>
        </BR>
        
        <div id="buscarDato">   </div>

      </div>

      <div class="modal-footer"> </div>
    </div>
  </div>
</div>