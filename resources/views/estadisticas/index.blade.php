@extends('layouts.master')

@section('title', 'Estadísticas - Hospital Management')

@section('content')
    <div class="container">
        <h2>Estadísticas de Documentos</h2>
         
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tipo de Documento</th>
                    <th>Valor de Documento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if($estadisticas->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center">No hay estadísticas disponibles.</td>
                    </tr>
                @else
                    @foreach($estadisticas as $estadistica)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $estadistica->tipo_documento }}</td>
                            <td>{{ number_format($estadistica->valor_documento, 2) }}</td>  <!-- Formatear como número con decimales -->
                            <td>
                                <!-- Enlace para ver detalles -->
                                <a href="{{ route('estadisticas.show', $estadistica->id) }}" class="btn btn-sm btn-info">Ver</a>
                                <!-- Enlace para editar -->
                                <a href="{{ route('estadisticas.edit', $estadistica->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <!-- Formulario para eliminar -->
                                <form action="{{ route('estadisticas.destroy', $estadistica->id) }}" method="POST" class="inline-form" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta estadística?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
