@extends('layouts.app')
@section('title', 'Configuración - EDAN')

@push('styles')
    @include('settings.partials._styles')
@endpush

@section('content')
<div class="page-header">
    <h1>Configuración del Sistema</h1>
    <p>Gestión de catálogos y parámetros</p>
</div>

<div class="settings-section">
    <div class="settings-section__header">
        <div class="settings-section__title">
            <span class="material-symbols-outlined">category</span>
            Tipos de Evento / Amenaza
        </div>
        <button class="btn btn--primary btn--disabled" title="Funcionalidad pendiente" disabled>+ Agregar</button>
    </div>
    <div class="settings-section__body">
        <table class="settings-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Inundación / Anegamiento</td>
                    <td><span class="settings-badge settings-badge--active">Activo</span></td>
                    <td class="settings-table__actions">
                        <button><span class="material-symbols-outlined">edit</span></button>
                        <button><span class="material-symbols-outlined">delete</span></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Incendio Estructural</td>
                    <td><span class="settings-badge settings-badge--active">Activo</span></td>
                    <td class="settings-table__actions">
                        <button><span class="material-symbols-outlined">edit</span></button>
                        <button><span class="material-symbols-outlined">delete</span></button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Incendio Forestal</td>
                    <td><span class="settings-badge settings-badge--active">Activo</span></td>
                    <td class="settings-table__actions">
                        <button><span class="material-symbols-outlined">edit</span></button>
                        <button><span class="material-symbols-outlined">delete</span></button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Sismo</td>
                    <td><span class="settings-badge settings-badge--active">Activo</span></td>
                    <td class="settings-table__actions">
                        <button><span class="material-symbols-outlined">edit</span></button>
                        <button><span class="material-symbols-outlined">delete</span></button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Deslizamiento</td>
                    <td><span class="settings-badge settings-badge--active">Activo</span></td>
                    <td class="settings-table__actions">
                        <button><span class="material-symbols-outlined">edit</span></button>
                        <button><span class="material-symbols-outlined">delete</span></button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Accidente Vial</td>
                    <td><span class="settings-badge settings-badge--active">Activo</span></td>
                    <td class="settings-table__actions">
                        <button><span class="material-symbols-outlined">edit</span></button>
                        <button><span class="material-symbols-outlined">delete</span></button>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Vendaval / Vientos</td>
                    <td><span class="settings-badge settings-badge--inactive">Inactivo</span></td>
                    <td class="settings-table__actions">
                        <button><span class="material-symbols-outlined">edit</span></button>
                        <button><span class="material-symbols-outlined">delete</span></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="settings-section">
    <div class="settings-section__header">
        <div class="settings-section__title">
            <span class="material-symbols-outlined">map</span>
            Parroquias y Sectores
        </div>
        <button class="btn btn--primary btn--disabled" title="Funcionalidad pendiente" disabled>+ Agregar</button>
    </div>
    <div class="settings-section__body">
        <table class="settings-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Parroquia</th>
                    <th>Municipio</th>
                    <th>Sectores Registrados</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Acarigua</td>
                    <td>Páez</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Payara</td>
                    <td>Páez</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Araure</td>
                    <td>Araure</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Río Acarigua</td>
                    <td>Páez</td>
                    <td>6</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="settings-section">
    <div class="settings-section__header">
        <div class="settings-section__title">
            <span class="material-symbols-outlined">manage_accounts</span>
            Usuarios del Sistema
        </div>
        <button class="btn btn--primary btn--disabled" title="Funcionalidad pendiente" disabled>+ Agregar</button>
    </div>
    <div class="settings-section__body">
        <table class="settings-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Robert Pérez</td>
                    <td>Operador</td>
                    <td>Activo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Luis García</td>
                    <td>Administrador</td>
                    <td>Activo</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Kelvis Rodríguez</td>
                    <td>Operador</td>
                    <td>Activo</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
    @include('settings.partials._scripts')
@endpush
