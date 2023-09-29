
<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ELIMINAR ROL</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('roles.destroy')}}" method="POST">
            @csrf
            @method('delete')
            <div class="modal-body">
                <p>ESTAS SEGURO DE ELIMINAR EL ROL <strong>{{$Rol->rol_name}}</strong>?</p>
              </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">CONFIRMAR</button>
        </div>
      </div>
    </div>
  </div>