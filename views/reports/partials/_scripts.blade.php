<script>
document.addEventListener('DOMContentLoaded', function() {
    // === WIZARD NAVIGATION ===
    const wizard = {
        currentStep: 1,
        totalSteps: 5,
        stepElements: document.querySelectorAll('.wizard__step'),
        stepIndicators: document.querySelectorAll('.stepper__step'),
        btnPrev: document.getElementById('btnPrev'),
        btnNext: document.getElementById('btnNext'),
        btnSubmit: document.getElementById('btnSubmit'),
        
        init() {
            if (!this.btnNext) return; // Not on create page
            this.btnNext.addEventListener('click', () => this.nextStep());
            this.btnPrev.addEventListener('click', () => this.prevStep());
            if (this.btnSubmit) this.btnSubmit.addEventListener('click', () => this.submit());
            this.stepIndicators.forEach((indicator, i) => {
                indicator.addEventListener('click', () => {
                    if (i + 1 <= this.getMaxVisitedStep()) this.goToStep(i + 1);
                });
            });
            this.updateUI();
        },
        
        getMaxVisitedStep() {
            return Math.max(this.currentStep, ...Array.from(this.stepIndicators)
                .map((el, i) => el.classList.contains('stepper__step--completed') ? i + 1 : 0));
        },
        
        goToStep(n) {
            if (n < 1 || n > this.totalSteps) return;
            this.stepElements.forEach(el => el.classList.remove('wizard__step--active'));
            const target = document.querySelector(`[data-step="${n}"]`);
            if (target) target.classList.add('wizard__step--active');
            // Mark previous steps as completed
            this.stepIndicators.forEach((el, i) => {
                el.classList.remove('stepper__step--active', 'stepper__step--completed');
                if (i + 1 < n) el.classList.add('stepper__step--completed');
                if (i + 1 === n) el.classList.add('stepper__step--active');
            });
            this.currentStep = n;
            this.updateUI();
            // If step 5 (summary), render summary
            if (n === 5) this.renderSummary();
        },
        
        nextStep() { this.goToStep(this.currentStep + 1); },
        prevStep() { this.goToStep(this.currentStep - 1); },
        
        updateUI() {
            if (!this.btnPrev) return;
            this.btnPrev.style.visibility = this.currentStep === 1 ? 'hidden' : 'visible';
            if (this.btnNext) this.btnNext.style.display = this.currentStep === this.totalSteps ? 'none' : 'flex';
            if (this.btnSubmit) this.btnSubmit.style.display = this.currentStep === this.totalSteps ? 'flex' : 'none';
        },
        
        renderSummary() {
            const summaryContainer = document.getElementById('summaryContent');
            if (!summaryContainer) return;
            const form = document.getElementById('reportForm');
            if (!form) return;
            // Build summary HTML by reading form values
            const sections = [
                { title: 'Ubicación y Evento', icon: 'location_on', step: 1 },
                { title: 'Afectación Humana', icon: 'group', step: 2 },
                { title: 'Infraestructura', icon: 'home_repair_service', step: 3 },
                { title: 'Servicios Básicos', icon: 'electric_bolt', step: 4 }
            ];
            let html = '';
            sections.forEach(section => {
                const stepEl = form.querySelector(`[data-step="${section.step}"]`);
                if (!stepEl) return;
                const inputs = stepEl.querySelectorAll('input, select, textarea');
                let items = '';
                inputs.forEach(input => {
                    const label = stepEl.querySelector(`label[for="${input.id}"]`);
                    const labelText = label ? label.textContent : input.id;
                    const value = input.value || '';
                    const valueClass = value ? '' : ' summary-section__value--empty';
                    items += `<div class="summary-section__item"><div class="summary-section__label">${labelText}</div><div class="summary-section__value${valueClass}">${value || 'Sin completar'}</div></div>`;
                });
                html += `<div class="summary-section"><div class="summary-section__title"><span class="material-symbols-outlined">${section.icon}</span>${section.title}</div><div class="summary-section__grid">${items}</div></div>`;
            });
            summaryContainer.innerHTML = html;
        },
        
        submit() {
            alert('Reporte guardado exitosamente (simulación).\nEn producción, esto enviará los datos al servidor via Livewire.');
        }
    };
    wizard.init();
    
    // === TABLE FILTER (for index page) ===
    const filterInput = document.querySelector('.filter-bar__input');
    const filterSelects = document.querySelectorAll('.filter-bar__select');
    const tableRows = document.querySelectorAll('.report-table__row');
    
    function filterTable() {
        if (!filterInput || !tableRows.length) return;
        const search = filterInput.value.toLowerCase();
        const eventType = filterSelects[0] ? filterSelects[0].value : '';
        const status = filterSelects[1] ? filterSelects[1].value : '';
        
        tableRows.forEach(row => {
            const text = row.textContent.toLowerCase();
            const matchSearch = !search || text.includes(search);
            const matchEvent = !eventType || text.includes(eventType.toLowerCase());
            const matchStatus = !status || row.querySelector(`.report-table__badge--${status}`);
            row.style.display = matchSearch && matchEvent && matchStatus ? '' : 'none';
        });
    }
    
    if (filterInput) filterInput.addEventListener('input', filterTable);
    if (filterSelects.length) filterSelects.forEach(s => s.addEventListener('change', filterTable));
});
</script>
