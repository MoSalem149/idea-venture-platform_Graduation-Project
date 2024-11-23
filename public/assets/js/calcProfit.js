document.addEventListener('DOMContentLoaded', function ()
{
    const planSelect = document.querySelector('select.base--bg');
    const investAmountInput = document.getElementById('invest_amount');
    const profitAmountInput = document.getElementById('profit_amount');


    function calculateProfit()
    {
        const plan = planSelect.value;
        const investAmount = parseFloat(investAmountInput.value);
        let profitRate;

        switch (plan)
        {
            case 'Standard Package':
                profitRate = 0.05;
                break;
            case 'Silver Package':
                profitRate = 0.07;
                break;
            case 'Premium Package':
                profitRate = 0.1;
                break;
            case 'Platinum Package':
                profitRate = 0.15;
                break;
            default:
                profitRate = 0;
        }

        if (!isNaN(investAmount))
        {
            const profitAmount = investAmount * profitRate;
            profitAmountInput.value = profitAmount.toFixed(2);
        }
    }


    planSelect.addEventListener('change', calculateProfit);
    investAmountInput.addEventListener('keyup', calculateProfit);
});
