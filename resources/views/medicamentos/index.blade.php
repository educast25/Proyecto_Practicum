@extends('layouts.master')

@section('title', 'Lista de Medicamentos')

@section('content')
<div class="container">
    <h2>Lista de Medicamentos</h2>
    <a href="{{ route('medicamentos.create') }}" class="btn btn-primary mb-3">Agregar Medicamento</a>
    
    @if($medicamentos->isEmpty())
        <p>No hay medicamentos registrados.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Laboratorio</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medicamentos as $medicamento)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $medicamento->nombre }}</td>
                        <td>{{ $medicamento->laboratorio }}</td>
                        <td>{{ $medicamento->cantidad_disponible }}</td>
                        <td>${{ number_format($medicamento->precio, 2) }}</td>
                        <td>
                            <a href="{{ route('medicamentos.show', $medicamento->id) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('medicamentos.edit', $medicamento->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('medicamentos.destroy', $medicamento->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este medicamento?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
