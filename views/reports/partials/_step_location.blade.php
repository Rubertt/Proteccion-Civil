<h3 class="step-title"><span class="material-symbols-outlined">location_on</span> Ubicación y Caracterización del Evento</h3>
<div class="form-grid">
    <div class="form-group col-6">
        <label for="event_date" class="form-group__label">Fecha y Hora</label>
        <input type="datetime-local" id="event_date" class="form-group__control">
    </div>
    <div class="form-group col-6">
        <label for="event_type" class="form-group__label">Tipo de Evento / Amenaza</label>
        <select id="event_type" class="form-group__control">
            <option value="">--Seleccione--</option>
            <option value="Inundación / Anegamiento">Inundación / Anegamiento</option>
            <option value="Incendio Estructural">Incendio Estructural</option>
            <option value="Incendio Forestal">Incendio Forestal</option>
            <option value="Sismo">Sismo</option>
            <option value="Deslizamiento">Deslizamiento</option>
            <option value="Accidente Vial">Accidente Vial</option>
            <option value="Vendaval / Vientos">Vendaval / Vientos</option>
            <option value="Otro">Otro</option>
        </select>
    </div>
    <div class="form-group col-4">
        <label for="state" class="form-group__label">Estado</label>
        <select id="state" class="form-group__control">
            <option value="Portuguesa">Portuguesa</option>
        </select>
    </div>
    <div class="form-group col-4">
        <label for="municipality" class="form-group__label">Municipio</label>
        <select id="municipality" class="form-group__control">
            <option value="">--Seleccione--</option>
            <option value="Páez">Páez</option>
            <option value="Araure">Araure</option>
        </select>
    </div>
    <div class="form-group col-4">
        <label for="parish" class="form-group__label">Parroquia</label>
        <select id="parish" class="form-group__control">
            <option value="">--Seleccione--</option>
            <option value="Acarigua">Acarigua</option>
            <option value="Payara">Payara</option>
            <option value="Araure">Araure</option>
            <option value="Río Acarigua">Río Acarigua</option>
        </select>
    </div>
    <div class="form-group col-6">
        <label for="sector" class="form-group__label">Sector / Comunidad</label>
        <input type="text" id="sector" class="form-group__control" placeholder="Nombre del sector o comunidad">
    </div>
    <div class="form-group col-6">
        <label for="reference_point" class="form-group__label">Punto de Referencia</label>
        <input type="text" id="reference_point" class="form-group__control" placeholder="Ej: Frente a la cancha deportiva">
    </div>
    <div class="form-group col-6">
        <label for="latitude" class="form-group__label">Latitud</label>
        <input type="number" id="latitude" class="form-group__control" placeholder="9.5553" step="0.0001">
    </div>
    <div class="form-group col-6">
        <label for="longitude" class="form-group__label">Longitud</label>
        <input type="number" id="longitude" class="form-group__control" placeholder="-69.1953" step="0.0001">
    </div>
    <div class="form-group col-6">
        <label for="info_source" class="form-group__label">Fuente de Información</label>
        <select id="info_source" class="form-group__control">
            <option value="">--Seleccione--</option>
            <option value="Inspección directa">Inspección directa</option>
            <option value="Llamada telefónica">Llamada telefónica</option>
            <option value="Redes sociales">Redes sociales</option>
            <option value="Denuncia presencial">Denuncia presencial</option>
            <option value="Otro organismo">Otro organismo</option>
        </select>
    </div>
    <div class="form-group col-6">
        <label for="informant" class="form-group__label">Informante</label>
        <input type="text" id="informant" class="form-group__control" placeholder="Nombre del informante">
    </div>
    <div class="form-group col-12">
        <label for="preliminary_obs" class="form-group__label">Observaciones Preliminares</label>
        <textarea id="preliminary_obs" class="form-group__control" rows="3" placeholder="Descripción general de la situación observada en sitio..."></textarea>
    </div>
</div>
