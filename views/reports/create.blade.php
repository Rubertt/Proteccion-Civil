@extends('layouts.app')
@section('title', 'Nuevo Reporte EDAN')
@push('styles') 
    @include('reports.partials._styles') 
@endpush

@section('content')
<div class="page-header">
    <div>
        <h1 class="page-header__title">Nuevo Reporte EDAN</h1>
        <p class="page-header__subtitle">Complete los pasos del formulario</p>
    </div>
</div>

<div class="stepper">
    <div class="stepper__step stepper__step--active">
        <div class="stepper__step-number">1</div>
        <div class="stepper__step-label">1. Ubicación</div>
    </div>
    <div class="stepper__connector"></div>
    <div class="stepper__step">
        <div class="stepper__step-number">2</div>
        <div class="stepper__step-label">2. Personas</div>
    </div>
    <div class="stepper__connector"></div>
    <div class="stepper__step">
        <div class="stepper__step-number">3</div>
        <div class="stepper__step-label">3. Infraestructura</div>
    </div>
    <div class="stepper__connector"></div>
    <div class="stepper__step">
        <div class="stepper__step-number">4</div>
        <div class="stepper__step-label">4. Serv. Básicos</div>
    </div>
    <div class="stepper__connector"></div>
    <div class="stepper__step">
        <div class="stepper__step-number">5</div>
        <div class="stepper__step-label">5. Resumen</div>
    </div>
</div>

<form id="reportForm">
    <div class="card">
        <div class="wizard__step wizard__step--active" data-step="1">
            @include('reports.partials._step_location')
        </div>
        <div class="wizard__step" data-step="2">
            @include('reports.partials._step_people')
        </div>
        <div class="wizard__step" data-step="3">
            @include('reports.partials._step_infrastructure')
        </div>
        <div class="wizard__step" data-step="4">
            @include('reports.partials._step_lifelines')
        </div>
        <div class="wizard__step" data-step="5">
            @include('reports.partials._step_summary')
        </div>

        <div class="btn-group">
            <button type="button" id="btnPrev" class="btn btn--secondary">
                <span class="material-symbols-outlined">arrow_back</span> Atrás
            </button>
            <button type="button" id="btnNext" class="btn btn--primary">
                Siguiente <span class="material-symbols-outlined">arrow_forward</span>
            </button>
            <button type="button" id="btnSubmit" class="btn btn--primary" style="display: none;">
                <span class="material-symbols-outlined">save</span> Guardar Reporte
            </button>
        </div>
    </div>
</form>
@endsection

@push('scripts') 
    @include('reports.partials._scripts') 
@endpush
