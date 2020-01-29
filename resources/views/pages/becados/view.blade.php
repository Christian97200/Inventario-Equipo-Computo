@extends('includes.app')


@section('content')
<div class="row">
    <div class="col-12 py-5">
        <h4>Becados</h4>
        <p class="text-gray">Sección para el registro de becados</p>
    </div>
</div>




{{-- Modal --}}

<div class="modal fade" id="Add-Becados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    {!! Form::open() !!}


                        <div class="container">
                            <div class="form-group">
                                <label for="">Nombres:</label>
                                <input id="nombre" type="text" class="form-control" name="nombre">
                            
                            
                            
                            
                            </div>
                    
                            <div class="form-group">
                                <label for="">Apellidos:</label>
                                <input id="apellido" type="text" class="form-control" name="apellido">
                                
                            
                            
                            
                            
                            
                            
                            </div>
                    
                            {!! link_to('#', $title = 'Registrar', $attributes = ['id'=>'sendData', 'class'=> 'btn btn-primary'], $secure = null) !!}
                        </div>


                    {!! Form::close() !!}



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- End Modal --}}

<div class="row">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Add-Becados">
        <i class="fas fa-plus mr-3" style="font-size: 12px"></i>
        Agregar
    </button>

    <br><br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>2</td>
                    <td>Eddy Christian Ottoniel</td>
                    <td>Valey Guanché</td>
                    <td>
                        <a href="#" class="badge badge-primary">
                            <span class="mdi mdi-eye"></span>
                        </a>
                        <a href="#" class="badge badge-warning" style="background-color: #f39c12">
                            <i class="far fa-edit"></i>
                        </a>
                    </td>
                </tr>
        </tbody>
    </table>
</div>
@endsection