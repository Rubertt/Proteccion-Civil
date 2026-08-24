<h3 class="step-title"><span class="material-symbols-outlined">home_repair_service</span> Infraestructura y Viviendas</h3>
<div class="form-grid">
    <div class="form-group col-4">
        <label for="affected_homes" class="form-group__label">Viviendas Afectadas</label>
        <input type="number" id="affected_homes" class="form-group__control" placeholder="0" min="0">
    </div>
    <div class="form-group col-4">
        <label for="destroyed_homes" class="form-group__label">Viviendas Destruidas</label>
        <input type="number" id="destroyed_homes" class="form-group__control" placeholder="0" min="0">
    </div>
    <div class="form-group col-4">
        <label for="at_risk_homes" class="form-group__label">Viviendas en Riesgo</label>
        <input type="number" id="at_risk_homes" class="form-group__control" placeholder="0" min="0">
    </div>
    <div class="form-group col-6">
        <label for="structure_type" class="form-group__label">Tipo de Estructura Predominante</label>
        <select id="structure_type" class="form-group__control">
            <option value="">--Seleccione--</option>
            <option value="Bloque">Bloque</option>
            <option value="Bahareque">Bahareque</option>
            <option value="Zinc/Láminas">Zinc/Láminas</option>
            <option value="Mixta">Mixta</option>
            <option value="Concreto armado">Concreto armado</option>
        </select>
    </div>
    <div class="form-group col-6">
        <label for="damage_level" class="form-group__label">Nivel de Daño General</label>
        <select id="damage_level" class="form-group__control">
            <option value="">--Seleccione--</option>
            <option value="Leve">Leve</option>
            <option value="Moderado">Moderado</option>
            <option value="Severo">Severo</option>
            <option value="Destrucción total">Destrucción total</option>
        </select>
    </div>
    <div class="form-group col-6">
        <label for="affected_schools" class="form-group__label">Centros Educativos Afectados</label>
        <input type="number" id="affected_schools" class="form-group__control" placeholder="0" min="0">
    </div>
    <div class="form-group col-6">
        <label for="affected_health_centers" class="form-group__label">Centros de Salud Afectados</label>
        <input type="number" id="affected_health_centers" class="form-group__control" placeholder="0" min="0">
    </div>
    <div class="form-group col-6">
        <label for="affected_roads" class="form-group__label">Vías Afectadas</label>
        <input type="number" id="affected_roads" class="form-group__control" placeholder="0" min="0">
    </div>
    <div class="form-group col-6">
        <label for="affected_bridges" class="form-group__label">Puentes Afectados</label>
        <input type="number" id="affected_bridges" class="form-group__control" placeholder="0" min="0">
    </div>
    <div class="form-group col-6">
        <label for="affected_crops" class="form-group__label">Hectáreas de Cultivo Afectadas</label>
        <input type="number" id="affected_crops" class="form-group__control" placeholder="0.0" min="0" step="0.1">
    </div>
    <div class="form-group col-6">
        <label for="affected_animals" class="form-group__label">Animales Afectados</label>
        <input type="number" id="affected_animals" class="form-group__control" placeholder="0" min="0">
    </div>
    <div class="form-group col-12">
        <label for="damage_description" class="form-group__label">Descripción de Daños</label>
        <textarea id="damage_description" class="form-group__control" rows="3" placeholder="Descripción detallada de daños a infraestructura..."></textarea>
    </div>
</div>
