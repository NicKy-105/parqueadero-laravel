@extends('layouts.app')

@section('titulo', 'Editar Vehículo')

@section('contenido')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Editar Información del Vehículo</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('vehiculos.update', $vehiculo) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Placa *</label>
                            <input type="text"
                                   name="placa"
                                   class="form-control"
                                   value="{{ old('placa', $vehiculo->placa) }}"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tipo de Vehículo *</label>
                            <select name="tipo" class="form-select" required>
                                <option value="Automóvil" {{ $vehiculo->tipo == 'Automóvil' ? 'selected' : '' }}>🚗 Automóvil</option>
                                <option value="Motocicleta" {{ $vehiculo->tipo == 'Motocicleta' ? 'selected' : '' }}>🏍️ Motocicleta</option>
                                <option value="Camioneta" {{ $vehiculo->tipo == 'Camioneta' ? 'selected' : '' }}>🚙 Camioneta</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Propietario (opcional)</label>
                            <input type="text"
                                   name="propietario"
                                   class="form-control"
                                   value="{{ old('propietario', $vehiculo->propietario) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Observaciones</label>
                            <textarea name="observaciones"
                                      class="form-control"
                                      rows="3">{{ old('observaciones', $vehiculo->observaciones) }}</textarea>
                        </div>

                        <div class="alert alert-info">
                            <strong>Ingreso registrado:</strong> {{ $vehiculo->created_at->format('d/m/Y H:i') }}
                        </div>

                        <div class="d-flex gap-2">
                            <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">
                                Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                💾 Actualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

