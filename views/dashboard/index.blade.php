@extends('layouts.app')
@section('title', 'Dashboard - EDAN')

@push('styles')
    @include('dashboard.partials._styles')
@endpush

@section('content')
<div class="page-header">
    <h1>Dashboard</h1>
    <p>Resumen general del sistema</p>
</div>

<div class="stats-grid">
    <div class="stats-card stats-card--blue">
        <div class="stats-card__icon stats-card__icon--blue">
            <span class="material-symbols-outlined">assignment</span>
        </div>
        <div class="stats-card__info">
            <span class="stats-card__value">24</span>
            <span class="stats-card__label">Total Reportes</span>
        </div>
    </div>
    <div class="stats-card stats-card--orange">
        <div class="stats-card__icon stats-card__icon--orange">
            <span class="material-symbols-outlined">warning</span>
        </div>
        <div class="stats-card__info">
            <span class="stats-card__value">3</span>
            <span class="stats-card__label">Eventos Activos</span>
        </div>
    </div>
    <div class="stats-card stats-card--green">
        <div class="stats-card__icon stats-card__icon--green">
            <span class="material-symbols-outlined">group</span>
        </div>
        <div class="stats-card__info">
            <span class="stats-card__value">156</span>
            <span class="stats-card__label">Familias Afectadas</span>
        </div>
    </div>
    <div class="stats-card stats-card--yellow">
        <div class="stats-card__icon stats-card__icon--yellow">
            <span class="material-symbols-outlined">pending_actions</span>
        </div>
        <div class="stats-card__info">
            <span class="stats-card__value">7</span>
            <span class="stats-card__label">Pendientes</span>
        </div>
    </div>
</div>

<div class="card">
    <div class="card__header">
        <h2>Distribución de Eventos por Mes</h2>
    </div>
    <div class="card__body">
        <div class="chart-placeholder">
            <span class="material-symbols-outlined chart-placeholder__icon">bar_chart</span>
            <span class="chart-placeholder__text">Gráfica pendiente — Módulo de Kelvis</span>
        </div>
    </div>
</div>

<div class="card">
    <div class="card__header">
        <h2>Últimos Reportes Ingresados</h2>
    </div>
    <div class="card__body">
        <table class="dashboard-table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Evento</th>
                    <th>Sector</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>20/08/2026</td>
                    <td>Inundación</td>
                    <td>Fundación Mendoza</td>
                    <td><span class="badge badge--pending">Pendiente</span></td>
                </tr>
                <tr>
                    <td>18/08/2026</td>
                    <td>Incendio Estructural</td>
                    <td>Casco Central</td>
                    <td><span class="badge badge--review">En Revisión</span></td>
                </tr>
                <tr>
                    <td>15/08/2026</td>
                    <td>Deslizamiento</td>
                    <td>Cerro Moroturo</td>
                    <td><span class="badge badge--closed">Cerrado</span></td>
                </tr>
                <tr>
                    <td>12/08/2026</td>
                    <td>Inundación</td>
                    <td>Las Vegas</td>
                    <td><span class="badge badge--pending">Pendiente</span></td>
                </tr>
                <tr>
                    <td>10/08/2026</td>
                    <td>Accidente Vial</td>
                    <td>Av. Libertador</td>
                    <td><span class="badge badge--closed">Cerrado</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
    @include('dashboard.partials._scripts')
@endpush
