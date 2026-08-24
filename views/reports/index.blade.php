@extends('layouts.app')
@section('title', 'Historial de Reportes - EDAN')
@push('styles') 
    @include('reports.partials._styles') 
@endpush

@section('content')
<div class="page-header">
    <h1 class="page-header__title">Historial de Reportes EDAN</h1>
    <a href="#" class="btn btn--primary">
        <span class="material-symbols-outlined">add_circle</span> + Nuevo Registro
    </a>
</div>

<div class="card">
    <div class="filter-bar">
        <input type="text" class="filter-bar__input" placeholder="Buscar por sector, parroquia...">
        <select class="filter-bar__select">
            <option value="">Todos (Tipo de Evento)</option>
            <option value="Inundación">Inundación</option>
            <option value="Incendio">Incendio</option>
            <option value="Sismo">Sismo</option>
            <option value="Deslizamiento">Deslizamiento</option>
        </select>
        <select class="filter-bar__select">
            <option value="">Todos (Estado)</option>
            <option value="pending">Pendiente</option>
            <option value="review">En Revisión</option>
            <option value="closed">Cerrado</option>
        </select>
    </div>
    
    <div class="report-table__wrapper">
        <table class="report-table">
            <thead class="report-table__head">
                <tr>
                    <th>#</th>
                    <th>Fecha</th>
                    <th>Tipo de Evento</th>
                    <th>Parroquia</th>
                    <th>Sector</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="report-table__row">
                    <td class="report-table__cell">1</td>
                    <td class="report-table__cell">2026-08-20</td>
                    <td class="report-table__cell">Inundación</td>
                    <td class="report-table__cell">Acarigua</td>
                    <td class="report-table__cell">Fundación Mendoza</td>
                    <td class="report-table__cell"><span class="report-table__badge report-table__badge--pending">Pendiente</span></td>
                    <td class="report-table__cell report-table__actions">
                        <button><span class="material-symbols-outlined">visibility</span></button>
                        <button><span class="material-symbols-outlined">edit</span></button>
                        <button><span class="material-symbols-outlined">delete</span></button>
                    </td>
                </tr>
                <tr class="report-table__row">
                    <td class="report-table__cell">2</td>
                    <td class="report-table__cell">2026-08-18</td>
                    <td class="report-table__cell">Incendio Estructural</td>
                    <td class="report-table__cell">Payara</td>
                    <td class="report-table__cell">Casco Central</td>
                    <td class="report-table__cell"><span class="report-table__badge report-table__badge--review">En Revisión</span></td>
                    <td class="report-table__cell report-table__actions">
                        <button><span class="material-symbols-outlined">visibility</span></button>
                        <button><span class="material-symbols-outlined">edit</span></button>
                        <button><span class="material-symbols-outlined">delete</span></button>
                    </td>
                </tr>
                <tr class="report-table__row">
                    <td class="report-table__cell">3</td>
                    <td class="report-table__cell">2026-08-15</td>
                    <td class="report-table__cell">Deslizamiento</td>
                    <td class="report-table__cell">Araure</td>
                    <td class="report-table__cell">Cerro Moroturo</td>
                    <td class="report-table__cell"><span class="report-table__badge report-table__badge--closed">Cerrado</span></td>
                    <td class="report-table__cell report-table__actions">
                        <button><span class="material-symbols-outlined">visibility</span></button>
                        <button><span class="material-symbols-outlined">edit</span></button>
                        <button><span class="material-symbols-outlined">delete</span></button>
                    </td>
                </tr>
                <tr class="report-table__row">
                    <td class="report-table__cell">4</td>
                    <td class="report-table__cell">2026-08-12</td>
                    <td class="report-table__cell">Inundación</td>
                    <td class="report-table__cell">Acarigua</td>
                    <td class="report-table__cell">Las Vegas</td>
                    <td class="report-table__cell"><span class="report-table__badge report-table__badge--pending">Pendiente</span></td>
                    <td class="report-table__cell report-table__actions">
                        <button><span class="material-symbols-outlined">visibility</span></button>
                        <button><span class="material-symbols-outlined">edit</span></button>
                        <button><span class="material-symbols-outlined">delete</span></button>
                    </td>
                </tr>
                <tr class="report-table__row">
                    <td class="report-table__cell">5</td>
                    <td class="report-table__cell">2026-08-10</td>
                    <td class="report-table__cell">Accidente Vial</td>
                    <td class="report-table__cell">Acarigua</td>
                    <td class="report-table__cell">Av. Libertador</td>
                    <td class="report-table__cell"><span class="report-table__badge report-table__badge--closed">Cerrado</span></td>
                    <td class="report-table__cell report-table__actions">
                        <button><span class="material-symbols-outlined">visibility</span></button>
                        <button><span class="material-symbols-outlined">edit</span></button>
                        <button><span class="material-symbols-outlined">delete</span></button>
                    </td>
                </tr>
                <tr class="report-table__row">
                    <td class="report-table__cell">6</td>
                    <td class="report-table__cell">2026-08-05</td>
                    <td class="report-table__cell">Sismo</td>
                    <td class="report-table__cell">Payara</td>
                    <td class="report-table__cell">Sector Los Pinos</td>
                    <td class="report-table__cell"><span class="report-table__badge report-table__badge--review">En Revisión</span></td>
                    <td class="report-table__cell report-table__actions">
                        <button><span class="material-symbols-outlined">visibility</span></button>
                        <button><span class="material-symbols-outlined">edit</span></button>
                        <button><span class="material-symbols-outlined">delete</span></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts') 
    @include('reports.partials._scripts') 
@endpush
