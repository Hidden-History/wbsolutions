/**
 * ROI Calculator for WB Solutions
 * Interactive calculator for estimating AI automation savings
 */

document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('roi-calculator');
  if (!form) return;

  const inquiriesInput = document.getElementById('calc-inquiries');
  const hourlyRateInput = document.getElementById('calc-hourly-rate');
  const hoursPerInquiryInput = document.getElementById('calc-hours-per-inquiry');
  const automationRateInput = document.getElementById('calc-automation-rate');
  const calculateBtn = document.getElementById('calc-button');

  const monthlySavingsEl = document.getElementById('calc-monthly-savings');
  const annualSavingsEl = document.getElementById('calc-annual-savings');
  const paybackPeriodEl = document.getElementById('calc-payback-period');
  const resultTipEl = document.getElementById('calc-result-tip');

  function calculateROI() {
    const customerInquiries = parseFloat(inquiriesInput.value) || 0;
    const hourlyRate = parseFloat(hourlyRateInput.value) || 0;
    const hoursPerInquiry = parseFloat(hoursPerInquiryInput.value) || 0;
    const automationRate = parseFloat(automationRateInput.value) || 0;

    // Calculate monthly hours saved
    const automatedInquiries = (customerInquiries * automationRate) / 100;
    const hoursSaved = automatedInquiries * hoursPerInquiry;
    const monthlySavings = hoursSaved * hourlyRate;
    const annualSavings = monthlySavings * 12;

    // Assume $7,500 investment (Professional tier)
    const investment = 7500;
    const paybackMonths = monthlySavings > 0 ? investment / monthlySavings : 0;

    // Update display
    monthlySavingsEl.textContent = '$' + Math.round(monthlySavings).toLocaleString();
    annualSavingsEl.textContent = '$' + Math.round(annualSavings).toLocaleString();
    paybackPeriodEl.textContent = paybackMonths > 0 ? (Math.round(paybackMonths * 10) / 10) + ' mo' : 'Calculate';

    // Show result tip if there are savings
    if (monthlySavings > 0) {
      resultTipEl.innerHTML = '💡 Based on your inputs, AI automation could save your business <span class="font-bold text-gold">$' +
        Math.round(monthlySavings).toLocaleString() + '/month</span>, paying for itself in just ' +
        (Math.round(paybackMonths * 10) / 10) + ' months!';
      resultTipEl.classList.remove('hidden');
    } else {
      resultTipEl.classList.add('hidden');
    }
  }

  // Auto-calculate on input change (optional - uncomment for real-time updates)
  // [inquiriesInput, hourlyRateInput, hoursPerInquiryInput, automationRateInput].forEach(input => {
  //   input.addEventListener('input', calculateROI);
  // });

  // Calculate on button click
  calculateBtn.addEventListener('click', function(e) {
    e.preventDefault();
    calculateROI();
  });

  // Initialize with default values
  calculateROI();
});
