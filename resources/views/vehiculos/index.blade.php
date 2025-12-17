@extends('layouts.app')

@section('titulo', 'Vehículos en el Parqueadero')

@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Vehículos Estacionados</h1>
        <a href="{{ route('vehiculos.create') }}" class="btn btn-primary">
            ➕ Registrar Ingreso
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
            <tr>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Propietario</th>
                <th>Hora de Ingreso</th>
                <th>Observaciones</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @forelse($vehiculos as $vehiculo)
                <tr>
                    <td><strong>{{ $vehiculo->placa }}</strong></td>
                    <td>{{ $vehiculo->tipo }}</td>
                    <td>{{ $vehiculo->propietario ?? '-' }}</td>
                    <td>{{ $vehiculo->created_at->format('d/m/Y H:i') }}</td>
                    <td>{{ $vehiculo->observaciones ?? '-' }}</td>
                    <td>
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}"
                           class="btn btn-sm btn-warning">
                            ✏️ Editar
                        </a>
                        <form action="{{ route('vehiculos.destroy', $vehiculo) }}"
                              method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Confirmar salida del vehículo?')">
                                🗑️ Salida
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">
                        No hay vehículos estacionados actualmente
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
