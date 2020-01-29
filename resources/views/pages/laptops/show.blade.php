@extends('includes.app')


@section('content')
<div class="row">
    <div class="col-12 py-5">
        <h4>Laptops</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @include('includes.messages')
        <div class="grid">
            <p class="grid-header">LAPTOP NO. {{ $laptop->No }}</p>
            <div class="grid-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for=""><strong>MARCA</strong></label><br>
                        </div>
                        <div class="col-md-2">
                            <label for="">{{ $laptop->marca }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for=""><strong>MODELO</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="">{{ $laptop->modelo_laptop }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for=""><strong>PROCESADOR</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="">{{ $laptop->procesador }} {{ $laptop->modelo_procesador }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for=""><strong>DISCO DURO</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="">{{ $laptop->hd }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for=""><strong>RAM</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="">{{ $laptop->ram }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for=""><strong>RANKING</strong></label>
                        </div>
                        <div class="col-md-2">
                            <label for="">{{ $laptop->ranking }}</label>
                            @if($laptop->ranking == 'Excelente')
                                <i class="input-frame"></i><i class="fas fa-star" style="color: #f39c12"></i>
                            @elseif($laptop->ranking == 'Regular')
                                <i class="input-frame"></i><i class="fas fa-star-half-alt" style="color: #f39c12"></i>
                            @elseif($laptop->ranking == 'Bueno')
                                <i class="input-frame"></i><i class="far fa-star" style="color: #f39c12"></i>
                            @endif
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-9">
                            <label for=""><strong>NOTAS:</strong></label>
                            <textarea readonly class="form-control" id="inputType9" cols="12" rows="5" name="notas" placeholder="AGREGA NOTAS/DEFECTOS importantes relacionadas al computador">{{ $laptop->notas }}</textarea>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ URL::previous() }}" class="btn btn-primary btn-rounded">
                                <span class="mdi mdi-keyboard-backspace mr-3" style="font-size: 15px"></span>
                                
                                Regresar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection