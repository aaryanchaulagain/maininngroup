document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('tax-calculator');
    if (!form) return;

    const button = form.querySelector('button[type="button"]');
    const result = document.getElementById('tax-result');

    button?.addEventListener('click', () => {
        const income = Number(form.income.value) || 0;
        const estimate = income * 0.325;
        result.textContent = `Estimated tax (illustrative): $${estimate.toLocaleString('en-AU', { maximumFractionDigits: 0 })}`;
    });
});
