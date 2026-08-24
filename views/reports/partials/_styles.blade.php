<style>
/* === STEPPER === */
.stepper {
    display: flex;
    background-color: white;
    border-radius: 10px;
    padding: 12px 16px;
    margin-bottom: 24px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    gap: 4px;
    align-items: center;
    overflow-x: auto;
}
.stepper__step {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 8px 4px;
    position: relative;
    cursor: pointer;
}
.stepper__step-number {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background-color: #e2e8f0;
    color: #64748b;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 0.85rem;
    margin-bottom: 6px;
    transition: 0.3s;
}
.stepper__step-label {
    font-size: 0.75rem;
    color: #64748b;
    white-space: nowrap;
}
.stepper__step--active .stepper__step-number {
    background-color: var(--primary-blue);
    color: white;
    box-shadow: 0 2px 8px rgba(13,71,161,0.3);
}
.stepper__step--active .stepper__step-label {
    color: var(--primary-blue);
    font-weight: 600;
}
.stepper__step--completed .stepper__step-number {
    background-color: var(--success);
    color: white;
}
.stepper__step--completed .stepper__step-label {
    color: var(--success);
}
.stepper__connector {
    flex: 1;
    height: 2px;
    background-color: #e2e8f0;
}

/* === WIZARD === */
.wizard__step {
    display: none;
}
.wizard__step--active {
    display: block;
    animation: fadeIn 0.3s ease;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(8px); }
    to { opacity: 1; transform: translateY(0); }
}

/* === REPORT TABLE === */
.report-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.88rem;
}
.report-table__head {
    background-color: #f8fafc;
}
.report-table__head th {
    padding: 12px 16px;
    text-align: left;
    font-weight: 600;
    color: #475569;
    font-size: 0.78rem;
    text-transform: uppercase;
    letter-spacing: 0.03em;
    border-bottom: 2px solid var(--border-color);
}
.report-table__row {
    border-bottom: 1px solid #f1f5f9;
    transition: background-color 0.15s;
}
.report-table__row:hover {
    background-color: #f8fafc;
}
.report-table__cell {
    padding: 12px 16px;
    color: var(--text-dark);
    vertical-align: middle;
}
.report-table__badge {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    display: inline-block;
}
.report-table__badge--pending {
    background-color: #fef3c7;
    color: #92400e;
}
.report-table__badge--review {
    background-color: #dbeafe;
    color: #1e40af;
}
.report-table__badge--closed {
    background-color: #dcfce7;
    color: #166534;
}
.report-table__actions {
    display: flex;
    gap: 4px;
}
.report-table__actions button {
    background-color: transparent;
    border: none;
    cursor: pointer;
    padding: 6px;
    border-radius: 6px;
    color: #64748b;
    transition: 0.2s;
}
.report-table__actions button:hover {
    background-color: #f1f5f9;
    color: var(--primary-blue);
}
.report-table__wrapper {
    overflow-x: auto;
    margin: 0 -4px;
}

/* === FILTER BAR === */
.filter-bar {
    display: flex;
    gap: 12px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}
.filter-bar__input {
    padding: 9px 12px 9px 36px;
    border: 1px solid var(--border-color);
    border-radius: 8px;
    font-size: 0.88rem;
    min-width: 220px;
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 96 960 960" width="20"><path d="M796 935 533 672q-30 26-69.959 40.5T378 727q-108.162 0-183.081-75Q120 577 120 471t75-181q75-75 181.5-75t181 75Q632 365 632 471.15 632 514 618 554q-14 40-42 75l264 262-44 44ZM377 667q81.25 0 138.125-57.5T572 471q0-81-56.875-138.5T377 275q-82.083 0-139.542 57.5Q180 390 180 471t57.458 138.5Q294.917 667 377 667Z" fill="%2364748b"/></svg>');
    background-repeat: no-repeat;
    background-position: 10px center;
    font-family: inherit;
}
.filter-bar__select {
    padding: 9px 12px;
    border: 1px solid var(--border-color);
    border-radius: 8px;
    font-size: 0.88rem;
    font-family: inherit;
    background-color: white;
    min-width: 150px;
}

/* === SUMMARY (Step 5) === */
.summary-section {
    margin-bottom: 24px;
    border: 1px solid var(--border-color);
    border-radius: 10px;
    overflow: hidden;
}
.summary-section__title {
    background-color: #f8fafc;
    padding: 12px 16px;
    font-weight: 600;
    font-size: 0.9rem;
    color: var(--primary-blue);
    border-bottom: 1px solid var(--border-color);
    display: flex;
    align-items: center;
    gap: 8px;
}
.summary-section__grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 0;
}
.summary-section__item {
    padding: 12px 16px;
    border-bottom: 1px solid #f1f5f9;
}
.summary-section__label {
    font-size: 0.75rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.03em;
    margin-bottom: 2px;
}
.summary-section__value {
    font-size: 0.9rem;
    color: var(--text-dark);
    font-weight: 500;
}
.summary-section__value--empty {
    color: #cbd5e1;
    font-style: italic;
}

/* Step titles */
.step-title {
    font-size: 1.05rem;
    color: var(--primary-blue);
    font-weight: 600;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 8px;
}

/* Responsive */
@media (max-width: 768px) {
    .filter-bar {
        flex-direction: column;
    }
    .filter-bar__input {
        min-width: 100%;
    }
}
</style>
