@extends('includes.app')


@section('content')
<div class="row">
    <div class="col-12 py-5">
        <h4>Laptops</h4>
        <p class="text-gray">Sección para el registro de computadores</p>
    </div>
</div>

<div class="row">
    <a href="{{ route('laptop.create') }}" class="btn btn-success">
        <i class="fas fa-plus mr-3" style="font-size: 12px"></i>
        Agregar
    </a>
    <br><br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Procesador</th>
                <th>HDD</th>
                <th>RAM</th>
                <th>Notas</th>
                <th class="text-center">Ranking</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laptops as $lap)
                <tr>
                    <td>{{ $lap->No }}</td>
                    <td>{{ $lap->marca }}</td>
                    <td>{{ $lap->modelo }}</td>
                    <td>{{ $lap->procesador." ".$lap->procesador_modelo }}</td>
                    <td>{{ $lap->hdd }}</td>
                    <td>{{ $lap->ram }}</td>
                    <td>
                        <span class="text-overflow-dynamic-container">
                        <span class="text-overflow-dynamic-ellipsis" title="... visualiza el item para poder leer más">
                            {{ $lap->notas }}
                        </span>
                        </span>
                    </td>
                    <td class="text-center">
                        @if ($lap->ranking == "Bueno")
                            <i class="far fa-star" style="color: #f39c12"></i>

                        @elseif($lap->ranking == "Regular")
                            <i class="fas fa-star-half-alt" style="color: #f39c12"></i>
                        @else
                            <i class="fas fa-star" style="color: #f39c12"></i>    
                        @endif
                    </td>
                    <td>{{ $lap->estado }}</td>
                    <th>
                        <a href="{{ route('laptop.show', $lap->id) }}" class="badge badge-primary">
                            <span class="mdi mdi-eye"></span>
                        </a>
                        <a href="{{ route('laptop.edit', $lap->id) }}" class="badge badge-warning" style="background-color: #f39c12">
                            <i class="far fa-edit"></i>
                        </a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection

