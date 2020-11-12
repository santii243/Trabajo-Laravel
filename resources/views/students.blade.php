@extends('layouts.app')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-2.1.1.js"></script>
<script src="../../dist/sweetalert.js"></script>
<link rel="stylesheet" href="../../dist/sweetalert.css">
<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->


<script>
function confirmDelete(idarea) {

  swal({
          title: "Esta seguro de eliminar ?",
          text: "Se eliminara El Area !",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: 'btn-danger',
          confirmButtonText: 'Si, eliminar !',
          cancelButtonText: "No, cancelar !",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm){
          if (isConfirm){
              $.ajax({ 
                  type: 'GET',
                  //dataType: "json",
                  url : 'area.delete', 
                  data: {
                    idarea: idarea
                  },
                  success: function(response) {
                    swal("Borrar", "Area borrada correctamente !", "success");
                    location.reload(true);
                  },
                  error: function(XMLHttpRequest, textStatus, errorThrown) {
                      if (textStatus == 'parsererror') {
                        textStatus = 'Technical error: Unexpected response returned by server. Sending stopped.';
                      }
                      swal("Error", "Ocurrio un error al eliminar !", "error");
                  }
              });

          } else {
              swal("Cancelado", "Ha cancelado la eliminacion", "error");
            }
        });
}
</script>


    <div class="row">
        <div class="col-md-12 col-md-offset">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Gestion de Students</b>
                
                <a href="{{ url('area/add') }}" class="btn btn-success btn-sm btn-flat"> <i class="fa fa-add">Agregar Student</i> </a>

                </div>

<div class="box-body">
<div class="table-responsive">
                                <table id="proceso" class="table table-bordered table-striped table-responsive" style="width:100%">
                                  <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>First Name</th>
                                    <th>Accines</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($alumnos as $alumno)
                               <tr>
                                    <td>{{ $alumno->name }}</td>
                                    <td>{{ $alumno->firstname }}</td>
                                    <td>

                                    <a href="{{ url('alumno/'.$alumno->id.'/edit') }}" class="btn btn-success btn-sm btn-flat"> <i class="fa fa-edit">Ver/Editar</i> </a>
                                    <a href="href=javascript:;" class="btn btn-danger btn-sm btn-flat" onclick="confirmDelete('{{ $alumno->id }}');return false;"> <i class="fa fa-add">Borrar</i> </a>
                                
                                    </td>
                                  </tr>
                                 
                                    @endforeach
                                
                                  </tfoot>
                                </table>
</div>
</div>
  

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection