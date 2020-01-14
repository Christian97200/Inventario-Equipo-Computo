@extends('includes.app')
@section('content')
<form action="{{ route('laptop.update', $laptop->id) }}" method="POST">
    {{ csrf_field() }}
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            @include('includes.messages')
            <div class="grid">
                <p class="grid-header">Datos del computador</p>
                <div class="grid-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Laptop No.</label>
                                <input type="text" class="form-control" name="No" value="{{ (old('No') == true) ? old('No') : $laptop->No }}">
                            </div>
                            <div class="col-md-3">
                                <label for="">Marca</label>
                                <select name="fk_marca" class="form-control">
                                    <option value="0">--Seleccionar</option>                            
                                    @foreach ($marcas as $item)
                                        <option value="{{ $item->id }}" 
                                            {{ old('fk_marca') == $item->id ? 'selected' : 
                                            ($laptop->fk_marca == $item->id) ? 'selected' : ''}}>{{ $item->marca }}
                                        </option>                            
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">Modelo</label>
                                <input type="text" class="form-control" name="modelo_laptop" placeholder="Ejemplo:. PCG-7L7" value="{{ (old('modelo_laptop') == true) ? old('modelo_laptop'): $laptop->modelo_laptop }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Procesador (Marca)</label>
                                <select name="fk_procesador" id="" class="form-control">
                                    <option value="0">--Seleccionar</option>                            
                                    @foreach ($procesadores as $item)
                                        <option value="{{ $item->id }}" 
                                            {{ old('fk_procesador') == $item->id ? 'selected' : 
                                            ($laptop->fk_procesador == $item->id) ? 'selected' : ''}}>{{ $item->procesador }}
                                        </option>                            
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">Procesador (Modelo)</label>
                                <input type="text" class="form-control" placeholder="Ejemplo:. Core i3" name="modelo_procesador" value="{{ (old('modelo_procesador') == true) ? old('modelo_procesador') : $laptop->modelo_procesador }}">
                            </div>
                            <div class="col-md-3">
                                <label for="">Velocidad</label>
                                <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Ejemplo:. 2.5" aria-label="Recipient's username" aria-describedby="basic-addon2" name="velocidad_procesador" value="{{ (old('velocidad_procesador') ==true ) ? old('velocidad_procesador') : $laptop->velocidad_procesador}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">GHz</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">RAM (Capacidad)</label>
                                <select name="fk_ram" id="" class="form-control">
                                    <option value="0">--Seleccionar</option>
                                    @foreach ($ram as $item)
                                        <option value="{{ $item->id }}" 
                                            {{ old('fk_ram') == $item->id ? 'selected' : 
                                            ($laptop->fk_ram == $item->id) ? 'selected' : ''}}>{{ $item->capacidad }}
                                        </option>  
                                    @endforeach                            
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="">HDD (Capacidad)</label>
                                <select name="fk_hd" id="" class="form-control">
                                <option value="0">--Seleccionar</option>
                                    @foreach ($HardDrive as $item)
                                        <option value="{{ $item->id }}" {{ old('fk_hd') == $item->id ? 'selected' :
                                        ($laptop->fk_hd == $item->id) ? 'selected' : '' }}>{{ $item->capacidad }}</option>
                                    @endforeach      
                                </select>       
                            </div>
                            <div class="col-md-3">
                                <label for="">Ranking del computador</label>
                                <div class="radio">
                                    <label class="radio-label mr-4">
                                        <input value="Bueno" name="ranking" type="radio" {{ ($laptop->ranking == 'Bueno') ? 'checked' : '' }} ><i class="input-frame"></i><i class="far fa-star" style="color: #f39c12"></i>Bueno
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="radio-label mr-4">
                                        <input value="Regular" name="ranking" type="radio" {{ ($laptop->ranking == 'Regular') ? 'checked' : '' }} ><i class="input-frame"></i><i class="fas fa-star-half-alt" style="color: #f39c12"></i>Regular
                                    </label>
                                </div>
                                <div class="radio">
                                    <label class="radio-label mr-4">
                                        <input value="Excelente" name="ranking" type="radio" {{ ($laptop->ranking == 'Excelente') ? 'checked' : '' }} ><i class="input-frame"></i><i class="fas fa-star" style="color: #f39c12"></i>Excelente
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-9">
                                <label for="">NOTAS:</label>
                                <textarea class="form-control" id="inputType9" cols="12" rows="5" name="notas" placeholder="AGREGA NOTAS/DEFECTOS importantes relacionadas al computador"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-rounded mr-2">
                                    <span class="mdi mdi-check"></<span>
                                        Registrar
                                    </button>
                                <a href="{{ route('index') }}" class="btn btn-danger btn-rounded">
                                    <span class="mdi mdi-cancel mr-3"></span>
                                    Cancelar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection