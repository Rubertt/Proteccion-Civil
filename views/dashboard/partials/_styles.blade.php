<style>
/* === STATS GRID === */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 24px;
}

.stats-card {
    background: white;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    display: flex;
    align-items: center;
    gap: 16px;
    transition: transform 0.2s, box-shadow 0.2s;
}

.stats-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.stats-card--blue { border-left: 4px solid #0d47a1; }
.stats-card--orange { border-left: 4px solid #e65100; }
.stats-card--green { border-left: 4px solid #16a34a; }
.stats-card--yellow { border-left: 4px solid #d97706; }

.stats-card__icon {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.stats-card__icon--blue { background: rgba(13,71,161,0.1); color: #0d47a1; }
.stats-card__icon--orange { background: rgba(230,81,0,0.1); color: #e65100; }
.stats-card__icon--green { background: rgba(22,163,74,0.1); color: #16a34a; }
.stats-card__icon--yellow { background: rgba(217,119,6,0.1); color: #d97706; }

.stats-card__info {
    display: flex;
    flex-direction: column;
}

.stats-card__value {
    font-size: 1.8rem;
    font-weight: 700;
    color: #1e293b;
    line-height: 1;
}

.stats-card__label {
    font-size: 0.8rem;
    color: #64748b;
    margin-top: 4px;
}

/* === CHART PLACEHOLDER === */
.chart-placeholder {
    height: 280px;
    background: #f8fafc;
    border: 2px dashed #e2e8f0;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 8px;
}

.chart-placeholder__icon {
    font-size: 48px;
    color: #cbd5e1;
}

.chart-placeholder__text {
    color: #94a3b8;
    font-size: 0.9rem;
}

/* === DASHBOARD TABLE (simplified) === */
.dashboard-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.88rem;
}

.dashboard-table th {
    padding: 10px 16px;
    text-align: left;
    font-weight: 600;
    color: #475569;
    font-size: 0.78rem;
    text-transform: uppercase;
    letter-spacing: 0.03em;
    border-bottom: 2px solid #e2e8f0;
    background: #f8fafc;
}

.dashboard-table td {
    padding: 10px 16px;
    border-bottom: 1px solid #f1f5f9;
    color: #1e293b;
}

.dashboard-table tr:hover {
    background: #f8fafc;
}

/* Reuse badge styles */
.badge {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    display: inline-block;
}

.badge--pending { background: #fef3c7; color: #92400e; }
.badge--review { background: #dbeafe; color: #1e40af; }
.badge--closed { background: #dcfce7; color: #166534; }

/* === RESPONSIVE === */
@media (max-width: 1024px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }
}
</style>
