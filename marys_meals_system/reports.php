<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Reports &amp; Analytics — Mary's Meals Malawi</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link href="https://fonts.gstatic.com" crossorigin rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&display=swap" rel="stylesheet"/>
<link href="assets/app.css" rel="stylesheet"/>
<script src="assets/app.js" defer></script>
<style>
  .mm-bar { display: flex; align-items: center; gap: 12px; margin: 10px 0; }
  .mm-bar .mm-bar-label { width: 90px; font-size: 13px; color: var(--mm-muted); }
  .mm-bar .mm-bar-track { flex: 1; background: #eef2f7; border-radius: 6px; height: 12px; overflow: hidden; }
  .mm-bar .mm-bar-fill { height: 100%; background: var(--mm-primary); border-radius: 6px; }
  .mm-bar .mm-bar-val { width: 70px; text-align: right; font-size: 13px; font-weight: 600; }
</style>
</head>
<body data-page="reports">

<main class="mm-main">
  <div class="mm-content">

    <div class="mm-page-head">
      <h1>Reports &amp; Analytics</h1>
      <p>Programme impact and donation performance.</p>
    </div>

    <div class="mm-grid cols-4">
      <div class="mm-metric"><div class="mm-metric-label">Meals Funded (YTD)</div><div class="mm-metric-value">512,000</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Donations (YTD)</div><div class="mm-metric-value">MK 386M</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Cost per Meal</div><div class="mm-metric-value">MK 22</div></div>
      <div class="mm-metric"><div class="mm-metric-label">Schools Served</div><div class="mm-metric-value">32</div></div>
    </div>

    <div class="mm-card" style="margin-top:20px">
      <h2>Donations by Region</h2>
      <p class="mm-card-sub">Funding distribution across regions this quarter.</p>
      <div class="mm-bar"><div class="mm-bar-label">Southern</div><div class="mm-bar-track"><div class="mm-bar-fill" style="width:82%"></div></div><div class="mm-bar-val">MK 19.5M</div></div>
      <div class="mm-bar"><div class="mm-bar-label">Central</div><div class="mm-bar-track"><div class="mm-bar-fill" style="width:56%"></div></div><div class="mm-bar-val">MK 13.4M</div></div>
      <div class="mm-bar"><div class="mm-bar-label">Northern</div><div class="mm-bar-track"><div class="mm-bar-fill" style="width:34%"></div></div><div class="mm-bar-val">MK 8.1M</div></div>
      <div class="mm-btn-row">
        <button class="mm-btn" onclick="mmToast('Report exported (CSV).')"><span class="material-symbols-outlined">download</span>Export CSV</button>
        <button class="mm-btn secondary" onclick="mmToast('Report exported (PDF).')"><span class="material-symbols-outlined">picture_as_pdf</span>Export PDF</button>
      </div>
    </div>

    <div class="mm-card">
      <h2>Monthly Summary</h2>
      <table class="mm-table">
        <thead><tr><th>Month</th><th>Donations</th><th>Meals Funded</th><th>Schools Active</th></tr></thead>
        <tbody>
          <tr><td>October 2026</td><td>MK 42.6M</td><td>58,000</td><td>32</td></tr>
          <tr><td>September 2026</td><td>MK 39.2M</td><td>54,500</td><td>31</td></tr>
          <tr><td>August 2026</td><td>MK 44.1M</td><td>61,200</td><td>32</td></tr>
        </tbody>
      </table>
    </div>

  </div>
</main>

</body>
</html>
