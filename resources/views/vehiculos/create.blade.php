@extends('layouts.app')

@section('titulo', 'Registrar Vehículo')

@section('contenido')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Registrar Ingreso de Vehículo</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('vehiculos.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Placa *</label>
                            <input type="text"
                                   name="placa"
                                   class="form-control @error('placa') is-invalid @enderror"
                                   value="{{ old('placa') }}"
                                   placeholder="Ej: ABC-1234"
                                   required>
                            @error('placa')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tipo de Vehículo *</label>
                            <select name="tipo" class="form-select" required>
                                <option value="">Seleccione...</option>
                                <option value="Automóvil">🚗 Automóvil</option>
                                <option value="Motocicleta">🏍️ Motocicleta</option>
                                <option value="Camioneta">🚙 Camioneta</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Propietario (opcional)</label>
                            <input type="text"
                                   name="propietario"
                                   class="form-control"
                                   value="{{ old('propietario') }}"
                                   placeholder="Nombre del propietario">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Observaciones</label>
                            <textarea name="observaciones"
                                      class="form-control"
                                      rows="3"
                                      placeholder="Ej: Rayón en puerta trasera">{{ old('observaciones') }}</textarea>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">
                                Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                💾 Registrar Ingreso
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
