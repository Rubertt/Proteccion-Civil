<style>
/* === SETTINGS SECTIONS === */
.settings-section {
    background: white;
    border-radius: 10px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    margin-bottom: 24px;
    overflow: hidden;
}

.settings-section__header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 20px;
    background: #f8fafc;
    border-bottom: 1px solid #e2e8f0;
}

.settings-section__title {
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 600;
    font-size: 1rem;
    color: #0d47a1;
}

.settings-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.88rem;
}

.settings-table th {
    padding: 10px 20px;
    text-align: left;
    font-weight: 600;
    color: #475569;
    font-size: 0.78rem;
    text-transform: uppercase;
    letter-spacing: 0.03em;
    border-bottom: 1px solid #e2e8f0;
}

.settings-table td {
    padding: 10px 20px;
    border-bottom: 1px solid #f1f5f9;
    color: #1e293b;
}

.settings-table tr:hover {
    background: #f8fafc;
}

.settings-table__actions {
    display: flex;
    gap: 4px;
}

.settings-table__actions button {
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 6px;
    border-radius: 6px;
    color: #64748b;
    transition: background 0.2s, color 0.2s;
}

.settings-table__actions button:hover {
    background: #f1f5f9;
    color: #0d47a1;
}

/* Badge for active/inactive */
.settings-badge {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    display: inline-block;
}

.settings-badge--active {
    background: #dcfce7;
    color: #166534;
}

.settings-badge--inactive {
    background: #f1f5f9;
    color: #64748b;
}

/* Disabled button style */
.btn--disabled {
    opacity: 0.5;
    cursor: not-allowed;
    pointer-events: none;
}
</style>
